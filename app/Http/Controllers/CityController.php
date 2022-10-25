<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        // retornaria uma view caso necessario
    }

    public function show($id)
    {
        $dado = CityModel::where('id', $id)->get();
    }

    public function create()
    {
        // retornaria uma view caso necessario
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        CityModel::create($dados);
    }

    public function edit($id)
    {
        // retornaria uma view caso necessario
    }

    public function update(Request $request, $id)
    {
        $dado = CityModel::where('id',$id)->get();
        $dado = $dado[0];
        $dado->name = $request->name;
        $dado->push();
    }

    public function destroy($id)
    {
        $dado = CityModel::where('id', $id)->get();
        DB::delete('DELETE FROM city WHERE id = ?', [$id]);
    }
}
