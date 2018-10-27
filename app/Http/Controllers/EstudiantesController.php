<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
      $this->validate($request, [
      // 'identificacion' => 'required|mimes:pdf,jpeg,png,jpg|max:5000',
      'identificacion' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'titulo_cedula' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'constancia_inst' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'ingreso_pais' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'doc_apostillado' => 'mimes:pdf,jpeg,png,jpg|max:5000'
]);
        $user = User::findOrFail($id);
        // return $request->all();
        if ($request->hasFile('identificacion')) {
        $user->identificacion = $request->file('identificacion')->store('public/'.Auth::user()->id.'/identificacion');
        }
        if ($request->hasFile('titulo_cedula')) {
        $user->titulo_cedula =  $request->file('titulo_cedula')->store('public/'.Auth::user()->id.'/titulo_cedula');
        }
        if ($request->hasFile('constancia_inst')) {
        $user->constancia_inst =  $request->file('constancia_inst')->store('public/'.Auth::user()->id.'/constancia_inst');
        }
        if ($request->hasFile('ingreso_pais')) {
        $user->ingreso_pais =  $request->file('ingreso_pais')->store('public/'.Auth::user()->id.'/ingreso_pais');
        }
        if ($request->hasFile('doc_apostillado')) {
        $user->doc_apostillado =  $request->file('doc_apostillado')->store('public/'.Auth::user()->id.'/doc_apostillado');
        }
        $user->save();

        alert()->success('Tus documentos se han enviando correctamente!','');
        // toast('Tus documentos se han enviando correctamente!','success','top-right');
        return back();

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
