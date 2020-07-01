<?php
class usuarios{

    private $database;
    private $usuarios;
    public function __construct()
    {
        $this->database=Conectardb::conexion();
        $this->usuarios= array();
    }
    public function get_usuarios()
    {
        $getdat=mysqli_query($this->database,"select * from usuario");
        while($filas=$getdat->fetch_assoc()){
        $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }
}


?>