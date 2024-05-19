<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripcion::all();
        return view('inscripcion.index',['inscripciones' => $inscripciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        $inscripciones = Inscripcion::all();
        return view('inscripcion.new',compact('estudiantes','inscripciones'),compact('cursos','inscripciones'),['cursos' => $cursos]);
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

            'id_estudiante' => 'required',
            'id_curso' => 'required',
            'estado' => 'required',
        ]);

        $inscripcion = new Inscripcion;
        $inscripcion->id_estudiante = $request->id_estudiante;
        $inscripcion->id_curso = $request->id_curso;
        $inscripcion->estado = $request->estado;

        $inscripcion->save();

        $inscripciones = Inscripcion::all();

        return view('inscripcion.index', ['inscripciones' => $inscripciones]);
        
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
        $inscripcion = Inscripcion::find($id);
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
    
        return view('inscripcion.edit', compact('inscripcion', 'estudiantes', 'cursos'));
    
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
        $inscripcion = Inscripcion::find($id);

        $request->validate([

            'id_estudiante' => 'required',
            'id_curso' => 'required',
            'estado' => 'required',
        ]);

        $inscripcion->id_estudiante = $request->id_estudiante;
        $inscripcion->id_curso = $request->id_curso;
        $inscripcion->estado = $request->estado;

        $inscripcion->save();

        return redirect()->route('inscripciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id);
        if($inscripcion) {
            $inscripcion->delete();
            return redirect()->route('inscripciones.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('inscripciones.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    
    }
}
