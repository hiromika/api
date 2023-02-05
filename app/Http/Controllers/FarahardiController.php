<?php

namespace App\Http\Controllers;

use App\Models\Farahardi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

class FarahardiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         try {
            $users = Farahardi::orderBy('IDUser','desc')->get();

            return response()->json($users, 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'msg' => 'error'], 200);
        }
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
        // try {

            $farahardi = new Farahardi();
            $farahardi->Nama = $request->nama;
            $farahardi->Kom = $request->kom;
            $farahardi->save();

            return Response::json(['status' => true, 'msg' => 'success']);
           
        // } catch (\Throwable $th) {
        //     return Response::json(['status' => false, 'msg' => 'error']);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farahardi  $farahardi
     * @return \Illuminate\Http\Response
     */
    public function show(Farahardi $farahardi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farahardi  $farahardi
     * @return \Illuminate\Http\Response
     */
    public function edit(Farahardi $farahardi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farahardi  $farahardi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farahardi $farahardi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farahardi  $farahardi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farahardi $farahardi)
    {
        //
    }
}
