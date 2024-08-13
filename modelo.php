<?php

class Modelo{
    public $id;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $edad;
    public $sexo;
    public $contacto;
    public $turno;
    public $descanso;
    private $conexion;


    public function _construct(){   
        $this->id="none";
        $this->nombre="none";
        $this->apellido1="none";
        $this->apellido2="none";
        $this->edad="none";
        $this->sexo="none";
        $this->contacto="none";
        $this->turno="none";
        $this->descanso="none";
    }


    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1','root','');
        
        if(!$this->conexion){
            echo "La conexion no se ha podido establecer.<br>";
        } else{           
            mysqli_select_db($this->conexion,"sps");
        }
    }
 
    public function registrar(){
        $registrar = "INSERT INTO guardias (ID_Guardias,Nombre,Apelido1,Apellido2,Edad,Sexo,Contacto,Turno,Descanso) VALUES ('" .$this->id ."','" .$this->nombre ."','" .$this->apellido1 ."','" .$this->apellido2 ."','" .$this->edad ."','" .$this->sexo ."','" .$this->contacto ."','" .$this->turno ."','" .$this->descanso ."')";        
        $this->EstableceConexion();
        mysqli_query($this->conexion,$registrar);
        mysqli_close($this->conexion);
    }
/*
    public function consultar(){
        $consulta = "select id,nombre, apellido, email, comentarios from agendae";
        $this->EstableceConexion();
        $resultado = mysqli_query($this->conexion,$consulta);
        mysqli_close($this->conexion);
        return $resultado;
    }

    public function eliminar($id){
        $elimina = "delete from agendae where id=".$id;    
        $this->EstableceConexion();
        $resultado = mysqli_query($this->conexion,$elimina);
        mysqli_close($this->conexion);
        return $resultado;
    }*/
    public function consultar($criterio = null){
        $this->EstableceConexion();
        if ($criterio) {
            $consulta = "SELECT * FROM guardias WHERE ID_Guardias LIKE '%$criterio%' OR Nombre LIKE '%$criterio%' OR Apelido1 LIKE '%$criterio%' OR Apellido2 LIKE '%$criterio%' OR Edad LIKE '%$criterio%' OR Sexo LIKE '%$criterio%' OR Contacto LIKE '%$criterio%' OR Turno LIKE '%$criterio%' OR Descanso LIKE '%$criterio%'";
        } else {
            $consulta = "SELECT * FROM guardias";
        }
        $resultado = mysqli_query($this->conexion, $consulta);
        mysqli_close($this->conexion);
        return $resultado;
    }

    public function modificar() {
        $this->EstableceConexion();
        $modificar = "UPDATE guardias SET Nombre='$this->nombre', Apelido1='$this->apellido1', Apellido2='$this->apellido2', Edad='$this->edad', Sexo='$this->sexo', Contacto='$this->contacto', Turno='$this->turno', Descanso='$this->descanso' WHERE ID_Guardias='$this->id'";
        mysqli_query($this->conexion, $modificar);
        mysqli_close($this->conexion);
    }

    public function eliminar($id) {
        $this->EstableceConexion();
        $eliminar = "DELETE FROM guardias WHERE ID_Guardias='$id'";
        mysqli_query($this->conexion, $eliminar);
        mysqli_close($this->conexion);
    }

}
?>