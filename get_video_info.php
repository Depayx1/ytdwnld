<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url'];
    $platform = $_POST['platform'];

    if (!$url || !$platform) {
        die("URL atau platform belum diisi.");
    }

    // Ambil API URL dari config
    $apiUrl = $api_list[$platform] . urlencode($url);

    // Ambil data dari API
    $response = file_get_contents($apiUrl);
    if (!$response) {
        die("Gagal mengambil data dari API.");
    }

    $data = json_decode($response, true);
    if (!isset($data['formats'])) {
        die("Data video tidak ditemukan.");
    }

    echo "<h2>Judul Video: " . htmlspecialchars($data['title']) . "</h2>";
    echo "<form action='download.php' method='POST'>";
    echo "<input type='hidden' name='url' value='" . htmlspecialchars($url) . "'>";
    echo "<input type='hidden' name='platform' value='" . htmlspecialchars($platform) . "'>";

    echo "<label>Pilih Resolusi:</label><br>";
    echo "<select name='download_url' required>";

    foreach ($data['formats'] as $format) {
        $label = $format['quality'] . " - " . $format['format'];
        echo "<option value='" . $format['url'] . "'>$label</option>";
    }

    echo "</select><br><br>";
    echo "<button type='submit'>Download Video</button>";
    echo "</form>";
} else {
    header("Location: index.php");
}
?>
