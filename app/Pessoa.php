<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'pessoas';

    //função para trazer a relação de 1 pra n
    //no caso uma pessoa pode ter varios contatos
    public function telefone()
    {
        return $this->hasMany(Telefone::class,'pessoa_id'); // 2º parametro é a chave (fk) na tabela
    }
}
