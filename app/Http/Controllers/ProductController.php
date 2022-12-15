<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function view(){
        return view('products');
    }

    public function view_insert(){
        return view('insert');
    }
    public function insert(Request $request){
        $validateData = $request->validate([
            'productName' =>  'required|min:5|max:50',
            'productDes' => 'required',
            'qty' => 'required|integer|min:1|max:100',
            'image' =>  'required|mimes:jpg,png,jpeg',
            'price' => 'required|integer|min:1|max:100'
        ]);

        $file = $request->file('image');
        $filename = "product/".time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAS('/public/',$file,$filename);
        $validateData['image'] = $filename;
        Product::create($validateData);
        return redirect('/');
    }
}
