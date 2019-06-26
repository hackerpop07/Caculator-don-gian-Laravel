<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function caculator(Request $request)
    {
        $numberA = $request->numberA;
        $numberB = $request->numberB;
        $kq = null;
        if (!empty($request->addition)) {
            $kq = $numberA + $numberB;
        }
        if (!empty($request->subtraction)) {
            $kq = $numberA - $numberB;
        }
        if (!empty($request->multiplication)) {
            $kq = $numberA * $numberB;
        }
        if (!empty($request->division) && $numberB != 0) {
            $kq = $numberA / $numberB;
        }
        return view("index", compact("kq"));
    }
}
