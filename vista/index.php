<?php
require_once ('libs/Cargador.php');


$idCarga=random_int(2000,987746464664);
$idm="index";


//recibo parametros identificador de carga (idCarga) e identificador de método (idm)
if(isset($_GET['idCarga'])){
    if(isset($_GET['idm'])){
        $idm=$_GET['idm'];
    }
    $idCarga=$_GET['idCarga'];
}


if(isset($_POST['idCarga'])) {
    if(isset($_POST['idm'])){
        $idm=$_POST['idm'];
    }
    $idCarga = $_POST['idCarga'];
}


$carga='HomeController';
switch ($idCarga){
    case 5:
        $carga="HomeController";
        break;
    case 10:
        $carga="ListadoController";
        break;
}

$miCargador= new Cargador($carga,$idm);
