<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='clientes';

    public function pessoaFisica(){
        return $this->belongsTo(PessoaFisica::class,'pessoa_fisica_id');
    }

    public function pessoaJuridica(){
        return $this->belongsTo(PessoaJuridica::class,'pessoa_juridica_id');
    }
}
