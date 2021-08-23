<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        //Non fluent
        //DB::select(['table' => 'posts'. 'where' => ['id' =>1]])

        //Fluent
        //DB::table('posts')->where('id', 1)->get()
        $id = 2;
        $posts = DB::table('posts')->where('created_at', '>', now()->subDay())->orWhere('title', 'Dr.')->get();
        dd($posts);
        // return view('posts/index');
    }
}
