<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivosController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/04_GESTION DE ACTIVOS.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}