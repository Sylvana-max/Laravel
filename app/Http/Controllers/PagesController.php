<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        $names = ['Nana','Ama', 'Mensah', 'Biachaella'];
        return view('about', [
            'names' => $names
        ]);
    }
}
