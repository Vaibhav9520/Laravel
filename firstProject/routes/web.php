<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/array', function () {
    $name = 'Vaibhav';
    return view('user', ['name'=>$name]);
});


Route::get('/erp', function () {
    $x = 10;
    $y = 20;
    return view('user', compact('x', 'y'));
});

Route::get('/home2', function () {
    return '<h1 style="color:red">Hello Vaibhav</h1>';
});

Route::get('/home3', function () {
    return '<script>alert("Hello Vaibhav")</script>';
});

Route::get('/home4', function () {
    return '<ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>';
});
Route::get('/home5', function () {
    return '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
                <tr>
                    <th>Name</th>
                    <th>City</th>  
                </tr>
                <tr>
                    <td>Vaibhav</td>
                    <td>Aligarh</td>  
                </tr>
            </table>';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/welcome2', 'welcome');

//Routing parameter required
Route::get('/pera/{data?}', function ($data=null) {
    return "User Id is: ".$data;
});

Route::get('/jsonForm',function(){
    return response()->json(['name'=>'Vaibhav','city'=>'Aligarh']);
});

Route::get('/jsonUser',function(){
    return response("Header Set",207)
    ->header('Content-Type','text/plain')
    ->header('Custom-header','data');
});

Route::get("set",function(){
    return response("cookie set")->cookie('name','Vaibhav',10);
});

Route::get("program/engineering/b-tech-me-CSE",function(){
    return "Welcome to B-Tech CSE";
})->name('btech');

Route::get("course",function(){
    return redirect()->route('btech');
});

Route::get('program/engineering/b-tech-me-CSE/about', function () {
    return view('about');
})->name('about');

Route::get('program/engineering/b-tech-me-CSE/user', function () {
    return view('user');
})->name('user');


//Controller
Route::get('/myMessage',[MyController::class,'showMessage']);
Route::get('/displayName',[MyController::class,'displayName']);
Route::get('/displayJs',[MyController::class,'displayJs']);

Route::get('/index',[MyController::class,'index']);
Route::get('/create',[MyController::class,'create']);
Route::get('/edit/{id}',[MyController::class,'edit']);
Route::get('/update',[MyController::class,'update']);

// Route::resourse('profile',MyController::class);
Route::get('evenOdd', function(){
    return view('home');
});

Route::get('/showdata',[MyController::class,'showdata']);
