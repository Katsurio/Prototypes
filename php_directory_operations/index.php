<div id="image_container">

    <?php
    $images = glob("images/*.*");
    foreach ($images as $url) {
        echo "<img src =$url>";
    }
    ?>

</div>