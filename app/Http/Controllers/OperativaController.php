<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperativaController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/08_SEGURIDAD OPERATIVA.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}