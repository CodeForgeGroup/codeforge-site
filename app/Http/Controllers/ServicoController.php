<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){
        return view('site.servico');
    }
}
