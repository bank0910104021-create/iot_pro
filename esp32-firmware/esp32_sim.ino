#include <WiFi.h>
#include <HTTPClient.h>

const char* WIFI_SSID = "YOUR_WIFI_NAME";
const char* WIFI_PASS = "YOUR_WIFI_PASS";

const char* INFLUX_URL = "http://<AZURE_VM_IP>:8086/api/v2/write?org=my-org&bucket=sensor-data&precision=s";
const char* INFLUX_TOKEN = "Token my-super-secret-token-1234";

unsigned long lastTime = 0;

void setup() {
  Serial.begin(115200);
  WiFi.begin(WIFI_SSID, WIFI_PASS);
  Serial.print("Connecting to WiFi");
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("\nConnected! IP: " + WiFi.localIP().toString());
  randomSeed(analogRead(0));
}

void loop() {
  if (millis() - lastTime >= 5000) {
    lastTime = millis();
    if (WiFi.status() == WL_CONNECTED) {
      float temp = random(250, 451) / 10.0;
      float hum  = random(400, 801) / 10.0;

      String payload = "env,device=esp32_01 temperature=" + String(temp, 1) + ",humidity=" + String(hum, 1);

      HTTPClient http;
      http.begin(INFLUX_URL);
      http.addHeader("Authorization", INFLUX_TOKEN);
      http.addHeader("Content-Type", "text/plain");

      int code = http.POST(payload);
      if (code == 204) {
        Serial.printf("[OK] Temp: %.1f C, Hum: %.1f %%\n", temp, hum);
      } else {
        Serial.printf("[ERR] Code: %d | %s\n", code, http.getString().c_str());
      }
      http.end();
    }
  }
}