<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $estudiantes = Estudiante::all();
        return view('estudiante.index',['estudiantes' => $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.new',['estudiantes' => $estudiantes]);
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
            'carrera' => 'required',
            'semestre' => 'required',
            'estado' => 'required',
        ]);

        $estudiante = new Estudiante;

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->cedula = $request->cedula;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono =  $request->telefono;
        $estudiante->email = $request->email;
        $estudiante->carrera = $request->carrera;
        $estudiante->semestre = $request->semestre;
        $estudiante->estado = $request->estado;

        $estudiante->save();

        return view('estudiante.index', ['estudiantes'=>Estudiante::all()]);
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
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit', compact('estudiante'));
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
        $estudiante = Estudiante::find($id);

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->cedula = $request->cedula;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono =  $request->telefono;
        $estudiante->email = $request->email;
        $estudiante->carrera = $request->carrera;
        $estudiante->semestre = $request->semestre;
        $estudiante->estado = $request->estado;

        $estudiante->save();

        $estudiantes = Estudiante::all();

        return view('estudiante.index', ['estudiantes' => $estudiantes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);

        if ($estudiante){
            $estudiante->delete();
        }

        $estudiantes = Estudiante::all();
        return view('estudiante.index', ['estudiantes' => $estudiantes]);
    }
}
