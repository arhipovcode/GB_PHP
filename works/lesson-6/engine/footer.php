<?php
function getFooter() {
    $data = [];

    $file = fopen(DATA_DIR . "footer.csv", 'r');
    while ($row = fgetcsv($file, 0, ';')) {
        $data[] = $row;
    }
    fclose($file);
    return $data;
}