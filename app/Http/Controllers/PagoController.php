<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Pago;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Pago::all();
        return view('pago.index',['pagos' => $pagos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $pagos = Pago::all();
        return view('pago.new',compact('estudiantes','pagos'),['pagos' => $pagos]);
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
         'fecha_pago' => 'required',
         'valor' => 'required',
         'tipo_pago' => 'required',
         'metodo_pago' => 'required',
       ]);

       $pago = new Pago;
       $pago->id_estudiante = $request->id_estudiante;
       $pago->fecha_pago = $request->fecha_pago;
       $pago->valor = $request->valor;
       $pago->tipo_pago = $request->tipo_pago;
       $pago->metodo_pago = $request->metodo_pago;

       $pago->save();

       $pagos = Pago::all();

       return view('pago.index',['pagos' => $pagos]);
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
        $estudiantes = Estudiante::all();
        $pago = Pago::findOrFail($id);
        
        return view('pago.edit', compact('pago', 'estudiantes'));
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
       
        $pago = Pago::find($id);

        $request->validate([

            'id_estudiante' => 'required',
            'fecha_pago' => 'required',
            'valor' => 'required',
            'tipo_pago' => 'required',
            'metodo_pago' => 'required',
          ]);
   

        $pago->id_estudiante = $request->id_estudiante;
        $pago->fecha_pago = $request->fecha_pago;
        $pago->valor = $request->valor;
        $pago->tipo_pago = $request->tipo_pago;
        $pago->metodo_pago = $request->metodo_pago;
 
        $pago->save();
 
        return redirect()->route('pagos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago = Pago::find($id);
        if($pago) {
            $pago->delete();
            return redirect()->route('pagos.index')->with('success', 'La participación ha sido eliminada correctamente.');
        } else {
            return redirect()->route('pagos.index')->with('error', 'La participación no pudo ser encontrada.');
        }
    
    }
}
