<?php

interface JSerializable{


    public function toJSON(): string {
        $mapa = array()
        foreach ($this as $clave => $valor) {
           $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
   }



}
