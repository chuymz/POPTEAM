<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NegocioController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/13_ ASPECTOS DE SEGURIDAD DE LA INFORMACION EN LA GESTION DE LA CONTINUIDAD DEL NEGOCIO.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}