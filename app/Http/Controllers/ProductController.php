<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
       return Product::all();
    }

    public function showAllProduct()
    {
       $dataJson = Product::all();
       $products = json_decode($dataJson);
       return view('list',compact('products'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $dataCustomer = $this->customerService->findById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
