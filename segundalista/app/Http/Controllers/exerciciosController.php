<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exerciciosController extends Controller
{
    public function h_ex1(){
        return view('ex1');
    }

    public function somar(Request $request){
        $num1 = intval($request->input('num1'));
        $num2 = intval($request->input('num2'));

        if ($num1 != $num2){
            $resultado = $num1 + $num2;
            return view('ex1', compact('resultado'));
        } else {
            $resultado = ($num1 + $num2) * 3;
            return view('ex1', compact('resultado'));
        }
    }

    public function h_ex2(){
        return view('ex2');
    }

    public function ordenarCres(Request $request){
        $val1 = floatval($request->input('val1'));
        $val2 = floatval($request->input('val2'));

        if ($val1 > $val2){
            $maior = $val1;
            $menor = $val2;
            return view('ex2', compact('maior', 'menor'));
        } elseif ($val1 < $val2){
            $maior = $val2;
            $menor = $val1;
            return view('ex2', compact('maior', 'menor'));
        } else{
            $igual = $val1;
            return view('ex2', compact('igual'));
        }
    }

    public function h_ex3(){
        return view('ex3');
    }

    public function aplicarDesc(Request $request){
        $produto = floatval($request->input('prod1'));
        

        if ($produto > 100){
            $desconto = $produto - ($produto * (15 / 100));
            
            return view('ex3', compact('desconto'));
        } else {
            return view('ex3', compact('produto'));
        }
    }

    public function h_ex4(){
        return view('ex4');
    }

    public function primos(Request $request){
        $valor = intval($request->input('val1'));
    
        $primos = [];
        for ($i = 2; $i <= $valor; $i++) {
            if ($this->ehPrimo($i)) {
                $primos[] = $i;
            }
        }
    
        return view('ex4', compact('primos', 'valor'));
    }
    
    private function ehPrimo($num) {
        if ($num < 2) 
            return false;
        for ($i = 2; $i * $i <= $num; $i++) {
            if ($num % $i == 0) 
                return false;
        }
        return true;
    }

    public function h_ex5(){
        return view('ex5');
    }

    public function mesAno(Request $request){
        $valor = intval($request->input('val1'));

        switch ($valor){
            case 1:
                $mesAno = "Janeiro";
                return view('ex5', compact('mesAno'));
                break;
            case 2:
                $mesAno = "Fevereiro";
                return view('ex5', compact('mesAno'));
                break;
            case 3:
                $mesAno = "Março";
                return view('ex5', compact('mesAno'));
                break;
            case 4:
                $mesAno = "Abril";
                return view('ex5', compact('mesAno'));
                break;
            case 5:
                $mesAno = "Maio";
                return view('ex5', compact('mesAno'));
                break;
            case 6:
                $mesAno = "Junho";
                return view('ex5', compact('mesAno'));
                break;
            case 7:
                $mesAno = "Julho";
                return view('ex5', compact('mesAno'));
                break;
            case 8:
                $mesAno = "Agosto";
                return view('ex5', compact('mesAno'));
                break;
            case 9:
                $mesAno = "Setembro";
                return view('ex5', compact('mesAno'));
                break;
            case 10:
                $mesAno = "Outubro";
                return view('ex5', compact('mesAno'));
                break;
            case 11:
                $mesAno = "Novembro";
                return view('ex5', compact('mesAno'));
                break;
            case 12:
                $mesAno = "Dezembro";
                return view('ex5', compact('mesAno'));
                break;
        }
    }

    public function h_ex6(){
        return view('ex6');
    }

    public function incrementarFor(Request $request){
        $valor = intval($request->input('val1'));

        $numeros = [];
        for ($i = 1; $i <= $valor; $i++){
            $numeros[] = $i;
        }
        return view('ex6', compact('numeros'));
    }

    public function h_ex7(){
        return view('ex7');
    }

    public function incrementarWhile(Request $request){
        $valor = intval($request->input('val1'));
        $i = 0;
        $somar = 0;
        while($i <= $valor){
            $somar += $i;
            $i++;
        }
        return view('ex7', compact('somar', 'valor'));
    }

    public function h_ex8() {
        return view('ex8');
    }

    public function contagemRegressiva(Request $request) {
        $valor = intval($request->input('val1'));

        $contagem = [];
        do {
            $contagem[] = $valor;
            $valor--;
        } while ($valor >= 1);

        return view('ex8', compact('contagem'));
    }

    public function h_ex9(){
        return view('ex9');
    }

    public function calcularFatorial(Request $request) {
        $valor = intval($request->input('val1'));
        $fatorial = 1;

        for ($i = 1; $i <= $valor; $i++) {
            $fatorial *= $i;
        }

        return view('ex9', compact('valor', 'fatorial'));
    }

    public function h_ex10(){
        return view('ex10');
    }

    public function calcularTabuada(Request $request) {
        $valor = intval($request->input('val1'));
        $tabuada = [];

        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = "$valor x $i = " . ($valor * $i);
        }

        return view('ex10', compact('valor', 'tabuada'));
    }
}
