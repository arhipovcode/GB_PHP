<?php
function uploadFile(string $name, string $destination) {
    if(isset($_FILES[$name])) {
        $tmpPath = $_FILES[$name]['tmp_name'];
        $destination .= "/{$_FILES[$name]['name']}";
        move_uploaded_file($tmpPath,$destination);
    }
}

function createImage(string $name_file) {
    $sql = "INSERT INTO images (name_img, count, title) VALUES ('{$name_file}', 0, '{$name_file}')";
    return updateDb($sql);
}