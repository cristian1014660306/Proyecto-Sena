<?php
include_once('DB.php');


  $Codigo_Institucional = $_POST['codigo_institucional'];
  $Nombre_Apellido = $_POST['nombre_apellido'];
  $Curso = $_POST['curso'];
  $Rol = $_POST['rol'];

  $conectar=conn();
  $sql="INSERT INTO estudiante(codigo_institucional, nombre_apellido, curso, rol)
  VALUES ('$Codigo_Institucional', '$Nombre_Apellido', '$Curso', '$Rol')";
  $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
  
?>
<?php
include("Bachillerato Votaciones.html");
?>