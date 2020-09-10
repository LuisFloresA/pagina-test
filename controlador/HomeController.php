<?php


class HomeController
{
    public function cargaVista($vista){
        $carga="vista/".$vista.".php";
        require_once($carga);
    }
    /*public function cargaModelo($modelo){
      require_once "public/modelo/dao".$modelo.".php";
      $miModelo=new $modelo();
      return $miModelo;
    }*/

    public function index(){
        $this->cargaVista("home");
    }


}