<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("./Config.php");
        $conexion = connectdb();
        $numCuenta = $_POST["numCuenta"];
        $i=0;

        if(isset($_POST["numCuenta"]))
        {
            $ncuenta = "INSERT INTO alumno (Ncuenta) VALUES ($numCuenta)";
            $qNCuenta= mysqli_query($conexion,$ncuenta);
            $consulta = "SELECT * FROM alumno WHERE Ncuenta = $numCuenta";
            $carrera = "SELECT nombre FROM carrera";
            $qConsulta= mysqli_query($conexion,$consulta);
            $qCarrera= mysqli_query($conexion,$carrera);

            //si no hay
            if($qNCuenta)
            {
                echo '<form action="./opcionesPase.php" method="POST">';
                        echo '<fieldset style="width: 300px">';
                            echo '<legend>Inicio</legend>';
                            echo '<label for="Nombre">';
                                echo 'Nombre(s): <input type="text" name="Nombre" required>';
                                echo  '</label>';
                                echo '<br><br>';
                                echo '<label for="ApP">';
                                    echo 'Apellido paterno: <input type="text" name="ApP" required>';
                                echo '</label>';
                                echo '<br><br>';
                                echo '<label for="ApM">';
                                    echo 'Apellido materno: <input type="text" name="ApM" required>';
                                echo '</label>';
                                echo '<br><br>';
                                echo '<label> Area';
                                    echo '<select name="area">';
                                        echo '<option value="a1">Area I: Fisico Matematicas y las Ingenierias</option>';
                                        echo '<option value="a2">Area II: Ciencias Biologicas y de la Salud</option>';
                                        echo '<option value="a3">Area III: Ciencias Sociales</option>';
                                        echo '<option value="a4">Area IV: Humanidades y Artes</option>';
                                    echo '</select>';
                                echo '</label>';
                                echo '<br><br>';
                                echo '<label>';
                                    echo '<select name=carrera>';
                                    echo "Carrera";
                                    echo "<br>";
                                        while($row=mysqli_fetch_array($qCarrera))
                                        {
                                            $i=0;
                                            echo "<option value='carreraE'>";
                                                echo $row[$i];
                                            echo "</option>";
                                            $i++;
                                        }
                                echo '</label>';
                                echo "<br>";
                            echo '<input type="submit" value="Enviar">';
                        echo '</fieldset>';
                    echo '</form>';
            }
            //si si hay
            else
            {
                echo "<table border =1>";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th colspan='8'>";
                                echo "Datos del alumno";
                            echo "</th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<th>";
                                echo "Numero de Cuenta";
                            echo "</th>";
                            echo "<th>";
                                echo "Promedio Cuarto";
                            echo "</th>";
                            echo "<th>";
                                echo "Promedio Quinto";
                            echo "</th>";
                            echo "<th>";
                                echo "Promedio Sexto";
                            echo "</th>";
                            echo "<th>";
                                echo "Nombre";
                            echo "</th>";
                            echo "<th>";
                                echo "Apellido Paterno";
                            echo "</th>";
                            echo "<th>";
                                echo "Apellido Materno";
                            echo "</th>";
                            echo "<th>";
                                echo "Area";
                            echo "</th>";
                        echo "</tr>";
                    echo "<thead>";
                while($row=mysqli_fetch_array($qConsulta))
                {
                    echo "<tbody>";
                        echo "<tr>";
                            echo "<td>";
                                echo $row[0];
                            echo "</td>";
                            echo "<td>";
                                echo $row[1];
                            echo "</td>";
                            echo "<td>";
                                echo $row[2];
                            echo "</td>";
                            echo "<td>";
                                echo $row[3];
                            echo "</td>";
                            echo "<td>";
                                echo $row[4];
                            echo "</td>";
                            echo "<td>";
                                echo $row[5];
                            echo "</td>";
                            echo "<td>";
                                echo $row[6];
                            echo "</td>";
                            echo "<td>";
                                echo $row[7];
                            echo "</td>";
                        echo "</tr>";
                    echo "<tbody>";     
                }
            }
        }
    ?>
    </body>
</html>
