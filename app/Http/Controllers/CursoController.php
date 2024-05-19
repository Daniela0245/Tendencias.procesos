<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index',['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::all();
        $cursos = Curso::all();
        return view('curso.new',compact('profesores','cursos'),['cursos' => $cursos]);
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
            'descripcion' => 'required',
            'id_profesor' => 'required',
            'ubicacion' => 'required',
            'jornada' => 'required',
        ]);

        $curso = new Curso;
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->id_profesor = $request->id_profesor;
        $curso->ubicacion = $request->ubicacion;
        $curso->jornada = $request->jornada;

        $curso->save();

        $cursos = Curso::all();

        return view('curso.index',['cursos' => $cursos]);
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
        $curso = Curso::find($id);
        $profesores = Profesor::all();
    
        return view('curso.edit', ['curso' => $curso, 'profesores' => $profesores]);
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
        $curso = Curso::find($id);

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'id_profesor' => 'required',
            'ubicacion' => 'required',
            'jornada' => 'required',
        ]);
    
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->id_profesor = $request->id_profesor;
        $curso->ubicacion = $request->ubicacion;
        $curso->jornada = $request->jornada;
    
        $curso->save();
           
        return redirect()->route('cursos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        if($curso) {
            $curso->delete();
            return redirect()->route('cursos.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('cursos.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    }
}

