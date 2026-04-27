<?php

// Insecure File Upload
// No validation of file type or content — allows uploading PHP webshells
if (isset($_FILES['upload'])) {
    $destination = '/var/www/uploads/' . $_FILES['upload']['name'];
    move_uploaded_file($_FILES['upload']['tmp_name'], $destination);
    echo 'File uploaded to: ' . $destination;
}

?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <button type="submit">Upload</button>
</form>
