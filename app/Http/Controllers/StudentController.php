<?php

namespace Ellego\Http\Controllers;
use Ellego\Course;
use Illuminate\Http\Request;
use DB;
use Ellego\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // busca os cursos em qeu o usuario esta cadastrado
        $cursos = DB::table('courses')
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('courses_users')
                  ->whereRaw('courses_users.course_id = courses.id');
        })
        ->get();
        //dd($cursos);
        if(!$cursos){
            App::abort(500, 'Error');
        }
        return view('student.dashboard', compact('cursos')); 
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function explore(){

        $cursos = Course::all();
        return view ('student.explore', compact('cursos'));
    }

    public function courseDescription($nome){
        
        $curso = DB::table('courses')->where('name', [$nome])->first();
        $cursos = DB::table('courses')
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('courses_users')
                  ->whereRaw('courses_users.course_id = courses.id');
        })
        ->get();
            //se a variavel cursos estiver vazia o anluno nao esta cadastrado em 0 cursos
        if($cursos == '[]'){
            $descricao = $curso->description;
            $nomeCurso = $nome;
            return view('student.coursedescription',compact('descricao'),compact('nome'));
        }   //senao verifica se ele ja esta cadastrado no curso selecionado
        else{
            foreach ($cursos as $value) {
                // se ja estiver cadastrado volta pra view dashboard
                if ($value->name == $curso->name) {
                   return view('student.dashboard',compact('cursos'));
                }
                else{
                    $descricao = $curso->description;
                    $nomeCurso = $nome;
                    return view('student.coursedescription',compact('descricao'),compact('nome'));
                }
            }
        }
        
        
    }

    public function addAluno($nome){

        $usuario = Auth::user();
        $curso = DB::table('courses')->where('name', [$nome])->first();
        
        //anexando usuario ao curso
        //$curso->users()->attach([$usuario->id]);
       $usuario->courses()->attach([$curso->id]);

        $cursos = DB::table('courses')
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('courses_users')
                  ->whereRaw('courses_users.course_id = courses.id');
        })
        ->get();
        
        return view('student.dashboard',compact('cursos'));
        
    }

    
}

