<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model Imports
use App\Models\SDG;

class SDGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gather all sdg data from db
        $sdgs =  SDG::all();

        return [
            'status' => 1,
            'data' => $sdgs
        ];
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
        $sdg = SDG::create($request->all());

        return [
            'status' => 1,
            'data' => $sdg,
            'msg' => 'SDG Created Successfully.'
        ];
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
        $sdg = SDG::find($id);

        return [
            'status' => 1,
            'data' => $sdg
        ];
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
        $sdg = SDG::find($id);

        $sdg->update($request->all());

        return [
            'status' => 1,
            'data' => $sdg,
            'msg' => 'SDG Updated Successfully.'
        ];
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
           $sdg = SDG::find($id);

           $sdg->delete();

           return [
               'status' => 1,
               'data' => $sdg,
               'msg' => 'SDG Deleted Successfully.'
           ];
    }
}
