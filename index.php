<!DOCTYPE html>
<html>
<head>
  <title>YouTube Downloader</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container py-5">
  <div class="text-center mb-4">
    <h1>YouTube Video Downloader</h1>
    <p class="text-secondary">Download video favoritmu langsung dari Termux via web!</p>
  </div>

  <div class="card p-4 bg-secondary">
    <form method="POST" action="download.php">
      <div class="mb-3">
        <label class="form-label">Masukkan URL YouTube:</label>
        <input type="text" name="url" class="form-control" placeholder="https://youtu.be/xxxxx" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Lihat Resolusi</button>
    </form>
  </div>
</div>

</body>
</html>
