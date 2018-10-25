<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CifradoController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/06_CIFRADO.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}