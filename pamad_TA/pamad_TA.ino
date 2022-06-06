#include "DHT.h"
#include "WiFi.h"
#include "HTTPClient.h"


#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN,DHTTYPE);

const char* ssid = "alfandol";
const char* pass = "26262626";

const char* host = "192.168.163.46";

void setup() {
  Serial.begin(9600);
  dht.begin();
  
  WiFi.begin(ssid, pass);
  Serial.println("Connecting...");
  while(WiFi.status() !=WL_CONNECTED)
  {
    Serial.print(".");
    delay(500);
  }
}

void loop() {
  float suhu = dht.readTemperature();
  int kelembapan = dht.readHumidity();

  int ldr = analogRead( A0 );

  Serial.println("Suhu : " + String(suhu) );
  Serial.println("Kelembapan : " + String(kelembapan) );
  Serial.println("LDR : " + String(ldr) );

  WiFiClient client;
  const int httpPort = 80;
  if( !client.connect(host, httpPort))
  {
    Serial.println("connetion Failed");
    return;
  }
  
  String Link;
  HTTPClient http;
  Link = "http://" + String(host) + "/multisensor/kirimdata.php?suhu=" + String(suhu) + "&kelembapan=" + String(kelembapan) + "&ldr=" + String(ldr);

  http.begin(Link);
  http.GET();

  String respon = http.getString();
  Serial.println(respon);
  http.end();
  delay(1000);
}
