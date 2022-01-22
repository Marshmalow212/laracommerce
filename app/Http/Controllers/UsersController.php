<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());
        var_dump($request->hasFile('picture'));
        echo ($request->file('picture')->getClientOriginalName()).'<br>';
        echo ($request->file('picture')->getClientOriginalExtension()).'<br>';
//        echo ($request->file('picture')->getContent());
        echo ($request->file('picture')->getPath()).'<br>';
        echo "</pre>";
        $file = $request->file('picture')->getContent();
        $path = $request->file('picture')->storeAs('assets','testfile.jpg');
        echo $path;
        return ;
    }
}
