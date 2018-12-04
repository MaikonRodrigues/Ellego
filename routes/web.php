<?php
use \Ellego\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------x''-------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'StudentController@index')
	->name('home');

Route::get('/learn', 'StudentController@index');

Route::get('/dashboard/explore', 'StudentController@explore')
	->name('explore');

Route::get('/question', 'StudentController@question')
	->name('question');

Route::get('/practice', 'StudentController@practice')
	->name('practice');

Route::get('/description/{nome}','StudentController@courseDescription')
->name('courseDescription');

Route::get('/explore/{nome}','StudentController@addAluno')
->name('explore');




/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
*/



Route::get('/teacher', 'TeacherController@index')
	->name('teacher')
	->middleware('role:teacher');

Route::get('/create', 'TeacherController@create')
	->name('create')
	->middleware('role:teacher');

Route::get('/create/course', 'CourseController@index')
	->name('createCourse')
	->middleware('role:teacher');
/*=======
Route::get('/teacher', 'TeacherController@index')->name('teacher')->middleware('role:teacher');
Route::get('/create', 'TeacherController@create')->name('create')->middleware('role:teacher');
Route::get('/create/course', 'CourseController@index')->name('createCourse')->middleware('role:teacher');
Route::get('/teacher/explore','TeacherController@explore')->name('explore')->middleware('role:teacher') ;
>>>>>>> 067f192bf0d6331421693fb1890b81b378d3ebd5
 */
Route::get('/teacher/explore','TeacherController@explore')
	->name('explore')
	->middleware('role:teacher');

Route::get('/create/course', 'CourseController@index')
	->name('createCourse')
	->middleware('role:teacher');


Route::post('/course/store', 'CourseController@store')
	->middleware('role:teacher');
Route::get('/course/show/{id}', 'CourseController@show')
	->middleware('role:teacher');



Route::get('/c1', function(){
	return view('student.c1');
});

// rotas para testes
Route::get('/insert','ExercicieController@oneToMany')
	->name('oneTo}Many');


/*
|--------------------------------------------------------------------------
| Cursos Routes
|--------------------------------------------------------------------------
*/

Route::get('/curso/programacao', function(){
	return view('student.curso-programacao');
});



// vetores
Route::get('/curso/programacao/vetores', function(){
	CourseController::flagIncrementVetor(1);
	return view('student.curso-vetores');
});

// Route::get('/curso/programacao/vetores/p1', function(){
// 	CourseController::flagIncrementVetor(2);
// 	return view('student.vet-p1');
// });

Route::get('/curso/programacao/vetores/parte-2', function(){
	CourseController::flagIncrementVetor(2);
	return view('student.vet-p2');
});

Route::get('/curso/programacao/vetores/parte-3', function(){
	CourseController::flagIncrementVetor(3);
	return view('student.vet-p3');
});

Route::get('/curso/programacao/vetores/parte-4', function(){
	CourseController::flagIncrementVetor(4);
	return view('student.vet-p4');
});

Route::get('/curso/programacao/vetores/parte-5', function(){
		$id = Auth::id();
		$user = \Ellego\User::where('id', '=', $id)->first();
		// dd($user->flag_vetor);
        if($user->flag_vetor > 3){
            return redirect('/curso/programacao/vetores/parte-3');
        }
	CourseController::flagIncrementVetor(5);
	return view('student.vet-p5');
});

Route::get('/curso/programacao/vetores/parte-6', function(){
	$id = Auth::id();
		$user = \Ellego\User::where('id', '=', $id)->first();
		// dd($user->flag_vetor);
        if($user->flag_vetor > 5){
            return redirect('/curso/programacao/');
        }
	CourseController::flagIncrementVetor(6);
	return view('student.vet-p6');
});

Route::post('/curso/programacao/vetores/quest-1', 'PontuacaoController@checaQuestionarioVetor1');
Route::post('/curso/programacao/vetores/quest-2', 'PontuacaoController@checaQuestionarioVetor2');

Route::get('/curso/programacao/mens-final/{[erros]}',function($erros){
	dd($erros);
	return view('student/mens-final',compact('erros'));
});

Route::get('/curso/programacao/vetores/mens-meio', function(){
	return view('');
});



Route::post('/curso/programacao/parametros/quest-1', 'PontuacaoController@checaQuestionarioParametros1');


// parametros
//essa eh a parte 1
Route::get('/curso/programacao/parametros', function(){
	CourseController::flagIncrementParametro(1);
	return view('student.curso-parametro');
});
//
//agora parte 2
Route::get('/curso/programacao/parametros/parte-2', function(){
	CourseController::flagIncrementParametro(2);
	return view('student.par-p2');
});

Route::get('/curso/programacao/parametros/parte-2-1', function(){
	return view('student.par-p2-1');
});

Route::get('/curso/programacao/parametros/parte-3', function(){
		$id = Auth::id();
		$user = \Ellego\User::where('id', '=', $id)->first();
        if($user->flag_parametro > 2){
            return redirect('/curso/programacao/');
        }
	CourseController::flagIncrementParametro(3);
	return view('student.par-p3');
});

Route::get('/curso/programacao/rank', 'PontuacaoController@ranking');


