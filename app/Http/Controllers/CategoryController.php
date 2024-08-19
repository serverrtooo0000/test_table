<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Them;

class CategoryController extends Controller
{   

    
    public function index()
    {
        $thems = Them::all();
        return view('index',['thems' => $thems]);
    }

   
    public function show($id)
    {
        $categories = Them::findOrFail($id);
        return view('show', ['categories' => $categories]);
    }

}


