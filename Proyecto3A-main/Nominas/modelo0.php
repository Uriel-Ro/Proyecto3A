<?php

class Modelo0{
    public $id;
    public $SueldoBruto;
    public $bono;
    public $sueldoLibre;
    public $isr;
    private $conexion;
    

    public function __construct(){     
        $this->id="";
        $this->SueldoBruto=0.0;
        $this->bono=0.0;
        $this->sueldoLibre=0.0;
        $this->isr=0.0;
    }


    private function EstableceConexion(){
        $this->conexion = mysqli_connect('127.0.0.1', 'usuario', '12345678', 'sps2');
        
        if (!$this->conexion) {
            echo "La conexión no se ha podido establecer.<br>";
        }
    }

    public function registrar(){
        if ($this->SueldoBruto > 24222.32) {
            $this->isr = $this->SueldoBruto * 0.2352 + 3880.44;
        } else if ($this->SueldoBruto > 12009.95) {
            $this->isr = $this->SueldoBruto * 0.2136 + 1271.87;
        } else if ($this->SueldoBruto > 10031.08) {
            $this->isr = $this->SueldoBruto * 0.1792 + 917.26;
        } else if ($this->SueldoBruto > 8629.21) {
            $this->isr = $this->SueldoBruto * 0.16 + 692.96;
        } else if ($this->SueldoBruto > 4910.19) {
            $this->isr = $this->SueldoBruto * 0.1088 + 288.33;
        } else {
            $this->isr = $this->SueldoBruto * 0.0640 + 11.11;
        }

        $this->sueldoLibre = $this->SueldoBruto - $this->isr;

        $this->EstableceConexion();

        $stmt = $this->conexion->prepare("INSERT INTO nominas (ID_Guardia, SueldoBruto, Bonos, Impuestos, SueldoLibre) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sdddd", $this->id, $this->SueldoBruto, $this->bono, $this->isr, $this->sueldoLibre);

        if ($stmt->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        mysqli_close($this->conexion);
    }

    public function consultar(){
        $this->EstableceConexion();
        
        if($this->id != "") {
            $comando = "SELECT * FROM nominas WHERE ID_Guardia = '" .$this->id ."'";
        } else {
            $comando = "SELECT * FROM nominas";
        }
        //$comando = "SELECT * FROM nominas WHERE ID_Guardia = '" .$this->id ."'";
        $registros = mysqli_query($this->conexion,$comando);
        
        if($registros) {
            while($row = $registros->fetch_array()) {
                $this->id = $row['ID_Guardia'];
                $this->SueldoBruto = $row['SueldoBruto'];
                $this->bono = $row['Bonos'];
                $this->sueldoLibre = $row['Impuestos'];
                $this->isr = $row['SueldoLibre'];
                echo "r: " .$this->id ."-" .$this->SueldoBruto ."-" .$this->bono ."-" .$this->isr ."-" .$this->sueldoLibre ."<br>";
            }
        }

        mysqli_close($this->conexion);
    }

    public function modificar(){
        if ($this->SueldoBruto > 24222.32) {
            $this->isr = $this->SueldoBruto * 0.2352 + 3880.44;
        } else if ($this->SueldoBruto > 12009.95) {
            $this->isr = $this->SueldoBruto * 0.2136 + 1271.87;
        } else if ($this->SueldoBruto > 10031.08) {
            $this->isr = $this->SueldoBruto * 0.1792 + 917.26;
        } else if ($this->SueldoBruto > 8629.21) {
            $this->isr = $this->SueldoBruto * 0.16 + 692.96;
        } else if ($this->SueldoBruto > 4910.19) {
            $this->isr = $this->SueldoBruto * 0.1088 + 288.33;
        } else {
            $this->isr = $this->SueldoBruto * 0.0640 + 11.11;
        }
        $this->sueldoLibre = $this->SueldoBruto - $this->isr;

        $this->EstableceConexion();

        $comando = "START TRANSACTION; ";
        $comando = $comando ."UPDATE nominas SET SueldoBruto = " .$this->SueldoBruto ." WHERE ID_Guardia = '" .$this->id ."'; ";
        $comando = $comando ."UPDATE nominas SET Bonos = " .$this->bono ." WHERE ID_Guardia = '" .$this->id ."'; ";
        $comando = $comando ."UPDATE nominas SET Impuestos = " .$this->isr ." WHERE ID_Guardia = '" .$this->id ."'; ";
        $comando = $comando ."UPDATE nominas SET SueldoLibre = " .$this->sueldoLibre ." WHERE ID_Guardia = '" .$this->id ."'; ";
        $comando = $comando ."COMMIT;";
        $sentencia = mysqli_multi_query($this->conexion,$comando);
        echo "Modificacion ejecutada";
        mysqli_close($this->conexion);
    }

    public function eliminar(){
        $this->EstableceConexion();
        $comando = "DELETE FROM nominas WHERE ID_Guardia = '" .$this->id ."'; ";
        $sentencia = mysqli_query($this->conexion,$comando);
        echo "Eliminacion ejecutada";
        mysqli_close($this->conexion);
    }
}

?>