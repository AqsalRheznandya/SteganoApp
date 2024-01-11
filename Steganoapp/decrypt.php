<?php

// Set error reporting to display errors (for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$pesanTmp = $_FILES['pesan']['tmp_name'];

$extPesan = pathinfo($_FILES['pesan']['name'], PATHINFO_EXTENSION);
$allowedExtensions = array('png');

// Additional check for allowed extensions
if (!in_array($extPesan, $allowedExtensions)) {
    echo "<script type='text/javascript'>alert('Pastikan Anda mengupload gambar yang terenkripsi'); window.history.go(-1);</script>";
    exit();
}

// Check if the file is uploaded successfully
if (is_uploaded_file($pesanTmp)) {
    try {
        $processor = new KzykHys\Steganography\Processor();
        $message = $processor->decode($pesanTmp);

        $pesan = unserialize($message);

        if ($pesan) {
            $fileType = $pesan['type'];
            $fileName = "decrypted.png"; // Gunakan tipe gambar dari pesan untuk menentukan nama file
            header(sprintf('Content-Type: image/%s', $fileType));
            header(sprintf('Content-Disposition: attachment;filename=%s', $fileName));
            echo base64_decode($pesan['data']);
        } else {
            echo "<script type='text/javascript'>alert('Gambar tidak mengandung pesan'); window.history.go(-1);</script>";
        }
    } catch (Exception $e) {
        echo "<script type='text/javascript'>alert('Error during image processing: {$e->getMessage()}'); window.history.go(-1);</script>";
        exit();
    }
} else {
    echo "<script type='text/javascript'>alert('Gagal mengupload file'); window.history.go(-1);</script>";
    exit();
}
?>
