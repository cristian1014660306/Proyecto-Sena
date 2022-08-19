<?php
include_once('DB.php');


  $Nombre_usuario = $_POST['Nombre_usuario'];
  $Password = $_POST['contraseña'];
  $Email = $_POST['Email'];
  $Num_telefonico = $_POST['Num_telefonico'];

  $conectar=conn();
  $sql="INSERT INTO cliente(Nombre_usuario, contraseña, Email, Num_telefonico)
  VALUES ('$Nombre_usuario', '$Password', '$Email', '$Num_telefonico')";
  $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
  
?>
<?php
include("Register/registred.php");
?>
