<?php

namespace App\Business;
use App\Sistema;

class SistemaBO {

    private $model;

    public function __construct(Sistema $sistema) {
        $this->model = $sistema;
    }

    public function pesquisar($pesquisa) {
        $query = $this->model->newQuery();
        foreach($this->model->getBuscaveis() as $valor){
           if(!empty($pesquisa[$valor])){
                $query->where($valor, 'like', '%' .$pesquisa[$valor]. '%');
           }
        }
        echo $query->toSql();
        return $query;
    }

    public function validaEmail($email){
        preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str);
    }
}