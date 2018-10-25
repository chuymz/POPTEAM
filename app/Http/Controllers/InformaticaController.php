<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformaticaController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/12_GESTION DE INCIDENTES EN LA SEGURIDAD DE LA INFORMACION.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}