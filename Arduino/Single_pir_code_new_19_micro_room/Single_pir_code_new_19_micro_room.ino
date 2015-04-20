//..............Final Version of Senosr Node Data Stream ........................//
#include <dht.h>

#define dht_dpin 12 
////////////////////////////
#define pir1 A0
#define noisepin A1
#define pir2 A3

dht DHT;
const int pir1_d=10;
const int pir2_d= 11;


int photocellPin = A2; // the cell and 10K pulldown are connected to a0

int xbee=3;

String data;



int  photocellReading = analogRead(photocellPin);
int  motionanalogReading = analogRead(pir1);
int  noiseReading = analogRead(noisepin);


/////////////////////////////////////////////////////////////////Noise Variables/////////////
unsigned long startMillis;
unsigned int peakToPeak = 0; // peak-to-peak level
 
unsigned int signalMax = 0;
unsigned int signalMin = 1024;
const int sampleWindow = 20; // Sample window width in mS (20 mS = 50Hz)
unsigned int noisesample;



const int noise_window_pir=25;//25 Data ,500ms
float noise_total;
float noise_total_ave;
//int p;

int noise_count_start;
int noise_counter;
int noise_decision; //levels 0-15

/////////////////////////////////////////////////////////////////PIR declare////////
int pir_total;
float pir_total_ave;
const int motion_window=50;

int motion_count_start;
int motion_counter;
int pir_com;
int motion_decision;  //+1,0,-1,2

int p,q;
int minval;
int motion_max_point;
int motion_min_point;
int motion_max;
int motion_min;

/////////////////////////////////////light variables//////////////////
const int light_window_pir=25;//25 Data ,500ms
float light_total;
float light_total_ave;
//int p;

int light_count_start;
int light_counter;
int light_decision; //level 0,1,2,3,4,5,6,7,8,9,10


/////////////////////////////////////////////////////////////
int photocell_ref=0;
int temp_ref=0;
int humidity_ref=0;
int noise_ref=0;

boolean current_ref=false;


int numoftime=0;




/////////////////////////////////////////



void setup(){
  
    Serial.begin(57600);

    noise_count_start=0;
    noise_counter=0;
    noise_total=0;
    noise_total_ave=0;
    
    light_count_start=0;
    light_counter=0;
    light_total=0;
    light_total_ave=0;
    
   
    delay(5000);
    
    pir_total=0;
    pir_total_ave=0;
    pir_com=0;
    
    pinMode(pir1_d,INPUT);
    pinMode(pir2_d,INPUT);
    
    pinMode(xbee,OUTPUT);
    digitalWrite(xbee,HIGH);
    
    minval=0;
    
    motion_max=512;
    motion_min=512;
    motion_max_point=0;
    motion_min_point=0;
    

    
    
   
    }
    
    
    
    
    
    
    
    
   
   
  



void loop(){
  
//DHT.read11(dht_dpin);              // May have problem. It may take much time  

photocellReading = analogRead(photocellPin);
 motionanalogReading = analogRead(pir1);
 noiseReading = analogRead(noisepin);
  
///////////////////////// Noise Start/////////////////////////////////////////////////////////////////
  
 
 startMillis= millis(); // Start of sample window

 peakToPeak = 0; // peak-to-peak level
 signalMax = 0;
 signalMin = 1024;
  // print out the value you read:
  
 
   

   
     while (millis() - startMillis < sampleWindow)
  {
  noisesample = analogRead(noisepin);

  
  
  if (noisesample < 1024) // toss out spurious readings
  {
  if (noisesample > signalMax)
  {
  signalMax = noisesample; // save just the max levels
  }
  else if (noisesample < signalMin)
  {
  signalMin = noisesample; // save just the min levels
  }
  }

  }
  peakToPeak = signalMax - signalMin; // max - min = peak-peak amplitude
  double noise = (peakToPeak * 3.3) / 1024;
  
 
  
  
  
  //Threshhold Detection  //
  
//   if((noise>0.5) && (noise_count_start==0)){
//   noise_count_start=1;
//    
//   }
   
    if(noise_count_start==0){
   noise_count_start=1;
    
   }
   
   else if (noise_count_start==1){
   noise_total=noise_total+noise;
    
   if(noise_counter==noise_window_pir){
   noise_total_ave=noise_total/noise_window_pir;
  // Serial.println(noise_total_ave);
//  Serial.println(noise_total_ave);
  
  ///Noise theresholds 0-15
  
   if (noise_total_ave<=0.01)
   noise_decision=0;
   
   else if (noise_total_ave<=0.03)
   noise_decision=1;
   
    else if (noise_total_ave<=0.06)
   noise_decision=2;
   
    else if (noise_total_ave<=0.1)
   noise_decision=3;
   
    else if (noise_total_ave<=0.15)
   noise_decision=4;
   
    else if (noise_total_ave<=0.21)
   noise_decision=5;
   
    else if (noise_total_ave<=0.3)
   noise_decision=6;
   
    else if (noise_total_ave<=0.5)
   noise_decision=7;
   
    else if (noise_total_ave<=0.8)
   noise_decision=8;
   
    else if (noise_total_ave<=1.2)
   noise_decision=9;
   
    else if (noise_total_ave<=1.6)
   noise_decision=10;
   
    else if (noise_total_ave<=2.1)
   noise_decision=11;
   
    else if (noise_total_ave<=2.4)
   noise_decision=12;
   
    else if (noise_total_ave<=2.7)
   noise_decision=13;
   
    else if (noise_total_ave<=3)
   noise_decision=14;   
    else 
    noise_decision=15;
   
   
   
   
  ////Noise Thresholds
   
   
   noise_counter=0;
   noise_count_start=0;
   noise_total=0;
   noise_total_ave=0;
   
   }
   noise_counter=noise_counter+1; 
   }
   
   else{
     Serial.println("Noise Error");
     
   }
     
   
  
   
   
 ////////////////////////////////////////////Noise Program End///////////////////////////////////  

     
  ////////////////////////PIR Start///////////////////////////////////////////////////////////////////////

   if((digitalRead(pir1_d)==0 )&&(motion_count_start==0)){
     motion_count_start=1;
     motion_max_point=0;
     motion_min_point=0;
     motion_max=512;
     motion_min=512;
     
    
     
     //minval=512;
   }
   
   
   else if(motion_count_start==1){
    
      p=analogRead(pir1);
     // Serial.println(p);
      q=digitalRead(pir1_d);
     
     if((q==0)&&(p>motion_max)){
     motion_max=p;
     motion_max_point=motion_counter;
     
     }
     
     
     if((q==0)&&(p<motion_min)){
     motion_min=p;
     motion_min_point=motion_counter;
     
     }
       
     
       

     
     if (motion_counter==(6*motion_window)){
       if ((motion_max_point>motion_min_point)&&(motion_max!=512)&&(motion_min!=512)){
         motion_decision=+1;
         
       }
       
       else  if ((motion_max_point<motion_min_point)&&(motion_max!=512)&&(motion_min!=512)){
         motion_decision=-1;
         
       }
       
       else{
         motion_decision=2;
         //Serial.println("No change");
       }
       
       
       motion_max_point=0;
       motion_min_point=0;
       motion_counter=0;  
       motion_count_start=0;   
      // motion_decision=0;
      
     
     }
     
      motion_counter=motion_counter+1;
   }
   
   
   else{
     
     
     
   }
  
////////////////////////////////////////////////////////////////PIR End/////////////////////////////////////////////////////////////////////////////





/////////////////////////////Light Level/////////////////////////////////////
 if(light_count_start==0){
   light_count_start=1;
    
   }
   
   else if (light_count_start==1){
   light_total=light_total+noise;
    
   if(light_counter==light_window_pir){
   light_total_ave=light_total/light_window_pir;

  
  ///Noise theresholds 10
  
   if (light_total_ave<=100)
   light_decision=0;
   
   else if (light_total_ave<=200)
   light_decision=1;
   
    else if (noise_total_ave<=300)
   light_decision=2;
   
    else if (noise_total_ave<=400)
   light_decision=3;
   
    else if (noise_total_ave<=500)
   light_decision=4;
   
    else if (noise_total_ave<=600)
   light_decision=5;
   
   else if (light_total_ave<=700)
   light_decision=6;
   
    else if (noise_total_ave<=800)
   light_decision=7;
   
    else if (noise_total_ave<=900)
   light_decision=8;
   
    else if (noise_total_ave<=1000)
   light_decision=9;
   
    else 
    light_decision=10;
   
   
   
   
  ////Noise Thresholds
   
   
   light_counter=0;
   light_count_start=0;
   light_total=0;
   light_total_ave=0;
   
   }
   light_counter=light_counter+1; 
   }
   
   else{
     Serial.println("light Error");
     
   }





/////////////////////////////////////////////////////////////////////////////





 ///////////////////////////////////Data stream/////////////
 
  data ="Micro";
  
   if(numoftime==50){
     DHT.read11(dht_dpin);
   
   }
  
  if(abs(temp_ref-DHT.temperature)>1){
    if((DHT.temperature!=0) && (DHT.temperature<70)){
   
    temp_ref=DHT.temperature;
    data+=" ";
    data+="1";
    data+=":";
    data+=String((int)(temp_ref));
  
   
    
    }
  }
  
  if(abs(humidity_ref-DHT.humidity)>1){
    if((DHT.humidity!=0)&&(DHT.humidity<100)){  
     
    humidity_ref=DHT.humidity;
    data+=" ";
    data+="2";
    data+=":";
    data+=String((int)(humidity_ref));
    }
  }
  
  if(abs(photocell_ref- photocellReading)>50){
    photocell_ref=photocellReading;
    data+=" ";
    data+="3";
    data+=":";
    data+=String(photocellReading);
  }
  
  if(motion_decision!=0){
  data+=" ";
  data+="4";
  data+=":";
  data+=String(motion_decision);
  motion_decision=0;
  }
  
  if(noise_decision!=noise_ref){
    noise_ref=noise_decision;
    data+=" ";
    data+="5";
    data+=":";
    data+=String(noise_decision);
   // Serial.println(noise_decision);
  }
  
  if(numoftime==50){
  numoftime=0;
  data+=" ";
  data+="6";
  data+=":";
  data+=String(motionanalogReading);
  data+=" ";
  data+="7";
  data+=":";
  data+=String(noise*100);
  }
  
 if(!data.equals("Micro"))
   Serial.println(data);
  
  numoftime++;
 
 
 
 //////////////////////////////////////////
    

    
   
  
}
 

