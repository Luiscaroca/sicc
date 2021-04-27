<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $usuarios = User::with('unidad')->get();
        //$unidades = Unidad::all();
        return view('usuario.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidad::all();
        return view('usuario.create')->with('unidades', $unidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new User();
        $usuarios->name = $request->get('nombre');
        $usuarios->password = Hash::make($request->password);
        $usuarios->unidad_id = $request->get('unidad_id');
        $usuarios->email = $request->get('correo');
        $usuarios->rol = $request->get('rol');

        $usuarios->save();

        return redirect('/usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        $unidades = Unidad::all();

        return view('usuario.edit')
            ->with(compact('usuario', 'unidades'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarios = User::find($id);
        $usuarios->name = $request->get('nombre');
        $usuarios->unidad_id = $request->get('unidad_id');
        $usuarios->email = $request->get('correo');
        $usuarios->rol = $request->get('rol');

        $usuarios->save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return redirect('/usuarios');
    }


}
