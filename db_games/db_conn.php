    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = "mydb";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);
    if($conn -> connect_errno) {
        echo "Connection Failed!";
        exit();
    }
    else {

    }
    
    ?>