<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Insert</title>
</head>
<?php
    include "db_conn.php";
?>
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
        margin-top: 0.25rem;
        border: 3px solid;
        border-radius: 4px;;
        text-align: center;
    }
    button:hover {
        background-color:black;
        color: white;
        transition: 0.7s;
    }
</style>
<body>
    <form action="insert_script.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        </br>
        <input type="date" name="realese" placeholder="2023-03-16">
        </br>
        <input type="text" name="score" placeholder="5 (1-10)">
        </br>
        <button type="submit" name="insert">INSERT</button>
    </form>
</body>
</html>