<?php

namespace App\Http\Controllers;

use App\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(MahasiswaModel::get(), 200);
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
        $mahasiswa = MahasiswaModel::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        if (is_null($mahasiswa)) {
            return response()->json(["message" => "Record not found!", 404]);
        }
        return response()->json($mahasiswa, 200);
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
        $mahasiswa = MahasiswaModel::find($id);
        if (is_null($mahasiswa)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        if (is_null($mahasiswa)) {
            return response()->json([
                "message" => "Record not found"
            ], 404);
        }
        $mahasiswa->delete();
        return response()->json(null, 204);
    }
}
