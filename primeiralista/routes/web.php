<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    return "Seja bem vindo!";
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('/listaex1', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));  
});

Route::get('/ex2', function(){
    return view('lista.ex2');
});

Route::post('/listaex2',function(Request $request){
    $temp1 = floatval($request->input('temp1'));

    $faren = ($temp1 * (9/5)) + 32;
    return view('lista.ex2', compact('faren', 'temp1'));
});

Route::get('/ex3', function(){
    return view('lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $cel = floatval($request->input('cel'));

    $celsius = (($cel - 32) * (5/9));
    return view('lista.ex3', compact('celsius', 'cel'));
});

Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('/listaex4', function(Request $request){
    $alt = floatval($request->input('altura'));
    $larg = floatval($request->input('largura'));

    $area = $alt * $larg;

    return view('lista.ex4', compact('area'));
});

Route::get('/ex5', function(){
    return view('lista.ex5');
});

Route::post('/listaex5', function(Request $request){
    $raio = floatval($request->input('raio'));

    $area = ($raio ** 2) * 3.14;
    return view('lista.ex5', compact('area'));
});

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('/listaex6', function(Request $request){
    $alt = floatval($request->input('altura'));
    $larg = floatval($request->input('largura'));

    $perimetro = 2 * ($alt + $larg);
    return view('lista.ex6', compact('perimetro'));
});

Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('/listaex7', function(Request $request){
    $raio = floatval($request->input('raio'));

    $perimetro = 2 * 3.14 * $raio;
    return view('lista.ex7', compact('perimetro'));
});

Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/listaex8', function(Request $request){
    $base = floatval($request->input('base'));
    $expoente = floatval($request->input('expoente'));

    $resultado = $base ** $expoente;
    return view('lista.ex8', compact('base', 'expoente', 'resultado'));
});

Route::get('/ex9', function(){
    return view('lista.ex9');
});

Route::post('/listaex9', function(Request $request){
    $metro = floatval($request->input('metro'));

    $centimetro = $metro * 100;

    return view('lista.ex9', compact('centimetro', 'metro'));
});

Route::get('/ex10', function(){
    return view('lista.ex10');
});

Route::post('/listaex10', function(Request $request){
    $km = floatval($request->input('km'));

    $milha = $km / 1.60934;
    
    return view('lista.ex10', compact('km', 'milha'));
});

Route::get('/ex11', function(){
    return view('lista.ex11');
});

Route::post('/listaex11', function(Request $request){
    $kg = floatval($request->input('kg'));
    $alt = intval($request->input('altura'));


    $imc = ($kg / (($alt / 100) ** 2));

    return view('lista.ex11', compact('kg', 'alt', 'imc'));
});

Route::get('ex12', function(){
    return view('lista.ex12');
});

Route::post('/listaex12', function(Request $request){
    $preco = floatval($request->input('preco'));
    $percent = floatval($request->input('desconto'));

    $desconto = ($percent / 100) * $preco;
    $preco_final = $preco - $desconto;

    return view('lista.ex12', compact('preco', 'percent', 'desconto', 'preco_final'));
});

Route::get('/ex13', function(){
    return view('lista.ex13');
});

Route::post('/listaex13', function(Request $request){
    $capital = floatval($request->input("capital"));
    $taxa = floatval($request->input("taxa")) / 100; 
    $tempo = intval($request->input("tempo"));

    // Cálculo dos juros simples
    $juros = $capital * $taxa * $tempo;
    $montante = $capital + $juros;
    $form_mont = number_format($montante, 2, ",", ".");
    $form_juros = number_format($juros, 2, ",", ".");

    return view('lista.ex13', compact('form_juros', 'form_mont'));
});

Route::get('/ex14', function(){
    return view('lista.ex14');
});

Route::post('/listaex14', function(Request $request){
    $capital = floatval($request->input("capital"));
    $taxa = floatval($request->input("taxa")) / 100; 
    $tempo = intval($request->input("tempo"));

    $montante = $capital * pow((1 + $taxa), $tempo);
    $form_mont = number_format($montante, 2, ",", ".");

    return view('lista.ex14', compact('form_mont'));
});

Route::get('/ex15', function(){
    return view('lista.ex15');
});

Route::post('/listaex15', function(Request $request){
    $dias = intval($request->input('dias'));

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    return view('lista.ex15', compact('dias', 'horas', 'minutos', 'segundos'));
});