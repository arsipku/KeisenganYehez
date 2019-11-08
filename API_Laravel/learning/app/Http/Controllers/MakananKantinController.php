<?php

namespace App\Http\Controllers;

use App\MakananModel;
use Illuminate\Http\Request;

class MakananKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(MakananModel::get(), 200);
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
        $makanan_kantin = MakananModel::create($request->all());
        return response()->json($makanan_kantin, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makanan_kantin = MakananModel::find($id);
        if (is_null($makanan_kantin)) {
            return  response()->json(["message" => "Record not found!", 404]);
        }
        return response()->json($makanan_kantin, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $makanan_kantin = MakananModel::find($id);
        if (is_null($makanan_kantin)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $makanan_kantin->update($request->all());
        return response()->json($makanan_kantin, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan_kantin = MakananModel::find($id);
        if (is_null($makanan_kantin)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $makanan_kantin->delete();
        return response()->json(null, 204);
    }
}
