<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlController extends Controller
{
    public function index() {
        $file = '../storage/app/iso/05_CONTROL DE ACCESOS.pdf';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
