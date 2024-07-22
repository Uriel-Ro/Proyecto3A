<?php

class Modelo0 {
    public $id;
    public $comando;
    public $SueldoBruto;
    public $bono;
    private $sueldoLibre;
    private $isr;
    private $conexion;

    public function __construct() {     
        $this->id = "none";
        $this->SueldoBruto = 0.0;
        $this->bono = 0;
        $this->sueldoLibre = 0.0;
        $this->isr = 0.0;
    }

    private function estableceConexion() {
        $this->conexion = mysqli_connect('127.0.0.1', 'root', '1218', 'sps1');
        
        if (!$this->conexion) {
            echo "La conexión no se ha podido establecer.<br>";
        }
    }

    public function registrar() {
        if ($this->SueldoBruto == 0.0 || $this->id == "") {
            return;
        } 

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

        $this->estableceConexion();

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
}
?>
