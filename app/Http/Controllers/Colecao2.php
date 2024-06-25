<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Colecao2 extends Controller
{
    public $produtos = [
        ['nome' => 'mesa', 'preco' => 1200, 'categoria' => "móveis"],
        ['nome' => 'cadeira', 'preco' => 100, 'categoria' => "móveis"],
        ['nome' => 'livro', 'preco' => 30.5, 'categoria' => "papelaria"],
        ['nome' => 'lápis', 'preco' => 5.3, 'categoria' => "papelaria"],
        ['nome' => 'caneta', 'preco' => 10.25, 'categoria' => "papelaria"],
    ];

    public function exibirProdutos(){
        $colectionProdutos = collect($this->produtos);
        return view("produtos.exibir", ["produtos" => $colectionProdutos]);
    }

    public function exibirProdutosPorPreco(){
        $colectionProdutos = collect($this->produtos)->sortBy('preco');
        return view("produtos.exibir", ["produtos" => $colectionProdutos]);
    }

    public function exibirProdutosPrecoIgual($valor){
        $colectionProdutos = collect($this->produtos);
        $produtosFiltrados = $colectionProdutos->where("preco", $valor);
        return view("produtos.exibir", ["produtos" => $produtosFiltrados]);
    }

    public function exibirProdutosPrecoMaioresQue($valor){
        $colectionProdutos = collect($this->produtos);
        $produtosFiltrados = $colectionProdutos->where("preco", ">", $valor);
        return view("produtos.exibir", ["produtos" => $produtosFiltrados]);
    }

    public function exibirProdutosPrecoMenoresQue($valor){
        $colectionProdutos = collect($this->produtos);
        $produtosFiltrados = $colectionProdutos->where("preco", "<", $valor);
        return view("produtos.exibir", ["produtos" => $produtosFiltrados]);
    }

    public function exibirProdutosPrecoEntre($valor1, $valor2){
        $colectionProdutos = collect($this->produtos);
        $produtosFiltrados = $colectionProdutos->whereBetween("preco", [$valor1,$valor2]);
        return view("produtos.exibir", ["produtos" => $produtosFiltrados]);
    }

    /**
     * Exercício 5
     * crie uma busca por categoria usando um formulário em que o usuário
     * poderá digitar a categoria desejada
     */


     

     /**
      * Exercício 6
      * crie um formulário em que será exibida todas as categorias
      * e o usuário poderá selecionar a categoria desejada usando o botão
      * do tipo radio.
      */
    
}
