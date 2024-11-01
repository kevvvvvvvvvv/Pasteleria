<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePedido;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Promocion;
use App\Models\Venta;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function create(){
        $productos = Producto::all();
        $promociones = Promocion::all();
        return view('pedido/create',compact('productos','promociones'));
    }


    public function store(/* StorePedido $request */){
/*      $pedido = new Pedido();
        $pedid -> nombre = $request -> nombre;
        $producto -> tipo = $request -> tipo;
        $producto -> descripcion = $request -> descripcion;
        $producto -> precio = $request -> precio;

        $producto -> save();
        return redirect(route('principal')); */
        $venta = new Venta();
        $venta->fechaVent= now();
        $venta->fecEntrega= now();
        $venta->ide=Auth::guard('empleado')->user()->ide;
        $venta->save();
    }


    public function consultarProducto(){
/*         $producto= Producto::all();
        return view('producto/consultar-producto',compact('producto')); */
    }


    public function edit($idped){
/*         $producto=Producto::find($idpro); 
        return view('producto/edit',compact('producto')); */
    }

    public function update(StorePedido $request,$idped){
/*         $producto = Producto::find($idpro);
        $producto -> nombre = $request -> nombre;
        $producto -> tipo = $request -> tipo;
        $producto -> descripcion = $request -> descripcion;
        $producto -> precio = $request -> precio;
        $producto -> save();

        return redirect()->route('principal'); */
    }


    public function destroy($idpro){
/*         $producto = Producto::find($idpro);

        if($producto) {
            $producto->delete();
            return response()->json(['message' => 'Promoción eliminado con éxito']);
        }else{
            return response()->json(['message' => 'Registro no encontrado'], 404);
        } */
    }
}
