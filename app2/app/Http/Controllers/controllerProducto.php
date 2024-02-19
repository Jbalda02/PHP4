<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Encoding\Stream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class controllerProducto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = DB::table('productos')->get();
        return view('product',['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public static function create(array $array)
    {
        $data = [
            'nombre' => $array[0],
            'descripcion' => $array[1],
            'precio' => $array[2]
        ];
        DB::table('productos')->insert($data);
        return;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $producto)
    {
        //Vista de la tabla
        $productos = DB::table('productos')->get();
        return view('productShow',['productos' =>$productos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $producto)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $producto)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $producto)
    {

    }
}
