<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Profesor;
use App\Models\Trabajo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = Trabajo::all();
        return view('trabajo.index',['trabajos' => $trabajos]);
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
        $trabajos = Trabajo::all();
        return view('trabajo.new', compact('trabajos', 'profesores', 'cursos'));
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
            'id_curso' => 'required',
            'id_profesor' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_entrega' => 'required',
            'porcentaje' => 'required',
        ]);

        $trabajo = new Trabajo;
        $trabajo->id_curso = $request->id_curso;
        $trabajo->id_profesor = $request->id_profesor;
        $trabajo->nombre = $request->nombre;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->fecha_entrega = $request->fecha_entrega;
        $trabajo->porcentaje = $request->porcentaje;

        $trabajo->save();

        $trabajos = Trabajo::all();

        return view('trabajo.index', ['trabajos' => $trabajos]);
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
        $trabajo = Trabajo::find($id);
        $profesores = Profesor::all();
        $cursos = Curso::all();
    
        return view('trabajo.edit', compact('trabajo', 'profesores', 'cursos'));
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
        $trabajo = Trabajo::find($id);

        $request->validate([
            'id_curso' => 'required',
            'id_profesor' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_entrega' => 'required',
            'porcentaje' => 'required',
        ]);

      
        $trabajo->id_curso = $request->id_curso;
        $trabajo->id_profesor = $request->id_profesor;
        $trabajo->nombre = $request->nombre;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->fecha_entrega = $request->fecha_entrega;
        $trabajo->porcentaje = $request->porcentaje;

        $trabajo->save();

        return redirect()->route('trabajos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajo = Trabajo::find($id);
        if($trabajo) {
            $trabajo->delete();
            return redirect()->route('trabajos.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('trabajos.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    
    }
    }

