<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCustomController extends Controller
{
    function checkVal(FormCustomController $request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('home' , compact('success'));

    }
}
