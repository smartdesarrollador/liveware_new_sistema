<?php

use Illuminate\Support\Facades\DB;

function addNewConsumo($idCliente, $amount,$descripcion)
{
    date_default_timezone_set('America/Lima');
    $actualDate = date('Ymd');

    $lista = DB::select("INSERT INTO consumo(idCliente,monto,fecha,hora,descripcion)
    VALUES('$idCliente','$amount',now(),now(),'$descripcion')");

    return $lista;

}


?>