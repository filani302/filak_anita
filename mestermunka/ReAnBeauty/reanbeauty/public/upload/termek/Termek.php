<?php
$termek = 'termekMeghatarozasok/';
$maxFiles = 1;
$maxWidth = 800;
$maxHeight = 800;
$allowedTypes = ['image/jpeg', 'image/png'];

if (!is_dir($termek)) {
    mkdir($termek, 0777, true);
}

$images = array_diff(scandir($termek), array('..', '.'));

if (count($images) >= $maxFiles) {
    echo "<p>Elérted a maximális feltöltési limitet ($maxFiles kép).</p>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $fileType = $_FILES['image']['type'];
    if (!in_array($fileType, $allowedTypes)) {
        echo "<p>Csak JPG és PNG fájlok engedélyezettek!</p>";
    } else {
        list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
        if ($width > $maxWidth || $height > $maxHeight) {
            echo "<p>A kép maximális mérete 800x800 pixel lehet!</p>";
        } else {
            $fileName = basename($_FILES['image']['name']);
            $targetFile = $termek . $fileName;
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                echo "<p>Kép sikeresen feltöltve!</p>";
            } else {
                echo "<p>Hiba történt a feltöltés során.</p>";
            }
        }
    }
}
?>