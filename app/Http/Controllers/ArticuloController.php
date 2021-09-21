<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\Articulo;
use Illuminate\Support\Facades\Auth;
use Validator;

class ArticuloController extends Controller
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
            $articulos = Articulo::all();
            return view('articulo.index')->with('articulos',$articulos);
        }else{
            $articulos = Articulo::all();
            return view('articulo.index')->with('articulos',$articulos);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventarios = Inventario::all();
        return view('articulo.create')->with('inventarios',$inventarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = $request->file('aimagen');
        $nombreimg = time() . '.' . $imagen->getClientOriginalExtension();
        $destinoimg = public_path('img/articulos');
        $request->aimagen->move($destinoimg, $nombreimg);
        $articulo = Articulo::create([
            'nombre' => $request->anombre,
            'n_serie' => $request->aserie,
            'inventario_id' => $request->inventario_id,
            'cantidad' => $request->acantidad,
            'estado' => 'Activo',
            'n_orden' => $request->aorden,
            'tipo_documento' => $request->atipodocumento,
            'n_documento' => $request->adocumento,
            'proveedor' => $request->aproveedor,
            'precio' => $request->aprecio,
            'file_path'=>$nombreimg,
            ]);
        return redirect('/articulos');
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
        $articulo = Articulo::find($id);
        $inventarios = Inventario::all();
        return view('articulo.edit')
            ->with(compact('articulo','inventarios'));
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
        $articulo = Articulo::find($id);
        $imagen = $request->file('aimagen');
        $nombreimg = time() . '.' . $imagen->getClientOriginalExtension();
        $destinoimg = public_path('img/articulos');
        $request->aimagen->move($destinoimg, $nombreimg);
        $articulo->nombre = $request->anombre;
        $articulo->n_serie = $request->aserie;
        $articulo->inventario_id = $request->inventario_id;
        $articulo->cantidad = $request->acantidad;
        $articulo->estado = $request->aestado;
        $articulo->n_orden = $request->aorden;
        $articulo->tipo_documento = $request->atipodocumento;
        $articulo->n_documento = $request->adocumento;
        $articulo->precio = $request->aprecio;
        $articulo->precio = $request->aprecio;
        $articulo->file_path = $nombreimg;
        $articulo->save();
        return redirect('/articulos');;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }

}
