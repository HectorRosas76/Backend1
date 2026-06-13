<?php

namespace App\Models;

class ReservasController
{

    function guardarReserva($data)
    {
        $reserva = new Reservas();
        $reserva->nombre_cliente = $data['nombre_cliente'];
        $reserva->telefono_cliente = $data['telefono_cliente'];
        $reserva->cantidad_personas = $data['cantidad_personas'];
        $reserva->fecha = $data['fecha'];
        $reserva->hora = $data['hora'];
        $reserva->mesa_id = $data['mesa_id'];
        $reserva->save();
        return $reserva;
    }
}
