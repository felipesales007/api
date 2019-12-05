<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use App\Models\PostoTrabalho;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Funcionario[]|Collection|void
     */
    public function index()
    {
        return Funcionario::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Funcionario::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param string $pais
     * @return void
     */
    public function show($pais)
    {
        return Funcionario::select('funcionarios.nome', 'funcionarios.data_nascimento', 'funcionarios.cidade', 'funcionarios.telefone')
            ->join('postos_trabalho', 'postos_trabalho.funcionario_id', '=', 'funcionarios.id')
            ->where('postos_trabalho.pais', $pais)
            ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
    }
}
