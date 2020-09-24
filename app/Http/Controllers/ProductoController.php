<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Exports\ProductosExport;

use Maatwebsite\Excel\Facades\Excel;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::orderby('id')->get();
        // dd($productos);
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('altaproductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //  dd($request->nombre);
   $productos = new Producto();
   $productos->nombre = $request->nombre;
   $productos->descripcion = $request->descripcion;
   $productos->cantidad =$request->cantidad;
   $productos->observaciones = $request->observaciones;
   $productos->save();
   return redirect(route('productos.index'))->with('notice', 'El usuario ha sido modificado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $idproducto = Producto::FindOrFail($id);
      return view('editproducto', compact('idproducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->cantidad = $request->cantidad;
        $producto->observaciones = $request->observaciones;
        $producto->save();
        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        try{
          $producto->delete();
          // Toastr::info('El producto ha sido eliminado', 'Proceso Finalizado');
          return redirect('productos');
        }catch(\Illuminate\Database\QueryException $e){
          Toastr::error('La empresa esta relacionada con otros datos', 'Error');
          return redirect('productos');
        }
    }

    public function confirm($id)
    {
        $producto = Producto::findOrFail($id);
        return view('confirm', compact('producto'));
    }

    public function productosListadoExport(){
      return Excel::download(new ProductosExport, 'producto.xlsx');
    }
}
