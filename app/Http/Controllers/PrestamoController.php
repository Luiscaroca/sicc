<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Prestamo;
use App\Models\Puser;
use Illuminate\Http\Request;
use Validator;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = Prestamo::with('puser')->get();
        $pusers = Puser::all();
        return view ('prestamo.index')->with(compact('prestamos','pusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'puser_id'=>'required',
            'comentario'=>'required|min:3'
        ]);
        if($validator ->fails()){
            return back()
                ->withInput()
                ->with('ErrorInsert','Favor llenar todos los campos')
                ->withErrors($validator);
        }else{
            $prestamo = Prestamo::create([
                'puser_id'=>$request->puser_id,
                'comentario'=>$request->comentario
            ]);
            return back()->with('Listo','Prestamo creado correctamente, favor agregar articulos.');
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $prestamo = Prestamo::find($request->id);
        $validator = Validator::make($request->all(),[
            'puser_id'=>'required',
            'comentario'=>'required|min:3'
        ]);
        if($validator ->fails()){
            return back()
                ->withInput()
                ->with('ErrorInsert','Favor llenar todos los campos')
                ->withErrors($validator);
        }else{
            $prestamo->puser_id = $request->puser_id;
            $prestamo->comentario = $request->comentario;
            $prestamo->save();
            return back()->with('Listo','Prestamo editado correctamente.');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestamo = Prestamo::find($id);
        $prestamo->delete();
        return back()->with('Listo','El registro del Prestamo seleccionado se elimino correctamente.');
    }
}
