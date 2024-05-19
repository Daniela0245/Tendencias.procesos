<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Estudiante;
use App\Models\Trabajo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entregas = Entrega::all();
        return view('entrega.index',['entregas' => $entregas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $entregas = Entrega::all();
        $estudiantes = Estudiante::all();
        $trabajos = Trabajo::all();
        return view('entrega.new', compact('trabajos', 'entregas', 'estudiantes'));
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
            'id_trabajo' => 'required',
            'id_estudiante' => 'required',
            'fecha_entrega' => 'required',
            'archivo' => 'required',
        ]);

        $entrega = new Entrega;
        $entrega->id_trabajo = $request->id_trabajo;
        $entrega->id_estudiante = $request->id_estudiante;
        $entrega->fecha_entrega = $request->fecha_entrega;
        $entrega->archivo = $request->archivo;

        $entrega->save();

        $entregas = Entrega::all();

        return view('entrega.index', ['entregas' => $entregas]);
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
         $entrega = Entrega::find($id);
        $estudiantes = Estudiante::all();
        $trabajos = Trabajo::all();
        return view('entrega.edit', compact('trabajos', 'entrega', 'estudiantes'));
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
        $entrega = Entrega::find($id);
        $request->validate([
            'id_trabajo' => 'required',
            'id_estudiante' => 'required',
            'fecha_entrega' => 'required',
            'archivo' => 'required',
        ]);


        $entrega->id_trabajo = $request->id_trabajo;
        $entrega->id_estudiante = $request->id_estudiante;
        $entrega->fecha_entrega = $request->fecha_entrega;
        $entrega->archivo = $request->archivo;

        $entrega->save();


        return redirect()->route('entregas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrega = Entrega::find($id);
        if($entrega) {
            $entrega->delete();
            return redirect()->route('entregas.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('entregas.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    }
}
