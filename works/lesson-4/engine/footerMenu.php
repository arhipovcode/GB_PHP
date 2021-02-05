<?php
function getFooter() {
    $data = [];
    $file = fopen(DB_DIR . 'footer.csv', 'r');
    while ($row = fgetcsv($file, 0, ';')) {
        $data[] = $row;
    }
    fclose($file);
    foreach ($data as $text) :
        echo '<div style="text-align: center">' . $text[0] . '</div>';
    endforeach;
}