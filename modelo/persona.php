
<?php

class Persona
{
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Direccion;

    public function ImprimirInformacion()
    {
        echo 'Datos de la persona <br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Documento: ' . $this->Documento . '<br><br>';
        

        echo 'Datos de la dirección: <br>';
        echo 'Calle: ' . $this->Direccion->Calle . '<br>';
        echo 'Numero: ' . $this->Direccion->Numero . '<br>';
        echo 'Ciudad: ' . $this->Direccion->Ciudad . '<br>';
    }
}

