<?php

namespace Ellego\Http\Controllers;

use Ellego\Course;
use Illuminate\Http\Request;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = ['Portugues','Matematica','Fisíca','Ciências da Computação'];  
        return view('course.index', compact('categorias'));
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
        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'course_id'       => 'required',
        ]);
        $name        = $request->input('name');
        $categoria   = $request->input('categoria');
        $description = $request->input('description');
        $image       = $request->file('image');
        $title       = ImageController::upload($image, 'courses', $name);

        $course = new Course();
        $course->name        = $name;
        $course->categoria   = $categoria;
        $course->description = $description;
        $course->image       = $title;
        
        $saved_course = $course->save();

        if(!$saved_course){
            App::abort(500, 'Error');
        }

        return view('teacher.dashboard')->with('message', 'It works');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Course::find($id);
        return view('course.show', compact('curso'));
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

    static public function flagIncrementVetor($flag_atual)
    {
        $id = Auth::id();
        $user = \Ellego\User::where('id', '=', $id)->first();
        if($flag_atual > $user->flag_vetor){
            $user->flag_vetor+=1;
            $user->save();
        }

    }

    static public function flagIncrementParametro($flag_atual)
    {
        $id = Auth::id();
        $user = \Ellego\User::where('id', '=', $id)->first();
        if($flag_atual > $user->flag_parametro){
            $user->flag_parametro+=1;
            $user->save();
        }
    }
}
