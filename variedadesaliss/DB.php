<?php
function conn(){

$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "base datos sena";

  $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
  return $conectar;
}
?>