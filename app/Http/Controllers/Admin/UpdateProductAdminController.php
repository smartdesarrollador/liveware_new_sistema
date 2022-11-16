<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Helpers\clases\Admin\Producto;
use Helpers\clases\Admin\TipoProducto;

class UpdateProductAdminController extends Controller
{
    //
    public function index($idProducto)
    {
        $objProducto = new Producto();
        $producto = $objProducto->getProductoById(trim($idProducto));
        $objTipoProducto = new TipoProducto();
        $listaTipoProductos = $objTipoProducto->getTipoProductos();

        //dd($producto);

        return view('admin.update_product', ['producto' => $producto, 'listaTipoProductos' => $listaTipoProductos, 'idProducto' => $idProducto]);
    }

    public function UpdateProduct(Request $request)
    {
        $input = $request->all();

        return $input;
    }
}
