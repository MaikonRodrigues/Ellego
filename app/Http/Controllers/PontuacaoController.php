<?php

namespace Ellego\Http\Controllers;

use Ellego\Pontuacao;
use Illuminate\Http\Request;
use DB;
use Auth;
class PontuacaoController extends Controller
{

    public function checaQuestionarioVetor1(Request $request){
        $id = Auth::id();
        $user = \Ellego\User::where('id', '=', $id)->first();
        $erros = array();
        $parametros_pontos = 0;

        if($user->flag_vetor > 6){
            return redirect('/curso/programacao/vetores/parte-3');
        }
        if($request->optradio1 == 'c') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 1");
        if($request->optradio2 == 'b') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 2");

        if($request->optradio3 == 'a') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 3");

        if($request->optradio4 == 'c') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 4");

        if($request->optradio5 == 'd') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 5");

        $user->save();

        return view('student.mens-meio', compact('erros', 'parametros_pontos'));
    }

    public function checaQuestionarioVetor2(Request $request){
        $id = Auth::id();
        $user = \Ellego\User::where('id', '=', $id)->first();
        $erros = array();
        $parametros_pontos = 0;
        
        if($user->flag_vetor > 6){
            return redirect('/curso/programacao/');
        }

        if($request->optradio1 == 'b') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 1");

        if($request->optradio2 == 'a') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 2");

        if($request->optradio3 == 'b') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 3");

        if($request->optradio4 == 'a') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 4");

        if($request->optradio5 == 'b') {
            $user->pontuacao++;
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 5");

        $user->save();

        return view('student.mens-final',compact('erros', 'parametros_pontos'));
    }

    public function checaQuestionarioParametros1(Request $request){
        $id = Auth::id();
        $user = \Ellego\User::where('id', '=', $id)->first();
        $erros = array();
        $parametros_pontos = 0;
        if($user->flag_parametros > 3){
            return redirect('/curso/programacao/');
        }
        if($request->optradio1 == 'a') {
            $user->pontuacao++; 
            $parametros_pontos++;
        } else 
            array_push($erros, "Questão 1");
        
        if($request->optradio2 == 'e') {
            $parametros_pontos++;
            $user->pontuacao++; 
        } else 
            array_push($erros, "Questão 2");

        if($request->optradio3 == 'c') {
            $parametros_pontos++;
            $user->pontuacao++; 
        } else 
            array_push($erros, "Questão 3");

        if($request->optradio4 == 'a') {
            $parametros_pontos++;
            $user->pontuacao++;
        } else 
            array_push($erros, "Questão 4");

        if($request->optradio5 == 'b') {
            $parametros_pontos++;
            $user->pontuacao++;
        } else 
            array_push($erros, "Questão 5");

        $is_saved = $user->save();
        // dd($erros);
        
            
        return view('student.mens-final',compact('erros', 'parametros_pontos'));
       
    }

    public function ranking(){
        $users = \Ellego\User::orderBy('pontuacao', 'desc')->get();
        return view('student.rank', compact('users'));
    }
}
