<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class TestController extends Controller
{
    public function index(): Response
    {
        return response()->view('codelex');
    }
}
