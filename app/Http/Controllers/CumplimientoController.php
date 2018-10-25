<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CumplimientoController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/14_CUMPLIMIENTO.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
