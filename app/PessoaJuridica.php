<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
{
    protected $table = 'pessoa_juridicas';
    protected $fillable = ['razao_social', 'insc_estadual'];

    public function cliente(){
        return $this->hasOne(Cliente::class,'pessoa_fisica_id');
    }

    public function fornecedor(){
        return $this->hasOne(Fornecedor::class,'pessoa_juridica_id');
    }

    public function pessoaQuery(){
        return $this->morphToMany(Pessoa::class,'pessoable');
    }

    public function getPessoaAttribute(){
        return $this->pessoaQuery()->first();
    }
}
