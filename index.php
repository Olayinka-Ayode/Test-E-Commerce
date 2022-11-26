<?php
    include 'db_conn.php';

    $conn = openCon();
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($conn->connect_error) {
        die('Connection failed : ' .$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into users(email, password) values(?, ?)");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        echo "Sucessful";
        $stmt->close();
        $conn->close();
    }
?>