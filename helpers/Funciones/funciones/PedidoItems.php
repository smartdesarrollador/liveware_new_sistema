<?php

use Illuminate\Support\Facades\DB;

function getPedidoIems($idPedido)
{
    $lista = DB::select("SELECT*FROM pedido_items INNER JOIN productos on pedido_items.idProducto = productos.idProducto WHERE pedido_items.idPedido = '$idPedido'");

    return $lista;
}
