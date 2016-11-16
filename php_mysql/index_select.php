<!-- index_select.php -->
<?php
require_once('mysql_connect.php');

print("conn: ");
print_r($conn);

//print(print_r("conn: $conn"));
$query = 'SELECT * FROM `users`,`todo_items` WHERE `user_id`= 5 AND `users`.`id`= `todo_items`.`user_id`';
//$query = 'SELECT * FROM `users`';

$result = mysqli_query($conn, $query);

print("<br><br><pre>" . print_r($result, true) . '</pre>');

if (mysqli_num_rows($result) > 0) {
//    echo "<br><br> We have results";
    while ($row = mysqli_fetch_assoc($result)) {
        print("<br>Got a row" . print_r($row, true));
//        $output[] = $row;
//        print("<br>Got a row" . print_r($output, true));
    }
}
?>