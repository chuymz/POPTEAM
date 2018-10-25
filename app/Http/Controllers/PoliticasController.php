<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticasController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/01_ POLITICAS DE SEGURIDAD.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}