<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Inscripcion;
use App\Models\Calificacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $calificaciones = Calificacion::with('inscripcion', 'entrega')->get();
        return view('calificacion.index',['calificaciones' => $calificaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calificaciones = Calificacion::all();
        $inscripciones = Inscripcion::all();
        $entregas = Entrega::all();
        return view('calificacion.new', compact('inscripciones', 'entregas', 'calificaciones'));
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
            'id_inscripcion' => 'required',
            'id_entrega' => 'required',
            'nota' => 'required',
            'observacion' => 'required',
        ]);

        $calificacion = new Calificacion;
        $calificacion->id_inscripcion = $request->id_inscripcion;
        $calificacion->id_entrega = $request->id_entrega;
        $calificacion->nota = $request->nota;
        $calificacion->observacion = $request->observacion;

        $calificacion->save();

        $calificaciones = Calificacion::all();

        return view('calificacion.index', ['calificaciones' => $calificaciones]);
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
        $calificacion = Calificacion::find($id);
        $inscripciones = Inscripcion::all();
        $entregas = Entrega::all();
        return view('calificacion.edit', compact('inscripciones', 'entregas', 'calificacion'));
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
        $calificacion = Calificacion::find($id);
        $request->validate([
            'id_inscripcion' => 'required',
            'id_entrega' => 'required',
            'nota' => 'required',
            'observacion' => 'required',
        ]);
    
        // Actualizar los campos de la calificación existente
        $calificacion->id_inscripcion = $request->id_inscripcion;
        $calificacion->id_entrega = $request->id_entrega;
        $calificacion->nota = $request->nota;
        $calificacion->observacion = $request->observacion;
    
        $calificacion->save();
    
        return redirect()->route('calificaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $calificacion = Calificacion::find($id);
        if($calificacion) {
            $calificacion->delete();
            return redirect()->route('calificaciones.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('calificaciones.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    }
}
