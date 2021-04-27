<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puser;

class PuserController extends Controller
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
        $pusers = Puser::all();
        return view('puser.index')->with('pusers',$pusers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pusers = new Puser();
        $pusers->nombre = $request->get('pnombre');
        $pusers->correo = $request->get('pcorreo');
        $pusers->telefono = $request->get('ptele');

        $pusers->save();

        return redirect('/pusers');
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
        $puser = Puser::find($id);
        return view('puser.edit')->with('puser',$puser);
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
        $puser = Puser::find($id);
        $puser->nombre = $request->get('enombre');
        $puser->correo = $request->get('ecorreo');
        $puser->telefono = $request->get('etelefono');

        $puser->save();

        return redirect('/pusers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pusers = Puser::find($id);
        $pusers->delete();
        return redirect('/pusers');
    }
}
