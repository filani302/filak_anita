<?php
$allergen = 'allergenMeghatarozasok/';
$maxFiles = 1;
$maxWidth = 1000;
$maxHeight = 10800;
$allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/bmp', 'image/jfif'];

if (!is_dir($allergen)) {
    mkdir($allergen, 0777, true);
}

$images = array_diff(scandir($allergen), array('..', '.'));

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
            $targetFile = $allergen . $fileName;
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                echo "<p>Kép sikeresen feltöltve!</p>";
            } else {
                echo "<p>Hiba történt a feltöltés során.</p>";
            }
        }
    }
}
?>


