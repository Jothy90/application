# used for test the data collectioon since 19th Dec // update on 8th Jan
from xbee import ZigBee
import serial  
import datetime #for date
import time  # for delay
#import mosquitto  #mqqt client

PORT = '/dev/ttyUSB0'
BAUD_RATE =9600

# Open serial port

ser = serial.Serial(PORT, BAUD_RATE)

# Create API object
xbee = ZigBee(ser)

#client = mosquitto.Mosquitto('test-client-id')
#client.connect('192.248.10.70')

# Continuously read and print packets
while True:
    try:
        address64 = b"\x00\x00\x00\x00\x00\x00\xFF\xFF"
        #xbee.send("tx",dest_addr_long=address64,dest_addr=b"\x00\x00", data="prasanth")
        time.sleep(1)
        response = xbee.wait_read_frame()
        print str(datetime.datetime.now())[:-7]+"  "+response['rf_data']
        data=response['rf_data']
        dd=data.split()
        
        #print response
       # f = open("All_10nodes_n.txt",'a')
     
       # f.write(str(datetime.datetime.now())[:-7]+"  "+response['rf_data']+"\n")   
        
        #f.close()


 #      client.publish('test', dd[1])
##       client.disconnect()
    except KeyboardInterrupt:
        break

ser.close()
