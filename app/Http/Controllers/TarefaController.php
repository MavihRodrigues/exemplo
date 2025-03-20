<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(Request $request)
    {
        return Tarefa::all();
    }

    public function store(Request $request)
    {
        $tarefa = Tarefa::create($request->all());
        return response()->json($tarefa, 201);
    }

    public function destroy(string $id)
    {
        $tarefa = Tarefa::find($id)->delete();
        return response()->json(null, 204);
    }

    public function update(Request $request, string $id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->update($request->all());
        return response()->json($tarefa, 200);
    }

    public function show(string $id)
    {
        return Tarefa::find($id);
    }
}
