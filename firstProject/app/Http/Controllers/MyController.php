<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showMessage()
    {
        return "Hello World";
    }

    public function displayName(){
        $Firstname = 'Vaibhav';
        $Lastname = 'Singh';
        return ("<h1 style = 'color: skyblue'>$Firstname $Lastname</h1>");
    }

    public function displayJs(){
        return ("<script>alert('Hello Vaibhav')</script>");
    }

    public function index(){
        return "Index Page";
    }

    public function create(){
        return "Create Page";
    }

    public function edit(){
        return "Edit Page";
    }

    public function update(){
        return "Update Page";
    }

    public function showdata(){
        return view('show',['name' => 'Vaibhav']);
    }
}
