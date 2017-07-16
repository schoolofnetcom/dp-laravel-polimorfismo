<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $fillable = ['nome', 'documento', 'endereco', 'email'];

    public function fisicaQuery(){
        return $this->morphedByMany(PessoaFisica::class,'pessoable');
    }

    public function juridicaQuery(){
        return $this->morphedByMany(PessoaJuridica::class,'pessoable');
    }

    public function getFisicaAttribute(){
        return $this->fisicaQuery()->first();
    }

    public function getJuridicaAttribute(){
        return $this->juridicaQuery()->first();
    }
}
