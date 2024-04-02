<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller {
    private $perguntas = array();

    public function __construct() { 
        $this->perguntas ['pergunta1'] = 'A' ; 
        $this->perguntas ['pergunta2'] = 'B';
        $this->perguntas ['pergunta3'] = 'C';
        $this->perguntas ['pergunta4'] = 'D';
        $this->perguntas ['pergunta5'] = 'E';
    }

    public function index () {
        session (['acertos' => 0]);
        return view('pag1perguntas');
    }

    public function dadospag1perguntas (Request $request) {
        $resposta = $request->input('pergunta');
        session(['respostal' => $resposta]);

        if (strcmp($this->perguntas ['pergunta1'], $resposta) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);
        return view('pagina2');
    }

    public function dadospag2perguntas (Request $request) {
        $resposta = $request->input('pergunta');
        session(['respostal' => $resposta]);

        if (strcmp($this->perguntas ['pergunta1'], $resposta) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);
        return view('pagina2');
    }

    public function dadospag3perguntas (Request $request) {
        $resposta = $request->input('pergunta');
        session(['respostal' => $resposta]);

        if (strcmp($this->perguntas ['pergunta1'], $resposta) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);
        return view('pagina2');
    }


    public function dadospag4perguntas (Request $request) {
        $resposta = $request->input('pergunta');
        session(['respostal' => $resposta]);

        if (strcmp($this->perguntas ['pergunta1'], $resposta) ==0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado1' => 'Acertou']);
        }else
            session(['resultado1' => 'Errou']);
        return view('pagina2');
    }
                // métodos para as demais påginas/perguntas

    public function dadospag5perguntas (Request $request) {
        
        $resposta = $request->input('pergunta');

        session(['resposta10' => $resposta]);
        
        if (strcmp($this->perguntas ['pergunta10'], $resposta) == 0){
            $acertos = session('acertos');
            $acertos++;
            session(['acertos' => $acertos]);
            session(['resultado10' => 'Acertou']);
        }else
            session(['resultado10' => 'Errou']);
            
        $dados = array();

        $dados [1] ['gabarito'] = $this->perguntas['pergunta1'];
        $dados [1] ['resposta'] = session('resposta1');
        $dados [1] ['resultado'] = session('resultado1');
        //incluir no array dados os resultados das outras perguntas
                    
        $dados [10] ['gabarito'] = $this->perguntas['pergunta10'];
        $dados [10] ['resposta'] = session('resposta10');
        $dados [10] ['resultado'] = session('resultado10');

        $acertos = session('acertos');

        if ($acertos == 10)
            $dados ['mensagem'] = "Excelente!! você acertou todas!! Você é um
                super fä!!";
        else if ($acertos > 7)
            $dados ['mensagem'] = "Muito bom!! você acertou" . $acertos . "de 10!! Parabéns!!";
        else if($acertos > 5) 
            $dados ['mensagem'] = "Você conhece um pouco sobre a cantora! Mas pode melhorar. Você acertou" . $acertos . "de 10, parabéns!!";
        else if ($acertos == 5)
            $dados ['mensagem'] = "Você acertou 50% do teste!!";
        else
            $dados ['mensagem'] = "Precisa se inteirar mais sobre a cantora! Você acertou" . $acertos ."de 10.";
        
        return view('resultado', compact('dados'));
    }
}