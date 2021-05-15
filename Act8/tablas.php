<?php
    include("./Config.php");
    $conexion = connectdb();
    $asignaturas = "SELECT * FROM asignaturas";
    $modalidad = "SELECT * FROM modalidad";
    $carrera = "SELECT * FROM carrera";
    $ubi = "SELECT * FROM ubicacion";

    $query= mysqli_query($conexion,$asignaturas);
    echo "<table border =1>";
    echo "<thead>";
        echo "<tr>";
            echo "<th colspan='5'>";
                echo "asignaturas";
            echo "</th>";
        echo "</tr>";
    echo "<thead>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tbody>";
            echo "<tr>";
                echo "<td>";
                    echo "Clave:".$row[0];
                echo "</td>";
                echo "<td>";
                    echo "Nombre:".$row[1];
                echo "</td>";
                echo "<td>";
                    echo "Año:".$row[2];
                echo "</td>";
                echo "<td>";
                    echo "Area:".$row[3];
                echo "</td>";
                echo "<td>";
                    echo "Optativa: ".$row[4];
                echo "</td>";
            echo "</tr>";
        echo "<tbody>";        
    }
    echo "<table>";

    $query= mysqli_query($conexion,$modalidad);
    echo "<table border =1>";
    echo "<thead>";
        echo "<tr>";
            echo "<th colspan='2'>";
                echo "modalidad";
            echo "</th>";
        echo "</tr>";
    echo "<thead>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tbody>";
            echo "<tr>";
                echo "<td>";
                    echo $row[0];
                echo "</td>";
                echo "<td>";
                    echo $row[1];
                echo "</td>";
            echo "</tr>";
        echo "<tbody>";     
    }
    echo "<table>";

    $query= mysqli_query($conexion,$carrera);
    echo "<table border =1>";
    echo "<thead>";
        echo "<tr>";
            echo "<th colspan='2'>";
                echo "carrera";
            echo "</th>";
        echo "</tr>";
    echo "<thead>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tbody>";
            echo "<tr>";
                echo "<td>";
                    echo $row[0];
                echo "</td>";
                echo "<td>";
                    echo $row[1];
                echo "</td>";
            echo "</tr>";
        echo "<tbody>";     
    }
    echo "<table>";
    $query= mysqli_query($conexion,$ubi);
    echo "<table border =1>";
    echo "<thead>";
        echo "<tr>";
            echo "<th colspan='2'>";
                echo "ubicacion";
            echo "</th>";
        echo "</tr>";
    echo "<thead>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tbody>";
            echo "<tr>";
                echo "<td>";
                    echo $row[0];
                echo "</td>";
                echo "<td>";
                    echo $row[1];
                echo "</td>";
            echo "</tr>";
        echo "<tbody>";     
    }
    echo "<table>";
        
?>
