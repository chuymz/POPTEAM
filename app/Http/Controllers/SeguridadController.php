<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguridadController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/09_ SEGURIDAD EN LAS TELECOMUNICACIONES.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
