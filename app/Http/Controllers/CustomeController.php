<?php

namespace App\Controllers\Admin;
use Session;
use Illuminate\Support\Facades\DB;
use PDF;

class CustomerController extends Controller
{
	public function fun_pdf()
	//
		$pdf = PDF::loadView('index');
		return pdf->downoald('index.pdf');
}

