<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\BillRequest;
use App\Http\Requests\UpdateBillRequest;
use DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $results = Product::get()->toArray();
            // Session::put('contact_form', true);
            return view('product/product_list', compact('results'));
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message'=> $th,
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillRequest $request)
    {

        $product_id         = $request->product_id;
        $product_name       = $request->product_name;
        $available_stocks   = $request->available_stocks;
        $product_price      = $request->product_price;
        $tax_percentage     = $request->tax_percentage;

        $create = Product::create([
            'product_id'        => $product_id,
            'product_name'      => $product_name,
            'available_stocks'  => $available_stocks,
            'product_price'     => $product_price,
            'tax_percentage'    => $tax_percentage,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $edit_products = Product::where('id', $id)->get()->toArray();
        return view('product/product_edit', compact('edit_products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request, Product $product, $id)
    {
        $product_id         = $request->product_id;
        $product_name       = $request->product_name;
        $available_stocks   = $request->available_stocks;
        $product_price      = $request->product_price;
        $tax_percentage     = $request->tax_percentage;

        $update = Product::where('id', $id)->update([
            'product_id'        => $product_id,
            'product_name'      => $product_name,
            'available_stocks'  => $available_stocks,
            'product_price'     => $product_price,
            'tax_percentage'    => $tax_percentage,
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $delete_product = Product::where('id', $id)->delete();
        return redirect('/');
    }

    public function denominations()
    {
        $denominations = DB::table('denominations')->get()->toArray();
        return view('purchase/purchase_product', compact('denominations'));
    }
}
