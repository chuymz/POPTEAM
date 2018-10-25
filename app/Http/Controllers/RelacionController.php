<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/11_RELACION CON PROVEEDORES.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}