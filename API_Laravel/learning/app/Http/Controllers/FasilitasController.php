<?php

namespace App\Http\Controllers;

use App\FasilitasModel;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(FasilitasModel::get(), 200);
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
        $fasilitas_umn = FasilitasModel::create($request->all());
        return response()->json($fasilitas_umn, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas_umn = FasilitasModel::find($id);
        if (is_null($fasilitas_umn)) {
            return response()->json(["message" => "Record not found!", 404]);
        }
        return response()->json($fasilitas_umn, 200);
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
        $fasilitas_umn = FasilitasModel::find($id);
        if (is_null($fasilitas_umn)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $fasilitas_umn->update($request->all());
        return response()->json($fasilitas_umn, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas_umn = FasilitasModel::find($id);
        if (is_null($fasilitas_umn)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $fasilitas_umn->delete();
        return response()->json(null, 204);
    }
}

