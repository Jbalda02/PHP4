<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addProduct extends Controller
{
    public function index()
    {
        return view('addProductForm');
    }

    public function store(Request $request)
    {
        //Paso del form a variables
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        //Pido el insert de un producto en el crud de la tabla Producto
        controllerProducto::create(array($nombre,$descripcion,$precio));
      return redirect()->route('product.index')->with('success','postsuccessed');
    }
}
