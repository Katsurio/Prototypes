<!-- index_insert.php -->
<?php
require_once('mysql_connect.php');

print_r($conn);

$title = 'Spilt milk';
$details = "Don\'t cry, just clean it";
$timestamp = time();
$user_id = 5;

$query = /** @lang text */
    "INSERT INTO `todo_items` SET
            `title` = '$title',
            `details` = '$details',
            `timestamp` = '$timestamp',
            `user_id` = '$user_id'";

print('<br><br>'.$query.'<br><br>');

$result = mysqli_query($conn, $query);
print("<br><br><pre>".print_r($result, true).'</pre>');

if(mysqli_affected_rows($conn) > 0){
    print("<br>Row was inserted");
}
else{
    print("<br>ERROR, needs more blinker fluid");
}
mysqli_close($conn);
?>