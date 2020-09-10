<?php

class Cargador
{
   protected $miControlador="ProductosController";


   public function  __construct($controlador, $metodo)
   {

        $this->load($controlador,$metodo);
   }

   private function load($controlador, $metodo){
       require_once ("controlador/".$controlador.".php");
       $this->miControlador = new $controlador;
       call_user_func(array($this->miControlador,$metodo));
   }
}