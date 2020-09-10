<?php


class BaseDatos
{
    private  $host='localhost';
    private  $nombreBase='scrapping_celulares';
    private  $usuario='cuentaTest';
    private  $clave='cualquierPass';
    public   $coon;


    public function dbConexion(){
        
        $this->coon=null;
        try{
            $this->coon=new PDO("mysql:host=".$this->host.";dbname=".$this->nombreBase,$this->usuario,$this->clave);
            $this->coon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->coon->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch (PDOException  $excepcion){

            echo "Error de conexión: ".$excepcion->getMessage();
        }

        return($this->coon);


    }
}