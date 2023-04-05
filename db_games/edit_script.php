<?php
include "db_conn.php";

$id = $_GET['id'];
echo $id;
$name = $_POST['name'];
$realese = $_POST['realese'];
$score  = $_POST['score'];


$sql_update = "UPDATE games SET name = '$name', realese = '$realese', score = $score WHERE id = $id";
mysqli_query($conn, $sql_update);


header("Location: db_write.php");
?>