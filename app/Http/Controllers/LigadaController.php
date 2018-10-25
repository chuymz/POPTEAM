<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LigadaController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/03_SEGURIDAD LIGADA A LOS RECURSOS HUMANOS.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
