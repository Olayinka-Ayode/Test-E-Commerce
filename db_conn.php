<?php
    function openCon() {
        $dbhost = "127.0.0.1:5500";
        $dbuser = "Base";
        $dbpass = "yinka";
        $dbname = "e-commerce";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Connect failed: %s\n". $conn -> error);

        return $conn;
    }
?>