<?php
function getRenderMenu() {
    $data = [];
    $file = fopen(DB_DIR . 'menu.csv', 'r');
    while ($row = fgetcsv($file, 0, ';')) {
        $data[] = $row;
    }
    fclose($file);
    echo '<ul>';
    foreach ($data as $value) :
        echo '<li>' . $value[0] . '</li>';
    endforeach;
    echo '</ul>';
}