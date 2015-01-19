#include <dht.h>


#define dht_dpin A1 //no ; here. Set equal to channel sensor is on
dht DHT;

int sleepXbee=7;

int photocellPin = A0; // the cell and 10K pulldown are connected to a0


int motionPin= 2;
int xbee=3;


void setup(){
  Serial.begin(9600);
  Serial.println("fyp11");
  //pinMode(sleepXbee,OUTPUT);
  //digitalWrite(sleepXbee,LOW);
  pinMode(xbee,OUTPUT);
  digitalWrite(xbee,HIGH);
  delay(5000); 
	
}

void loop(){
  delay(2000);
 // digitalWrite(sleepXbee,LOW);
  //delay(10000);
  
  DHT.read11(dht_dpin);
  
  
  //******************************************** LIGHT SENSOR********************//
 int  photocellReading = analogRead(photocellPin);
  

 boolean motionReading = digitalRead(motionPin);
  
  
  Serial.print("1");  //Temperature
  Serial.print("  ");
  Serial.print(DHT.temperature);
  //Serial.print(" *C ");
  Serial.print("  ");
  Serial.print("2"); //Humidity
  Serial.print("  ");
  Serial.print(DHT.humidity);
  Serial.print("  ");
  Serial.print("3"); //Light
  Serial.print("  ");
  Serial.print(photocellReading);
  Serial.print("  ");
  Serial.print("4"); //Motion
  Serial.print("  ");
  Serial.println(motionReading);
  
  delay(2000);
  //digitalWrite(sleepXbee,HIGH);   

}
