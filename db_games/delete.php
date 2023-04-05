<?php
include 'db_conn.php';

$sql = "SELECT * FROM games";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $_GET['id'];
    }
}
echo $id. "</br>";
$sql_d = mysqli_query($conn, "DELETE FROM 'games' WHERE 'id'= '$id'");


?>