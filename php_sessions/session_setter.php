<!-- Session Setter -->
<?php
session_start();
print_r($_SESSION);
?>

<form action="session_reader.php" method="get">
    Name:<br>
    <input type="text" name="name" id="name" value="
<?= $name = (isset($_SESSION['name'])) ? $_SESSION['name'] : 'empty'; ?>"><br>
    Age:<br>
    <input type="text" name="age" id="age" value="
<?= $age = (isset($_SESSION['age'])) ? $_SESSION['age'] : 'empty'; ?>"><br>
    Occupation:<br>
    <input type="text" name="occupation" id="occupation" value="
<?= $occupation = (isset($_SESSION['occupation'])) ? $_SESSION['occupation'] : 'empty'; ?>"><br>
    <button type="submit">Submit</button>
</form>