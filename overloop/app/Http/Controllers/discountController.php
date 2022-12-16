<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ViewDiscount;
use PDF;


class discountController extends Controller
{
    //
    public function index()
    {  
        $discount = ViewDiscount::all();
        return view('admin.discount.index', ['title' => 'discount'],compact('discount'));
    }

    public function print_pdf()
    {
    	$discount = ViewDiscount::all();
 
    	$pdf = PDF::loadView('admin.discount.print_pdf',compact('discount'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('discount-pdf.pdf');
    }
}
