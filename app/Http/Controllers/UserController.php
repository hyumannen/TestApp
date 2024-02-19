<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }
    
    // public function show($id){
    //     return $id;
    // }
    
    public function show($id){

        $data = array(
            "id" => $id,
            "name" => "Kristine",
        );
        return view('About_Me', ['data' => $data]);
    }   
    
}
