<?php

define('IMAGES_DIR', 'images/');

function uploadImage() {
    $arrayImage = array_splice(scandir(IMAGES_DIR),2);

    $arrayImageDB = getAssocResult("SELECT * FROM images");

    if (!$arrayImageDB) {
        foreach ($arrayImage as $filename) {
            $fileSize = filesize(IMAGES_DIR.$filename);
            $folder = IMAGES_DIR;
            executeSql("INSERT INTO images (name, folder, size) VALUES ('".$filename."', '".$folder."', ".$fileSize.")");
        }
    }
}

function getImages() {
    $tmp = getAssocResult("SELECT * FROM images ORDER BY views DESC");
    if (!$tmp) {
        uploadImage();
    }
    return getAssocResult("SELECT * FROM images ORDER BY views DESC");

}

function getImage($id) {
    executeSql("UPDATE images SET views = views + 1 WHERE id=$id");
    return getOneResult("SELECT * FROM images WHERE id = {$id}");
}
