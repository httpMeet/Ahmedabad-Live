<?php

class createCon  {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = 'root123'; // ✅ EMPTY for XAMPP
    var $db = 'ahmdlive';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (!$con) {
            die('Could not connect to database! ' . mysqli_connect_error());
        } else {
            $this->myconn = $con;
        }

        return $this->myconn;
    }

    function close() {
        mysqli_close($this->myconn); // ✅ FIXED BUG
        echo 'Connection closed!';
    }
}

?>