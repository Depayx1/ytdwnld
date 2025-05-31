<!DOCTYPE html>
<html>
<head>
    <title>Video Downloader</title>
    <style>
        body { font-family: Arial; padding: 50px; text-align: center; }
        input, select, button { padding: 10px; margin: 5px; }
    </style>
</head>
<body>
    <h1>Video Downloader Multi-Platform</h1>
    <form action="get_video_info.php" method="POST">
        <input type="text" name="url" placeholder="Masukkan URL video" required>
        <select name="platform" required>
            <option value="">Pilih Platform</option>
            <option value="youtube">YouTube</option>
            <option value="facebook">Facebook</option>
            <option value="instagram">Instagram</option>
            <option value="tiktok">TikTok</option>
        </select>
        <button type="submit">Proses</button>
    </form>
</body>
</html>
