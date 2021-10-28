<?php

class Connect {

    public function dbConnect() {

        $host = "127.0.0.1";
        $username = "root";
        $pass = "";

        try {

            $db = mysqli_connect($host, $username, $pass, 'users');
            return $db;

        } catch (PDOException $e) {

            echo 'Connection failed : ' . $e->getMessage();

        }

    }

}

?>