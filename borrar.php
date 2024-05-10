<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Viajes</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/media/favicon2.png">

    <style type="text/css">
     
.form_tabla {
  margin: 40px auto;
  padding: 20px;
  border-radius: 10px;
  max-width: 1000px;
  align-items: center;
  align-items: center;

     }
    


   </style>

</head>

<body>
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
    </div>




    <div class="slider z-depth-5">
        <ul class="slides">
            <li>
                <img src="media/banner 2.png">
                <div class="caption center-align">
                </div>
            </li>
            <li>
                <img src="media/banner 1.png">
                <div class="caption left-align">
                </div>
            </li>
            <li>
                <img src="media/banner 3.png">
                <div class="caption left-align">
                </div>
            </li>
        </ul>
    </div>
    <br><br>
    <div class="center">
    <a href="index.html">
    <button class="btn waves-effect waves-light btn-large blue darken-4 z-depth-3 " type="" name="action">Crear un nuevo registro
                <i class="material-icons right">add</i>
            </button>
    </a>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems, {});
        });
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

        
    </body>
</html>













 <?php
$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);
if(!$connection) 
        {
            // echo "<h4>No se ha podido conectar con el servidor</h4>" . mysql_error();
        }
  else
        {
            // echo "<b><h4>Hemos conectado al servidor</h4></b>" ;
        }
       
        $datab = "prueba1";
        
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        // echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        // echo "<h4>Tabla seleccionada:</h4>" ;
        }


        mysqli_set_charset($connection,'utf8');
        $registroEliminado =$_POST['id_borrar'];
        $consulta="DELETE FROM formulario WHERE id = ";
        
        mysqli_query($connection, $consulta . $registroEliminado);

        $consulta = "SELECT * FROM formulario";
        
$result = mysqli_query($connection,$consulta);

if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table class='form_tabla highlight white-text blue-grey darken-1 z-depth-5'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido Paterno</th>";
echo "<th>Apellido Materno</th>";
echo "<th>Email</th>";
echo "<th>Celular</th>";
echo "</tr>";
echo "</thead>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tbody>";  
    echo "<tr>";
    echo "<td>" . $colum['id']. "</td>";
    echo "<td>" . $colum['nombre']. "</td>";
    echo "<td>" . $colum['ap_p'] . "</td>";
    echo "<td>" . $colum['ap_m'] . "</td>";
    echo "<td>" . $colum['email'] . "</td>>";
    echo "<td>" . $colum['celular'] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";



mysqli_close($connection);
// header('Location: registro.html');


?> 
