<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use App\Mail\SendEmail;
use Mail;

class PurchaseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = PurchaseDetail::latest()->first();

        $responses = DB::table('product_purchases')->where('purchase_detail_id', $value->id)->get();

        $amount_remaining = $value->balance_paid_amount;

        $available_denominations = DB::table('denominations')->get();

        $denominations = [];
        if($available_denominations[0]->number_of_500) { $denominations[] = 500; }
        if($available_denominations[0]->number_of_50) { $denominations[] = 50; }
        if($available_denominations[0]->number_of_20) { $denominations[] = 20; }
        if($available_denominations[0]->number_of_10) { $denominations[] = 10; }
        if($available_denominations[0]->number_of_5) { $denominations[] = 5; }
        if($available_denominations[0]->number_of_2) { $denominations[] = 2; }
        if($available_denominations[0]->number_of_1) { $denominations[] = 1; }

        $results = [];
        $remaining_amount = round($amount_remaining);

        foreach ($denominations as $denomination) {
            if ($remaining_amount >= $denomination) {
                $count = intdiv($remaining_amount, $denomination);
                $results[$denomination] = $count;
                $remaining_amount -= $count * $denomination;
            }
        }
        $denominations_response = DB::table('denominations')->get();

        if(isset($result[500])) {
            $end_count_500 = $denominations_response[0]->number_of_500 - $result[500];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_500' => $end_count_500]);
        }
        if(isset($result[50])) {
            $end_count_50 = $denominations_response[0]->number_of_50 - $result[50];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_50' => $end_count_50]);
        }
        if(isset($result[20])) {
            $end_count_20 = $denominations_response[0]->number_of_20 - $result[20];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_20' => $end_count_20]);
        }
        if(isset($result[10])) {
            $end_count_10 = $denominations_response[0]->number_of_10 - $result[10];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_10' => $end_count_10]);
        }
        if(isset($result[5])) {
            $end_count_5 = $denominations_response[0]->number_of_5 - $result[5];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_5' => $end_count_5]);
        }
        if(isset($result[2])) {
            $end_count_2 = $denominations_response[0]->number_of_2 - $result[2];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_2' => $end_count_2]);
        }
        if(isset($result[1])) {
            $end_count_1 = $denominations_response[0]->number_of_1 - $result[1];
            $denomination_update = DB::table('denominations')->where('id', 1)->update(['number_of_1' => $end_count_1]);
        }

        $email = $value->email;
        Mail::to($email)->send(new SendEmail($value, $responses, $results));

        return view('purchase/purchase_bill', compact('value', 'responses', 'results'));
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
    public function store(Request $request)
    {
        $email = $request->email;
        $cash = $request->cash;
        $denomination_cash = $request->cash;
        $product_id = $request->product_id;
        $quantity = $request->quantity;

        $product_datas = [];
        $without_tax_amount = 0;
        $tax_amount = 0;
        $total_purchase_amount = 0;

        $denominations_data = DB::table('denominations')->get();

        $cash_denominations = [500, 50, 20, 10, 5, 2, 1];
        $cash_result = [];

        foreach ($cash_denominations as $cash_denomination) {
            if ($denomination_cash >= $cash_denomination) {
                $cash_count = intdiv($denomination_cash, $cash_denomination);
                $cash_result[$cash_denomination] = $cash_count;
                $denomination_cash -= $cash_count * $cash_denomination;
            }
        }

        if(isset($cash_result[500])) {
            $count_500 = $denominations_data[0]->number_of_500 + $cash_result[500];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_500' => $count_500]);
        }
        if(isset($cash_result[50])) {
            $count_50 = $denominations_data[0]->number_of_50 + $cash_result[50];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_50' => $count_50]);
        }
        if(isset($cash_result[20])) {
            $count_20 = $denominations_data[0]->number_of_20 + $cash_result[20];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_20' => $count_20]);
        }
        if(isset($cash_result[10])) {
            $count_10 = $denominations_data[0]->number_of_10 + $cash_result[10];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_10' => $count_10]);
        }
        if(isset($cash_result[5])) {
            $count_5 = $denominations_data[0]->number_of_5 + $cash_result[5];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_5' => $count_5]);
        }
        if(isset($cash_result[2])) {
            $count_2 = $denominations_data[0]->number_of_2 + $cash_result[2];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_2' => $count_2]);
        }
        if(isset($cash_result[1])) {
            $count_1 = $denominations_data[0]->number_of_1 + $cash_result[1];
            $denominations_update = DB::table('denominations')->where('id', 1)->update(['number_of_1' => $count_1]);
        }

        for ($i=0; $i < count($product_id); $i++) {
            $product = Product::where('product_id', $product_id[$i])->get()->toArray();

            $unit_price = $product[0]['product_price'];
            $unit_tax = $product[0]['tax_percentage'];
            $unit_quantity = $product[0]['available_stocks'];
            $purchase_price = $unit_price * $quantity[$i];
            $payable_tax = ($purchase_price * $product[0]['tax_percentage']) / 100;
            $total_price = $payable_tax + $purchase_price;

            $product_datas[] = ['email' => $email, 'product_id' => $product_id[$i], 'quantity' => $quantity[$i], 'unit_quantity' => $unit_quantity, 'unit_price' => $unit_price, 'unit_tax' => $unit_tax, 'purchase_price' => $purchase_price, 'payable_tax' => $payable_tax, 'total_price' => $total_price];

            $without_tax_amount += $purchase_price;
            $tax_amount += $payable_tax;
            $total_purchase_amount += $total_price;
        }

        $balance_paid_amount = $cash - $total_purchase_amount;

        $create_purchase_detail = PurchaseDetail::create([
            'email' => $email,
            'without_tax_amount' => $without_tax_amount,
            "tax_amount" => $tax_amount,
            'total_purchase_amount' => $total_purchase_amount,
            'customer_paid_amount'  => $cash,
            'balance_paid_amount'   => $balance_paid_amount
        ]);

        $purchase_detail = PurchaseDetail::where('email', $email)->latest()->first();

        foreach ($product_datas as $product_data) {
            $create_product_detail = DB::table('product_purchases')->insert([
                'purchase_detail_id'    => $purchase_detail->id,
                'product_id'            => $product_data['product_id'],
                'quantity'              => $product_data['quantity'],
                'unit_price'            => $product_data['unit_price'],
                'purchase_price'        => $product_data['purchase_price'],
                'unit_tax'              => $product_data['unit_tax'],
                'payable_tax'           => $product_data['payable_tax'],
                'total_price'           => $product_data['total_price'],
            ]);

            $new_quantity = $product_data['unit_quantity'] - $product_data['quantity'];

            $quantity_update = Product::where('product_id', $product_data['product_id'])->update([ 'available_stocks' => $new_quantity, ]);

        }
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseDetail $purchaseDetail)
    {
        $results = PurchaseDetail::get()->toArray();
        return view('purchase/purchase_list', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseDetail $purchaseDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseDetail  $purchaseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseDetail $purchaseDetail)
    {
        //
    }

    public function view(PurchaseDetail $purchaseDetail, $id)
    {
        $results = DB::table('product_purchases')->where('purchase_detail_id', $id)->get()->toArray();
        return view('purchase/purchase_view', compact('results'));
    }
}
