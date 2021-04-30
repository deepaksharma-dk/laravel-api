<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductContoller extends Controller
{
    public function autoComplete(Request $request) 
    {
        if(!$request->query('term') || strlen($request->query('term')) < 3) {
            return [];
        } 
        
        return response()->json(Product::select(['id', 'title'])->where('title', 'like', '%'.$request->query('term').'%')->get());
    }
}
