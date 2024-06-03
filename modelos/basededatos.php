<?php

class BasedeDatos{

    const servidor="localhost:3221";
    const usuariobd="alonso110";
    const clave="alonso110";
    const nombrebd="proyecto_mac";
    

    public static function Conectar(){
        try{
            $conexion = new PDO("mysql:host=".self::servidor.";dbname=".self::nombrebd.";chartset=utf8",self::usuariobd,self::clave);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;

        }catch(PDOException $e){
            return "Falló ".$e->getMessage();
        }

    }
}