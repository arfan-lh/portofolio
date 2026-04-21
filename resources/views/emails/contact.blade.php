<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .card { background: white; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto; }
        .label { color: #888; font-size: 12px; margin-bottom: 4px; }
        .value { font-size: 15px; margin-bottom: 16px; color: #222; }
        .message-box { background: #f9f9f9; padding: 15px; border-radius: 6px; border-left: 4px solid #6c63ff; }
    </style>
</head>
<body>
    <div class="card">
        <h2 style="color:#6c63ff;">📩 Pesan Baru Masuk!</h2>
        <div class="label">Nama</div>
        <div class="value">{{ $senderName }}</div>
        <div class="label">Email</div>
        <div class="value">{{ $senderEmail }}</div>
        <div class="label">Pesan</div>
        <div class="message-box">{{ $message }}</div>
    </div>
</body>
</html>