
<?php

include 'conn.php';

$SNO = $_GET['SNO'];

$deletequery = "DELETE FROM details WHERE SNO = '$SNO' ";

mysqli_query($con, $deletequery);

header('location:fetch.php');

?>