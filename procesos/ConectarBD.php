<?php

class Conexion{

  function __construct(){
    $this->conn = new mysqli('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');
    // $conexion=mysqli_connect('mysql.webcindario.com','restaurantprueba','bryjo954','restaurantprueba');
}
public function get_connection(){
  return $this->conn;
}
}

 ?>
