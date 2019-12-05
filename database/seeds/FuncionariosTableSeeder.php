<?php

use App\Models\Funcionario;
use Illuminate\Database\Seeder;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
            'nome'            => 'Felipe',
            'data_nascimento' => '1991-06-12',
            'cidade'          => 'Salvador',
            'telefone'        => '071991402371',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        Funcionario::create([
            'nome'            => 'Carlos',
            'data_nascimento' => '1992-07-02',
            'cidade'          => 'Rio de Janeiro',
            'telefone'        => '071956782371',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        Funcionario::create([
            'nome'            => 'Marina',
            'data_nascimento' => '1995-09-20',
            'cidade'          => 'Feira de Santana',
            'telefone'        => '071991467341',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        Funcionario::create([
            'nome'            => 'Camila',
            'data_nascimento' => '1986-12-19',
            'cidade'          => 'Belo Horizonte',
            'telefone'        => '071956765434',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        Funcionario::create([
            'nome'            => 'Fernanda',
            'data_nascimento' => '1997-01-22',
            'cidade'          => 'Salvador',
            'telefone'        => '071987654345',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        Funcionario::create([
            'nome'            => 'Luiz',
            'data_nascimento' => '1998-03-16',
            'cidade'          => 'São Paulo',
            'telefone'        => '071998654345',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);
    }
}
