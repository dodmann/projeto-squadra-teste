<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model{
    protected $buscaveis = ['descricao', 'sigla', 'emailAtendimento'];
    protected $fillable = ['descricao', 'sigla', 'emailAtendimento', 'url'];

    public function getBuscaveis(){
        return $this->buscaveis;
    }
}
