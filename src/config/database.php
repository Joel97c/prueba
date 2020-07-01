<?php
class Conectardb{
    public static function conexion(){ 
    $server="localhost:3306";
    $username="root";
    $database="login";
    $password="";
    $conexion=mysqli_connect($server,$username,$password,$database);


if ($conexion==true) {

    return $conexion;
   
}
echo 'error';
        
}

}
?>