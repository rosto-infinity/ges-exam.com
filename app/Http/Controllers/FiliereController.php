<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index(){
        return 'Listes des filières';
    }
    public function create(){
        return 'Formulaire filières';
    }
}