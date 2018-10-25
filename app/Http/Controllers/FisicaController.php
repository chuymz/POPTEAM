<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FisicaController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/07_ SEGURIDAD FISICA.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}