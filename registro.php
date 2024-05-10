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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems, {});
        });
    </script>



    <div class="box">
        <form class="col s12 z-depth-5 white" action="registro.php" method="POST">

            <table rules="rows">
                <tr>
                    <td>
                        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" required name="nombre">
                            <label class="grey-text text-darken-4" for="icon_prefix">Nombre(s)</label>
                        </div>
                    </td>

                    <td>
                        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" required name="ap_paterno">
                            <label class="grey-text text-darken-4" for="icon_prefix">Apellido paterno</label>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" required name="ap_materno">
                            <label class="grey-text text-darken-4" for="icon_prefix">Apellido materno</label>
                        </div>
                    </td>
                    <td>
                        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">mail</i>
                            <input id="icon_prefix" type="email" class="validate" required name="email">
                            <label class="grey-text text-darken-4" for="icon_prefix">Email</label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">phone</i>
                            <input id="icon_telephone" type="number" class="validate" required name="celular"
                                maxlength="10">
                            <label class="grey-text text-darken-4" for="icon_telephone">Celular</label>
                        </div>
                    </td>
                </tr>

            </table>

            <button class="btn waves-effect waves-light blue darken-4 z-depth-3" type="submit" name="action"
                maxlength="10">Enviar
                <i class="material-icons right">send</i>
            </button>

        </form>

    </div>


    <div class="box">

<form class="col s12 z-depth-5 white" action="borrar.php" method="POST">
    <table>
      <tr>
        <td>
        <div class="input-field col s6">
                            <i class="black-text material-icons prefix">delete</i>
                            <input id="icon_prefix" type="number" class="validate" required name="id_borrar">
                            <label class="grey-text text-darken-4" for="icon_prefix">Deseas borrar un registo? Escribe su ID</label>
        </div>                   
        </td>
      </tr>
    </table>
    <button class="btn waves-effect waves-light red darken-4 z-depth-3" type="submit" name="action">Eliminar
                <i class="material-icons right">delete</i>
            </button>

</form>
</div>








    <!-- <script>
        window.onpageshow = function (event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
    </script> -->

    <script type="text/javascript" src="js/materialize.min.js"></script>


    

</body>

</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);


$nombre = $_POST["nombre"] ;
$ap_p = $_POST["ap_paterno"] ;
$ap_m = $_POST["ap_materno"] ;
$email = $_POST["email"] ;
$celular = $_POST["celular"] ;




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
        if (!empty($_POST['nombre']) && !empty($_POST['ap_paterno']) && !empty($_POST['ap_materno']) && !empty($_POST['email'])
    && !empty($_POST['celular']) ) {

        $instruccion_SQL = "INSERT INTO formulario 
        (nombre,ap_p,ap_m,email,celular)
            VALUES(
                '$nombre',
                '$ap_p',
                '$ap_m',
                '$email',
                '$celular')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);
        
        } else {
        // Mostrar mensaje de error si algún campo obligatorio está vacío
        echo "Por favor, rellena todos los campos obligatorios";
    }
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



 mysqli_close( $connection );
   echo'<a href="index.html"> Volver Atrás</a>';















?>


