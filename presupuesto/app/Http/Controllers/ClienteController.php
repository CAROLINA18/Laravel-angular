<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=[
            ['id' => '1',
            'nit' => '800118334',
            'nombre' => 'Leonela Burgos',
            'consecutivo' => '2030',
            'estado' => 'Activo',
            'cpr_detalle_ficha' => [
              'id' => '2',
              'id_ficha' => '1',
              'cod_personal' => '74',
              'cantidad' => '20',
              'categoria' => 'dotacion',
              'presupuesto' => '5000000',]
            ],
            ['id' => '2',
            'nit' => '1144074589',
            'nombre' => 'Ana Carolina Aristizabal',
            'consecutivo' => '2031',
            'estado' => 'Activo',
            'cpr_detalle_ficha' => [
              'id' => '3',
              'id_ficha' => '2',
              'cod_personal' => '50',
              'cantidad' => '70',
              'categoria' => 'papeleria',
              'presupuesto' => '15000000',],
            ],
            ['id' => '4',
            'nit' => '1144074589',
            'nombre' => 'Hernando perez',
            'consecutivo' => '2031',
            'estado' => 'Activo',
            'cpr_detalle_ficha' => [
              'id' => '6',
              'id_ficha' => '4',
              'cod_personal' => '50',
              'cantidad' => '70',
              'categoria' => 'comercio',
              'presupuesto' => '15000000',],
            ],
            ['id' => '3',
            'nit' => '123456',
            'nombre' => 'Pedro perez',
            'consecutivo' => '2032',
            'estado' => 'Activo',
            'cpr_detalle_ficha' => [
              'id' => '4',
              'id_ficha' => '3',
              'cod_personal' => '50',
              'cantidad' => '70',
              'categoria' => 'finanzas',
              'presupuesto' => '15000000',],
            ]
            ];

         return json_encode($cliente);
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
