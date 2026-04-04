<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Internal BUMN - Tim Cloud Ops</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; text-align: center; padding-top: 10vh; margin: 0; }
        .card { background-color: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: inline-block; max-width: 500px; border-top: 5px solid #0056b3; }
        h1 { color: #333; margin-bottom: 5px; }
        p { color: #666; font-size: 16px; margin-bottom: 20px; }
        .ip-box { background-color: #e9ecef; color: #d9534f; padding: 15px; border-radius: 8px; font-size: 22px; font-weight: bold; border: 1px dashed #ced4da; margin-top: 20px; }
        .footer { margin-top: 30px; font-size: 12px; color: #999; }
    </style>
</head>
<body>

    <div class="card">
        <h1>Portal Internal BUMN</h1>
        <p>Status: <strong>✅ Server Aktif dan Berjalan</strong></p>
        
        <div class="ip-box">
            IP Server Responden:<br>
            <?php 
                // Mengambil IP lokal dari server (sangat berguna untuk test Load Balancer)
                $server_ip = $_SERVER['SERVER_ADDR'];
                echo $server_ip ? $server_ip : "Tidak terdeteksi (Jalankan di Web Server)";
            ?>
        </div>

        <div class="footer">
            Di-provisioning dan dimonitor secara ketat oleh <b>Tim Cloud Operations</b>.
        </div>
    </div>

</body>
</html>