<?php

namespace App\Http\Controllers;

use App\UkmModel;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UkmModel::get(), 200);
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
        $ukm = UkmModel::create($request->all());
        return response()->json($ukm, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ukm = UkmModel::find($id);
        if (is_null($ukm)) {
            return response()->json(["message" => "Record not found!", 404]);
        }
        return response()->json($ukm, 200);
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
        $ukm = UkmModel::find($id);
        if (is_null($ukm)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $ukm->update($request->all());
        return response()->json($ukm, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ukm = UkmModel::find($id);
        if (is_null($ukm)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $ukm->delete();
        return response()->json(null, 204);
    }
}
