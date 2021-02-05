<?php
function getImages() {
    $images = array_diff(scandir('../public/img', 1), ['..', '.']);

    foreach ($images as $image):
        $img = '<img src="img/'.$image.'"'. ' alt="">';

        echo '<div class="image">'.$img.'</div>';
    endforeach;
}
