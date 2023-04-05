<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
</head>
<style>
    body{
        background-color: #262626;
        text-align: center;
    }
    form {
        display: inline-block;
    }
    input{
        margin-top: 0.5rem;
    }
    button {
        margin-top: 0.2rem;
    }
</style>
<body>
<?php
include 'db_conn.php';

$id = $_GET['id'];
$sql = "SELECT id, name, realese, score FROM games WHERE id = $id";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $p_name = $row['name'];
        $p_realese = $row['realese'];
        $p_score = $row['score'];
    }
}


?>
    <form action='edit_script.php?id=<?php echo $id;?>' method='POST'>
        <a>Name: </a><input type='textarea' name="name" placeholder="<?php echo $p_name?>" required>
        </br>
        <a>Realese: </a><input type="textarea" name="realese" placeholder="<?php echo $p_realese?>" required>
        </br>
        <a>Score: </a><input type="textarea" name="score" placeholder="<?php echo $p_score?>" required>
        </br>
        <input text="UPDATE" type="submit" name="update" value="UPDATE">
    </form>

</body>
</html>