<?php
    function printDiv($text, $class) {
        echo "<div class='" . $class . "'>" . $text . "</div>";
    };

    function connectDatabase($dbname, $host = 'localhost', $username = 'root', $password = '') {
        $databaseHost = $host;
        $databaseName = $dbname;
        $databaseUsername = $username;
        $databasePassword = $password;

        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

        //verifica la connessione
        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $mysqli;
    }
?>