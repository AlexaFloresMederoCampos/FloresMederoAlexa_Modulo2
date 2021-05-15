<?php
    define("DBUSER","root");
    define("DBHOST","localhost");
    define("PASSWORD","");
    define("DB","Act8");

    function connectdb()
    {
        $con=mysqli_connect(DBHOST,DBUSER,PASSWORD,DB);
        if(!$con)
        {
            mysqli_connect_error();
            mysqli_connect_errno();
        }
        return $con;
    }
?>