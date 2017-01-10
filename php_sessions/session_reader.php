<?php
session_start()?>
<pre>
<?php
print_r($_GET);
$_SESSION['name'] = $_GET['name'];
$_SESSION['age'] = $_GET['age'];
$_SESSION['occupation'] = $_GET['occupation'];
print_r($_SESSION);
?>
</pre>
