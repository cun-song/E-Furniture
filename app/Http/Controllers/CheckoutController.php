<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class CheckoutController extends Controller
{
    public function view(Request $request){
        $product = product::find($request->name);
        return view('checkout', ['product'=>$product]);
    }
}
