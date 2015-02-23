#include <dht.h>


#define dht_dpin A1 //no ; here. Set equal to channel sensor is on
dht DHT;

int sleepXbee=7;

int photocellPin = A2; // the cell and 10K pulldown are connected to a0


int motionPin= 10;
int motion_analog= A0;
int noisePin= A3;

int xbee=3;


void setup(){
  Serial.begin(9600);
  //Serial.println("fyp11");
  //pinMode(sleepXbee,OUTPUT);
  //digitalWrite(sleepXbee,LOW);
  pinMode(xbee,OUTPUT);
  pinMode(A0,INPUT);
  pinMode(9,OUTPUT);
  digitalWrite(xbee,HIGH);
  analogReference(EXTERNAL);
  delay(5000); 
	
}

void loop(){
  delay(0);
 // digitalWrite(sleepXbee,LOW);
  //delay(10000);
  
  DHT.read11(dht_dpin);
 // analogWrite(9,120);
  
  //******************************************** LIGHT SENSOR********************//
 int  photocellReading = analogRead(photocellPin);
 int  motionanalogReading = analogRead(motion_analog);
 int  noiseReading = analogRead(noisePin);
  

 boolean motionReading = digitalRead(motionPin);
  
 
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
//  Serial.print("  ");
  Serial.print("Motion :");
  Serial.println(motionanalogReading);
  
//  Serial.print("  ");
//  Serial.print("6"); //Noise
//  Serial.print("  ");
//  Serial.println(noiseReading);
  
  delay(50);
  //digitalWrite(sleepXbee,HIGH);   

}

