<?php

use App\Models\PostoTrabalho;
use Illuminate\Database\Seeder;

class PostosTrabalhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostoTrabalho::create([
            'funcionario_id'  => '1',
            'setor'           => 'Tecnologia da Informação',
            'tipo'            => 'Tecnológico',
            'local'           => 'São Paulo',
            'pais'            => 'Brasil',
            'data_habilitado' => '2019-01-01',
            'data_validade'   => '2019-12-31',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '1',
            'setor'           => 'Administração',
            'tipo'            => 'ADM',
            'local'           => 'Sunshini',
            'pais'            => 'Europa',
            'data_habilitado' => '2019-06-01',
            'data_validade'   => '2019-12-31',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '2',
            'setor'           => 'Tecnologia da Informação',
            'tipo'            => 'Tecnológico',
            'local'           => 'São Paulo',
            'pais'            => 'Brasil',
            'data_habilitado' => '2016-05-08',
            'data_validade'   => '2019-09-20',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '3',
            'setor'           => 'Manutenção',
            'tipo'            => 'Operacional',
            'local'           => 'São Paulo',
            'pais'            => 'Brasil',
            'data_habilitado' => '2016-01-01',
            'data_validade'   => '2019-12-27',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '4',
            'setor'           => 'Juridico',
            'tipo'            => 'Advogados',
            'local'           => 'Belo Horizonte',
            'pais'            => 'Brasil',
            'data_habilitado' => '2017-07-05',
            'data_validade'   => '2019-12-19',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '5',
            'setor'           => 'Limpeza',
            'tipo'            => 'Faxina',
            'local'           => 'California',
            'pais'            => 'Estados Unidos',
            'data_habilitado' => '2019-01-01',
            'data_validade'   => '2019-12-31',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '6',
            'setor'           => 'Tecnologia da Informação',
            'tipo'            => 'Tecnológico',
            'local'           => 'Munshaga',
            'pais'            => 'Russia',
            'data_habilitado' => '2018-02-01',
            'data_validade'   => '2019-12-31',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);

        PostoTrabalho::create([
            'funcionario_id'  => '6',
            'setor'           => 'Tecnologia da Informação',
            'tipo'            => 'Tecnológico',
            'local'           => 'Cansas',
            'pais'            => 'Europa',
            'data_habilitado' => '2019-01-01',
            'data_validade'   => '2019-12-31',
            'created_at'      => now(),
            'updated_at'      => now()
        ]);
    }
}
