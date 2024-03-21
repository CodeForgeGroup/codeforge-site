<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index(){
        return view('site.projeto');
    }
}
