<?php
require_once 'vendor\autoload.php';

use Ratchet\MessageComponentInterface;

class Chat implements MessageComponentInterface
{
    public $conexiones = [];
//10.17.0.43
//4000
    function onOpen(\Ratchet\ConnectionInterface $conn)
    {
        echo "Hay una nueva conexion \n";
        foreach ($this->conexiones as $conexion){
            /* @avar Ratchet/ConnectionInterface $conexion*/
            $conexion->send("Se ha conectado  un nuevo usuario");
        }
        $this->conexiones[]=$conn;
    }


    function onClose(\Ratchet\ConnectionInterface $conn)
    {
//        // TODO: Implement onClose() method.
//        echo 'BYE';
    }


    function onError(\Ratchet\ConnectionInterface $conn, \Exception $e)
    {
        // TODO: Implement onError() method.
    }


    function onMessage(\Ratchet\ConnectionInterface $from, $msg)
    {
        foreach ($this->conexiones as $conexion){
            if($conexion !== $from){
                $conexion->send($msg);
            }
        }
    }
}