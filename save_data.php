if (isset($_FILES['upload-image'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['upload-image']['name']);

    if (move_uploaded_file($_FILES['upload-image']['tmp_name'], $uploadFile)) {
        echo 'File berhasil diupload!';
    } else {
        echo 'Terjadi kesalahan saat mengupload file!';
    }
}
