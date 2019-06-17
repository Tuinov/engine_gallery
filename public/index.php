<?php
include "../config/config.php";

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = [];

switch ($page) {
    case 'index':
    break;
    case 'gallery':
    $pictures = array_slice(scandir("gallery_img/small"), 2);
    $params = [
        'pictures' => $pictures
    ];
    break;
    case 'catalog':
    $params = [
        'catalog' => ["Чай", "Печенье", "Вафли"]
    ];
}

if(isset($_POST['load'])) {
    $path = "gallery_img/big/" . $_FILES['myfile']['name'];
    $save = "gallery_img/small/" . $_FILES['myfile']['name'];
    if(move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {
        
        echo "файл загружен!<br>";

        create_thumbnail($path, $save);
    
    } else {
        echo "Ошибка загрузки!<br>";
    }
}

echo render($page, $params);
