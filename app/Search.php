<?php 

namespace App;

class Search {
    public static function pesquisar($model, $pesquisa){
        $query = $model->newQuery();
        foreach($model->getBuscaveis() as $valor){
           if(!empty($pesquisa[$valor])){
                $query->where($valor, 'like', '%' .$pesquisa[$valor]. '%');
           }
        }
        // echo $query->toSql();
        return $query;
    }
}

?>