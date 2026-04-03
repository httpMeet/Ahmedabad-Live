<?php

class createCon  {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = 'root123';
    var $db = 'ahmdlive';
    var $port = '3307';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db, $this->port);
        if (!$con) 
        {
            die('Could not connect to database!');
        }
        else 
        {
            $this->myconn = $con;
            
        }
        return $this->myconn;
    }

    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}

?>