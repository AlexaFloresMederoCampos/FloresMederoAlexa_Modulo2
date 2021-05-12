<?php
    define("DBUSER","root");
    define("DBHOST","localhost");
    define("PASSWORD","root");
    define("DB","Act8");

    function connectdb()
    {
        $con=mysqli_connect(DBHOST,DBUSER,PASSWORD,DB);
        if(!$con)
        {
            echo "No se pudo acceder a la base de datos";
        }
        return $con;
    }
?>