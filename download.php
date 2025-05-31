<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $downloadUrl = $_POST['download_url'];
    if (!$downloadUrl) {
        die("Link download tidak ditemukan.");
    }
    header("Location: $downloadUrl");
    exit();
} else {
    header("Location: index.php");
}
?>
