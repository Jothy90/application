import paho.mqtt.client as mqtt
import time
import datetime
import random

mqttc = mqtt.Client()
mqttc.connect("192.248.10.70")
mqttc.loop_start()

while True:
    temperature = random.random()
    #temperature = "12 34 23 43 43 34 34 34 34 34 32 32 54 65 76"
    mqttc.publish("test", temperature)
    time.sleep(0.05)


