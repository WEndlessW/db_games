<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>
<style type="text/css">
    body {
        background-color: #262626;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        color: #eb4034;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
        border: 5px solid;
        border-color: #660000;
    }

    th {
        background-color: #660000;
        color: white;
    }
    button {
        border-radius: 4px;
        float: right;
        margin-left: 0.2rem;
        width: 1.5rem;
        height: 1.5rem;
        border: 3px solid;
        text-align: center;
    }
    button:hover {
        background-color:black;
        color: white;
        transition: 0.7s;
    }
    .insert {
        float: left;
        width: 3.96rem;
        height: 1.5rem;
        margin-top: 0.2rem;
    }
    .ed {
        text-align: right;
    }
    tr:nth-child(even) {background-color: #8c8c8c}
</style>
<body>
    <table> 
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Realese</th>
            <th>Score</th>
            <th class="ed">Delete/Edit</th>
        </tr>
<?php
include_once "db_conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_delete = mysqli_query($conn, "DELETE FROM games WHERE id = $id");
    echo "$id";
}


$sql = "SELECT * FROM games";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
       echo "<tr> <td>". $row['id']. "</td><td>". $row['name']. "</td><td>". $row['realese']. "</td><td>". $row['score']. "</td><td>". "<a href='edit.php?id=".$row['id']."'><button>E</button></a>". "<a href='db_write.php?id=".$row['id']."'><button>D</button></a></td></tr></br>";
    }
}

?>
    </table>
    <form method="POST" action="insert.php">
        <button class="insert">INSERT</button>
    </form>
</body>
</html>