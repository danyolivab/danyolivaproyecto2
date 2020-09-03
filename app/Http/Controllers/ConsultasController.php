<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultas.index');
    }

    public function indexadmin(){
        return view('admin.index');
    }

    public function consulta1(){
        return view('consultas.consulta1');
    }

    public function resultado1(Request $request){
        $data = $request->validate([
            'tarjeta' => 'required',
        ]);

        $parametro = $data['tarjeta'];

        $dato = DB::table('datos')->where('#_TC', $parametro)->get();
        return view('consultas.resultado1')->with('dato', $dato);
    }

    public function consulta2(){
        return view('consultas.consulta2');
    }

    public function resultado2(Request $request){
        $data = $request->validate([
            'date1' => 'required',
            'date2' => 'required',
        ]);

        $fecha1 = $data['date1'];
        $fecha2 = $data['date2'];

        $dato = DB::table('datos')->whereBetween('FCH_CON', array($fecha1, $fecha2))->paginate(10);
        //dd($dato);
        return view('consultas.resultado2')->with('dato', $dato);
    }

    public function resultado3(){
        $dato = DB::table('datos')->paginate(10);
        return view('consultas.resultado3')->with('dato', $dato);
    }

    public function consulta4(){
        return view('consultas.consulta4');
    }

    public function resultado4(Request $request){
        $data = $request->validate([
            'tarjeta' => 'required',
        ]);

        $parametro = $data['tarjeta'];

        $dato = DB::table('datos')->where('#_TC', $parametro)->get();

        return view('consultas.resultado4')->with('dato', $dato);
    }

    public function consulta5(){
        return view('consultas.consulta5');
    }

    public function resultado5(Request $request){
        $data = $request->validate([
            'nombre' => 'required',
        ]);

        $parametro = $data['nombre'];

        $dato = DB::table('datos')->where('NOMBRE', $parametro)->get();

        return view('consultas.resultado5')->with('dato', $dato);
    }

    public function consulta6(){
        return view('consultas.consulta6');
    }

    public function resultado6(Request $request){
        $data = $request->validate([
            'apellido' => 'required',
        ]);

        $parametro = $data['apellido'];

        $dato = DB::table('datos')->where('APELLIDO1', $parametro)->get();

        return view('consultas.resultado6')->with('dato', $dato);
    }

    public function consulta7(){
        return view('consultas.consulta7');
    }

    public function resultado7(Request $request){
        $data = $request->validate([
            'codigo' => 'required',
        ]);

        $parametro = $data['codigo'];

        $dato = DB::table('datos')->where('COD_SOCIO', $parametro)->get();

        return view('consultas.resultado7')->with('dato', $dato);
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
        //
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
