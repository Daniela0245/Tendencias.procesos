<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesor.index',['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::all();
        return view('profesor.new',['profesores' => $profesores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'especializacion' => 'required',
            'titulo' => 'required',
            'departamento' => 'required',  
        ]);

        $profesor = new Profesor;

        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->cedula = $request->cedula;
        $profesor->direccion = $request->direccion;
        $profesor->telefono = $request->telefono;
        $profesor->email = $request->email;
        $profesor->especializacion = $request->especializacion;
        $profesor->titulo = $request->titulo;
        $profesor->departamento = $request->departamento;

        $profesor->save();

        return view('profesor.index', ['profesores'=>Profesor::all()]);
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
         $profesor = Profesor::find($id);
        return view('profesor.edit', compact('profesor'));
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
        $profesor = Profesor::find($id);

        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->cedula = $request->cedula;
        $profesor->direccion = $request->direccion;
        $profesor->telefono = $request->telefono;
        $profesor->email = $request->email;
        $profesor->especializacion = $request->especializacion;
        $profesor->titulo = $request->titulo;
        $profesor->departamento = $request->departamento;

        $profesor->save();

        $profesores = Profesor::all();

        return view('profesor.index', ['profesores' => $profesores]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $profesor = Profesor::find($id);

       if($profesor) {
        $profesor->delete();
       }

       $profesores = Profesor::all();
       
       return view('profesor.index', ['profesores' => $profesores]);
    }
}
