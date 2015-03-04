import mosquitto
client = mosquitto.Mosquitto('test-client-id')
client.connect('192.248.10.70')
client.publish('test', '24.0')
client.disconnect()
