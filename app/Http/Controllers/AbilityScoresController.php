<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbilityScore;

class AbilityScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(AbilityScore::all(), 200);
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
        $this->validate($request, [
            'slug' => 'required|string',
            'name' => 'required|string',
            'full_name' => 'required|string',
            'desc' => 'required|string',
        ]);
        $ability= AbilityScore::create($request->all());
        return response()->json($ability, 200);
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
        $ability = AbilityScore::findOrfail($id);
        return response()->json($ability, 200);
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
        $ability = AbilityScore::findOrfail($id);
        return response()->json($ability, 200);

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
        $this->validate($request, [
            'slug' => 'required|string',
            'name' => 'required|string',
            'full_name' => 'required|string',
            'desc' => 'required|string',
        ]);
        $ability= AbilityScore::findOrFaill($request->all());
        $ability->fill($request->all());
        $ability->save();
        return response()->json($ability, 200);
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

        $ability=AbilityScore::findOrFail($id);
        $ability->delete();
        return response()->json( ['menssage'=>'Removido com sucesso!'],200);
    }
}
