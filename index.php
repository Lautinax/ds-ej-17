<?php

require_once 'modelo/persona.php';
require_once 'modelo/direccion.php';


$d = new Direccion();
$d->Calle = 'Ituzaingo';
$d->Numero = '166';
$d->Ciudad = 'Rosario';


$p = new Persona();
$p->Nombre = 'Lauty';
$p->Apellido = 'Ferraro';
$p->Documento = '445524155';
$p->Direccion = $d;

$p->ImprimirInformacion();



