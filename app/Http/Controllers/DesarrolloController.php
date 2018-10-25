<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesarrolloController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/10_ ADQUISICION, DESARROLLO Y MANTENIMIENTO DE LOS SISTEMAS DE INFORMACION.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}