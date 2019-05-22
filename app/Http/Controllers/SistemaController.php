<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sistema;
use App\Search;
use App\Business\SistemaBO;
use App\Requests\SistemaRequest;

class SistemaController extends Controller
{
    private $sistemaBO;

    public function __construct(SistemaBO $sistemaBO) {
        $this->sistemaBO = $sistemaBO;
    }

    /**
     * Exibe a lista de sistemas
     *
     * @return view
     */
    public function index()
    {
        $resultado = $this->sistemaBO->pesquisar([])->paginate(2);
        return view('pesquisar-sistema', compact('resultado'));
    }

    /**
     * Exibe o formulário de criação de sistemas
     *
     * @return view
     */
    public function create()
    {
        return view('incluir-sistema');
    }

    /**
     * Armazena o sistema criado no banco de dados
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SistemaRequest $request)
    {
        $model = Sistema::create($request->all());
    }

    /**
     * Exibe o sistema pesquisado
     *
     * @param Request $request
     * @return view
     */
    public function search(Request $request){
        $sistema = new Sistema();
        //$resultado = Search::pesquisar($sistema, $request->all())->paginate(2);
        $resultado = $this->sistemaBO->pesquisar($request->all())->paginate(2);
        return view('pesquisar-sistema', compact('resultado'));
    }
}
