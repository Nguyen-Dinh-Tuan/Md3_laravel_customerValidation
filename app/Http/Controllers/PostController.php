<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function create()
    {
        return view('create');
    }
    function store(Request $request)
    {
      $validateData = $request->validate([
          'number' => 'required|numeric'
      ]);
      echo 'da xac thuc thanh cong ';
    }

}
