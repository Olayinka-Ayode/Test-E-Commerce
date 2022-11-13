<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    include 'db_conn.php';

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email) || empty($password)) {
        header("Location: login.html");
    }else {
        $sql = "INSERT INTO test(email, password) VALUES('$email','$password')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "You have logged in";
        }else {
            echo "Failure";
        }
    }

}else {
    header("Location: login.html");
}
