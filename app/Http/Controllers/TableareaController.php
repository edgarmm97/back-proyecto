<?php

namespace App\Http\Controllers;


use App\Models\tablearea;
use Illuminate\Http\Request;

class TableareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableareas = tablearea::all();

        return response()->json([
            'tableareas'=>$tableareas
        ]);
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
        $tableareas = tablearea::create($request->all());

        return response()->json([
            'status' =>true,
            'mensage'=>"Serie documental creada correctamente",
            'post'=>$tableareas
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tablearea  $tablearea
     * @return \Illuminate\Http\Response
     */
    public function show(tablearea $tablearea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tablearea  $tablearea
     * @return \Illuminate\Http\Response
     */
    public function edit(tablearea $tablearea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tablearea  $tablearea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tablearea $tablearea)
    {
        $tablearea->update($request->all());

        return response()->json([
            'status' =>true,
            'mensage'=>"Serie documental modificada correctamente",
            'post'=>$tablearea
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tablearea  $tablearea
     * @return \Illuminate\Http\Response
     */
    public function destroy(tablearea $tablearea)
    {
        $tablearea->delete();

        return response()->json([
            'status' =>true,
            'mensage'=>"Serie documental eliminda correctamente",
        ], 200);
    }
}
