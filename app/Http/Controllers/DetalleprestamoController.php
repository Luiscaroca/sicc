<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Detalleprestamo;
use App\Models\Prestamo;
use App\Models\Puser;
use Illuminate\Http\Request;

class DetalleprestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detpres = Detalleprestamo::with('articulo')->get();
        return view('detalleprestamo.index')->with('detpres',$detpres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = Articulo::all();
        $prestamos = Prestamo::all();
        return view('detalleprestamo.create')->with(compact('articulos', 'prestamos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestamos = new Detalleprestamo();
        $prestamos->articulo_id = $request->get('articulo');
        $prestamos->prestamo_id = $request->get('prestamo_id');
        $prestamos->cantidad = $request->get('cantidad');
        $prestamos->comentario = $request->get('comentario');

        $prestamos->save();

        return redirect('/detalleprestamo');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
