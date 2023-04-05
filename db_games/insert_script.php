<?php
include_once "db_conn.php";

$name = $_POST['name'];
$realese = $_POST['realese'];
$score = $_POST['score'];

$sql =  "INSERT INTO games (name, realese, score) VALUES ('$name', '$realese','$score');";
mysqli_query($conn, $sql);

header("Location: db_write.php");
?>