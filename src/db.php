<?php 
  $servidor = "localhost";
  $baseDeDatos = "app";
  $usuario = "root";
  $password = "";

  try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$password);
  } catch(PDOException $ex){
    echo "Error al conectar a la base de datos " . $ex->getMessage();
  } 
?>  