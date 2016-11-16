<!DOCTYPE html>
<html>
<body>
<form action="index_insert.php" method="post">
    Title:<br>
    <input type="text" name="title" placeholder="Title">
    <br>
    Details:<br>
    <textarea type="text" name="details" placeholder="Details"></textarea>
    <br>
    Time:<br>
    <input type="radio" name="timestamp" checked> Now
    <br>
    User ID:<br>
    <input type="number" min="1" max="9" name="user_id">
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>