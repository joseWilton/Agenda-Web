<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'id',
        'ddd',
        'telefone',
        'pessoa_id'
    ];

    protected $table = 'telefones';

    //função para trazer a relação de 1 para 1
    //nesse caso um telefone só pode pertencer a uma pessoa
    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    
}
