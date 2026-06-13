<?php

namespace App\Models;

class Mesascontroller {
 function guardarMesas($datos2) {
        $mesa1 = new Mesas();
        $mesa1->numero = $datos2['numero1'];
        $mesa1->capacidad = $datos2['capacidad1'];
        $mesa1->save();

}
}