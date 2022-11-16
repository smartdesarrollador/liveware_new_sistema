<?php

use Illuminate\Support\Facades\DB;

function getTipoProductosClass()
{
    $lista = DB::select("SELECT * FROM tipoproducto where idTipoProducto != '21'");

    return $lista;
}
