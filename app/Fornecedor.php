<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    public function pessoaFisica(){
        return $this->belongsTo(PessoaFisica::class,'pessoa_fisica_id');
    }

    public function pessoaJuridica(){
        return $this->belongsTo(PessoaJuridica::class,'pessoa_juridica_id');
    }
}