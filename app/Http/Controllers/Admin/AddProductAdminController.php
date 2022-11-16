<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Helpers\clases\Admin\TipoProducto;

class AddProductAdminController extends Controller
{
    //

    public function index()
    {

        $objTipoProducto = new TipoProducto();
        $listaTipoProductos = $objTipoProducto->getTipoProductos();

        return view('admin.add_product', ['listaTipoProductos' => $listaTipoProductos]);
    }

    public function AddProduct(Request $request)
    {
        $input = $request->all();

        return $input;

        /*  if ($request->input('action') == 'submit') {
        } */
    }
}
