<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::User()->rol == 'ROLE_ADMIN'){
            $inventarios = Inventario::with('unidade')->get();
            return view('inventario.index')->with('inventarios',$inventarios);
        }else{
            $inventarios = Inventario::where('uni_id',Auth::user()->unidad_id)->get();
            return view('inventario.index')->with('inventarios',$inventarios);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidad::all();
        return view('inventario.create')->with('unidades',$unidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios = new Inventario();
        $inventarios->nombre = $request->get('nombre');
        $inventarios->uni_id = $request->get('unidad_id');
        $inventarios->save();

        return redirect('/inventarios');
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
        $inventario = Inventario::find($id);
        $unidades = Unidad::all();

        return view('inventario.edit')
            ->with(compact('inventario','unidades'));
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
        $inventario = inventario::find($id);
        $inventario->nombre = $request->get('nombre');
        $inventario->uni_id = $request->get('unidad_id');

        $inventario->save();

        return redirect('/unidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        $inventario->delete();
        return redirect('/inventarios');
    }
}
