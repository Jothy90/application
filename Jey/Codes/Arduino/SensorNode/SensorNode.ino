#include <dht.h>


#define dht_dpin A1 //no ; here. Set equal to channel sensor is on
dht DHT;

int sleepXbee=7;

int photocellPin = A2; // the cell and 10K pulldown are connected to a0


int motionPin= 10;
int motion_analog= A0;
int noisePin= A3;

int xbee=3;

String data;

const int sampleWindow = 50; // Sample window width in mS (50 mS = 20Hz)
unsigned int sample;


void setup(){
  Serial.begin(57600);
  //Serial.println("fyp11");
  //pinMode(sleepXbee,OUTPUT);
  //digitalWrite(sleepXbee,LOW);
  pinMode(xbee,OUTPUT);
  pinMode(A0,INPUT);
  //pinMode(9,OUTPUT);
  digitalWrite(xbee,HIGH);
  //analogReference(EXTERNAL);
  delay(5000); 
	
}

void loop(){
  unsigned long startMillis= millis(); // Start of sample window
  unsigned int peakToPeak = 0; // peak-to-peak level
 
  unsigned int signalMax = 0;
  unsigned int signalMin = 1024;

  //delay(0);
 // digitalWrite(sleepXbee,LOW);
  //delay(10000);
  
  DHT.read11(dht_dpin);
 // analogWrite(9,120);
  
  //******************************************** LIGHT SENSOR********************//
 int  photocellReading = analogRead(photocellPin);
 int  motionanalogReading = analogRead(motion_analog);
 int  noiseReading = analogRead(noisePin);
  

 boolean motionReading = digitalRead(motionPin);
 
    // collect data for 50 mS
  while (millis() - startMillis < sampleWindow)
  {
  sample = analogRead(0);
  if (sample < 1024) // toss out spurious readings
  {
  if (sample > signalMax)
  {
  signalMax = sample; // save just the max levels
  }
  else if (sample < signalMin)
  {
  signalMin = sample; // save just the min levels
  }
  }
  }
  peakToPeak = signalMax - signalMin; // max - min = peak-peak amplitude
  double noise = (peakToPeak * 3.3) / 1024; // convert to volts
   
  //Serial.println(noiseReading);
  
  data ="ENTC1";
  data+="  ";
  data+="1";
  data+="  ";
  data+=String((int)DHT.temperature*100);
  data+="  ";
  data+="2";
  data+="  ";
  data+=String((int)DHT.humidity*100);
  data+="  ";
  data+="3";
  data+="  ";
  data+=String(photocellReading);
  data+="  ";
  data+="4";
  data+="  ";
  data+=String(motionReading);
  data+="  ";
  data+="5";
  data+="  ";
  data+=String(motionanalogReading);
  data+="  ";
  data+="6";
  data+="  ";
  data+=String((int)noise*100);
  
  
//  Serial.print("ENTC1");  //Temperature
//  Serial.print("  ");
//  Serial.print("1");  //Temperature
//  Serial.print("  ");
//  Serial.print(DHT.temperature);
//  //Serial.print(" *C ");
//  Serial.print("  ");
//  Serial.print("2"); //Humidity
//  Serial.print("  ");
//  Serial.print(DHT.humidity);
//  Serial.print("  ");
//  Serial.print("3"); //Light
//  Serial.print("  ");
//  Serial.print(photocellReading);
//  Serial.print("  ");
//  Serial.print("4"); //Motion
//  Serial.print("  ");
//  Serial.print(motionReading);
//  Serial.print("  ");
//  Serial.print("5"); //MotionAnalog
//  Serial.print("  ");;
//  Serial.print(motionanalogReading);
//  Serial.print("  ");
//  Serial.print("6"); //Noise
//  Serial.print("  ");
//  Serial.println(noise);
   Serial.println(data);
  
  delay(50);
  //digitalWrite(sleepXbee,HIGH);   

}

