<?php
    $images = glob("images/*.*");
    $output = array("success" => true, "error" => false, "files" => $images);
    print json_encode($output);
?>
