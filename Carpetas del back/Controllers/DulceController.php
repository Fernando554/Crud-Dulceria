<?php

namespace App\Http\Controllers;

use App\Models\Dulce;
use Illuminate\Http\Request;

class DulceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['dulces'] = Dulce::paginate(5);
        return view('index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar datos

        $campos=[
            'NombreDelDulce'=>'required|string|max:100',
            'Marca'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'cantidad'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

        //$datosDulce = request()->all();
        $datosDulce = request()->except('_token');
        Dulce::insert($datosDulce);

        //return response()->json($datosDulce);
        return redirect('dulce')->with('mensaje','Dulce agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dulce  $dulce
     * @return \Illuminate\Http\Response
     */
    public function show(Dulce $dulce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dulce  $dulce
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar datos del formulario
        $dulce=Dulce::findOrFail($id);
        return view('edit', compact('dulce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dulce  $dulce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //actualizar los datos
        $datosDulce = request()->except(['_token','_method']);
        Dulce::where('id','=',$id)->update($datosDulce);

        $dulce=Dulce::findOrFail($id);
        return view('edit', compact('dulce'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dulce  $dulce
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar un registro
        Dulce::destroy($id);
        return redirect('dulce')->with('mensaje','Dulce eliminado');
    }
}
