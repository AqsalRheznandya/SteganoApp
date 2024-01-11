<?php

// Set error reporting to display errors (for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$backgroundTmp = $_FILES['background']['tmp_name'];
$pesanTmp = $_FILES['pesan']['tmp_name'];

$extBackground = pathinfo($_FILES['background']['name'], PATHINFO_EXTENSION);
$extPesan = pathinfo($_FILES['pesan']['name'], PATHINFO_EXTENSION);
$allowedExtensions = array('png', 'gif', 'jpg', 'jpeg');

// Additional check for allowed extensions
if (!in_array($extBackground, $allowedExtensions) || !in_array($extPesan, $allowedExtensions)) {
    echo "<script type='text/javascript'>alert('Pastikan Anda mengupload gambar dengan format yang benar'); window.history.go(-1);</script>";
    exit();
}

// Additional check for file sizes
if ($_FILES['background']['size'] <= $_FILES['pesan']['size']) {
    echo "<script type='text/javascript'>alert('Gambar background harus lebih besar ukurannya dari gambar pesan'); window.history.go(-1);</script>";
    exit();
}

// Check if both files are uploaded successfully
if (is_uploaded_file($backgroundTmp) && is_uploaded_file($pesanTmp)) {
    try {
        $type = pathinfo($backgroundTmp, PATHINFO_EXTENSION);
        $message = base64_encode(file_get_contents($pesanTmp));

        $pesan = serialize(['data' => $message, 'type' => $type]);

        $processor = new KzykHys\Steganography\Processor();
        $image = $processor->encode($backgroundTmp, $pesan);

        header('Content-Type: image/png');
        header("Content-Disposition: attachment;filename=encrypted.png");
        $image->render();
    } catch (Exception $e) {
        echo "<script type='text/javascript'>alert('Error during image processing: {$e->getMessage()}'); window.history.go(-1);</script>";
        exit();
    }
} else {
    echo "<script type='text/javascript'>alert('Gagal mengupload file'); window.history.go(-1);</script>";
    exit();
}
?>
