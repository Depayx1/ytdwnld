<!DOCTYPE html>
<html>
<head>
  <title>Download Video</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container py-5">

<?php

if (isset($_POST['url'])) {
    $url = escapeshellarg($_POST['url']);
    $listCommand = "yt-dlp -F $url";
    $formats = shell_exec($listCommand);

    echo "
      <div class='card bg-secondary p-4 mb-3'>
        <h4>Resolusi Tersedia:</h4>
        <pre class='text-white'>$formats</pre>
        <form method='POST' action='download.php'>
          <input type='hidden' name='url' value=".$_POST['url'].">
          <div class='mb-3'>
            <label class='form-label'>Masukkan Format Code:</label>
            <input type='text' name='format' class='form-control' required>
          </div>
          <button type='submit' name='download' class='btn btn-success w-100'>Download Video</button>
        </form>
      </div>
    ";
}

// Kalau proses download
if (isset($_POST['download'])) {
    $url = escapeshellarg($_POST['url']);
    $format = escapeshellarg($_POST['format']);
    $downloadCommand = "yt-dlp -f $format $url -o '/sdcard/ytweb/downloads/%(title)s.%(ext)s'";
    $result = shell_exec($downloadCommand);

    echo "
      <div class='alert alert-success'>
        <h4 class='alert-heading'>Download selesai!</h4>
        <pre>$result</pre>
        <a href='index.php' class='btn btn-primary mt-3'>Kembali ke Beranda</a>
      </div>
    ";
}

?>

</div>

</body>
</html>
