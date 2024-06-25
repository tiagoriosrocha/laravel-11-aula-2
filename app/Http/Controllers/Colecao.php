<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Colecao extends Controller
{
    public $listaCores = ["azul", 
                          "preto", 
                          "branco", 
                          "rosa", 
                          "roxo", 
                          "verde", 
                          "amarelo", 
                          "laranja"
                        ];
    
    public function criandoColecoes(){
        //exemplo da criação de uma colção
        $colecao1 = collect([1,2,3,4,5]);
        $colecao2 = collect(["nome" => "Tiago", "nascimento" => 1984, "sexo" => 'M']);
        $vetor1 = array(true,false,false,true,true);
        $colecao3 = collect($vetor1);
    }
                        
    public function exibirCores(){
        $colectionCores = collect($this->listaCores);
        return view("cores.exibir-cores", ["colectionCores" => $colectionCores]);
    }

    public function exibirCoresOrdenadas(){
        $colectionCores = collect($this->listaCores);
        $elementosOrdenados = $colectionCores->sort();
        return view("cores.exibir-cores", ["colectionCores" => $elementosOrdenados]);
    }

    public function exibirPrimeiroElemento(){
        $colectionCores = collect($this->listaCores);
        $elementosOrdenados = $colectionCores->sort();
        $primeiroElemento = $elementosOrdenados->first();
        return view("cores.exibir-cor", ["umaCor" => $primeiroElemento]);
    }

    /**
     * EXERCÍCIO 1
     * Crie aqui um método para pegar a última cor da lista
     * use o método last() da classe collection
     */
    public function exibirUltimoElemento(){

    }

    /**
     * EXERCÍCIO 2
     * Crie aqui um método para sortear um elemento da lista de cores
     * use o método random() da classe collection
     */
    public function exibirElementoAleatorio(){

    }

    public function inserirElementoNoFinal($novoElemento){
        $colectionCores = collect($this->listaCores);
        $colectionCores->push($novoElemento);
        return view("cores.exibir-cores", ["colectionCores" => $colectionCores]);
    }

    /**
     * EXERCÍCIO 3
     * Crie aqui um método para receber um parâmetro e inserir no início da lista de cores
     * 
     */
    public function inserirElementoNoInicio(){

    }

    ////////////////////////////////////////////////
    ////////////////////////////////////////////////
    /////////   RECEBENDO DADOS DE UM FORM   ///////
    ////////////////////////////////////////////////
    ////////////////////////////////////////////////

    /**
     * PARTE 1: Formulário para inserir uma nova cor
     */
    public function formularioNovaCorFinal(){
        return view('cores.form-nova-cor');
    }

    /**
     * PARTE 2: Método para receber o novo elemento por post
     */
    public function inserirElementoNoFinalPOST(Request $request){
        $colectionCores = collect($this->listaCores);
        $colectionCores->push($request["novacor"]);
        return view("cores.exibir-cores", ["colectionCores" => $colectionCores]);
    }

    ////////////////////////////////////////////////
    ////////////////////////////////////////////////
    ////////////////////////////////////////////////

    /**
     * EXERCÍCIO 4
     * DESENVOLVA DOIS MÉTODOS NOVOS PARA EXIBIR UM FORMULÁRIO
     * PARA INSERIR UMA NOVA COR NO INÍCIO DA LISTA DE CORES
     * APÓS, DESENVOLVA UM MÉTODO PARA RECEBER A NOVA COR E INSERIR NA COLEÇÃO
     */


    ////////////////////////////////////////////////
    ////////////////////////////////////////////////
    ////////////////////////////////////////////////

    public function formularioPesquisa(){
        return view("cores.formulario-pesquisa");
    }

    public function buscarCor(Request $request){
        $colectionCores = collect($this->listaCores);
        
        if( isset($request["corpesquisa"] ) ){
            $corPesquisa = strtolower($request["corpesquisa"]);
            $index = $colectionCores->search($corPesquisa);
        }else{
            $corPesquisa = "";
        }

        return view("cores.exibir-resultado-pesquisa", ["colectionCores" => $colectionCores, 
                                                        "index" => $index, 
                                                        "corPesquisa" => $corPesquisa]);
    }

    ////////////////////////////////////////////////
    ////////////////////////////////////////////////
    ////////////////////////////////////////////////

    public function filtrarCores($caractere){
        $colectionCores = collect($this->listaCores);

        $elementosFiltrados = $colectionCores->filter(function ($valor, int $chave) use ($caractere) {
            return $valor[0] == strtolower($caractere);
        });

        return view("cores.exibir-cores", ["colectionCores" => $elementosFiltrados]);
    }

    ////////////////////////////////////////////////
    ////////////////////////////////////////////////
    ////////////////////////////////////////////////

    public function mapearCoresParaMaiusculo(){
        $colectionCores = collect($this->listaCores);

        $elementosFiltrados = $colectionCores->map(function ($valor, int $chave){
            return strtoupper($valor);
        });

        return view("cores.exibir-cores", ["colectionCores" => $elementosFiltrados]);
    }

}
