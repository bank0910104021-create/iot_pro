<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบันทึกการตรวจสอบ ESP32 IoT</title>
    <style>
        body { font-family: Tahoma, sans-serif; background-color: #f4f6f9; margin: 0; padding: 15px; }
        .header { background-color: #d9534f; color: white; padding: 12px; border-radius: 8px; text-align: center; margin-bottom: 15px; }
        .container { display: flex; flex-wrap: wrap; gap: 15px; max-width: 1400px; margin: auto; }
        .card { background: white; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); padding: 15px; flex: 1; min-width: 320px; }
        h3 { margin-top: 0; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        iframe { width: 100%; height: 650px; border: none; }
        .btn { background: #0275d8; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; float: right; font-size: 13px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>🚨 ระบบบันทึกและตรวจสอบแจ้งเตือนอุณหภูมิ (ESP32 IoT)</h2>
    </div>
    <div class="container">
        <div class="card">
            <h3>📋 1. กรอกบันทึกการตรวจสอบ (Google Forms)</h3>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeR3blhb6cFXQihvULxX-BhgMKbaqmIUVyCpKeMHWVmZKtaHg/viewform?embedded=true">กำลังโหลด…</iframe>
        </div>
        <div class="card">
            <h3>
                📊 2. ตารางข้อมูล (Google Sheets)
                <a href="javascript:location.reload();" class="btn">🔄 รีเฟรชตาราง</a>
            </h3>
            <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTpN5UhrPQrZmJA0CBvd8cQczI31I1dXidPt5sdgmjXSjGttyCQymVOYIH4u6nsmkwzyHOEYxlQz9Ej/pubhtml?widget=true&headers=false"></iframe>
        </div>
    </div>
</body>
</html>
