<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostoTrabalho extends Model
{
    /**
     * A tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'postos_trabalho';

    /**
     * Os atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'funcionario_id', 'setor', 'tipo', 'local', 'pais', 'data_habilitado', 'data_validade'
    ];
}
