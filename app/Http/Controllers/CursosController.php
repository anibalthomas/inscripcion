<?php

namespace App\Http\Controllers;
use App\Curso;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CursosController extends Controller
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
      $curso = Curso::create([
      'nombre' => $request->get('nombre'),
      'motivos' => $request->get('motivos'),
      'acuerdo' => $request->get('acuerdo'),
        ]);
        Auth::user()->cursos()->attach($curso->id);



        return redirect()->route('documentos');
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
      'pago' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'carta_institucion' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      'credencial_inecol' => 'mimes:pdf,jpeg,png,jpg|max:5000',
      ]);
      $curso = Curso::findOrFail($id);
      // return $request->all();

      if ($request->hasFile('pago')) {
      $curso->pago = $request->file('pago')->store('public/'.Auth::user()->id.'/cursos/'.$curso->nombre.'/pago');
      }
      if ($request->hasFile('carta_institucion')) {
      $curso->carta_institucion =  $request->file('carta_institucion')->store('public/'.Auth::user()->id.'/cursos/'.$curso->nombre.'/carta_institucion');
      }
      if ($request->hasFile('credencial_inecol')) {
      $curso->credencial_inecol =  $request->file('credencial_inecol')->store('public/'.Auth::user()->id.'/cursos/'.$curso->nombre.'/credencial_inecol');
      }
      $curso->save();

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
