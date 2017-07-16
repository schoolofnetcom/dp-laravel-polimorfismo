<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criando pessoas fisicas
        factory(\App\Pessoa::class,10)
            ->create()
            ->each(function($pessoa){
               $pessoaFisica = factory(\App\PessoaFisica::class,1)->create()->first();
               $pessoa->fisicaQuery()->save($pessoaFisica);
               $pessoaFisica->cliente()->create([]);
            });

        //criando pessoas juridicas
        factory(\App\Pessoa::class,10)
            ->create()
            ->each(function($pessoa){
                $pessoaJuridica = factory(\App\PessoaJuridica::class,1)->create()->first();
                $pessoa->JuridicaQuery()->save($pessoaJuridica);
                $pessoaJuridica->cliente()->create([]);
            });
    }
}
