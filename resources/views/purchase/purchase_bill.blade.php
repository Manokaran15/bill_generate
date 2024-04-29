@extends('master')
@section('title', 'Purchase Product')

@section('main_section')
<div class="container">
    <div class="text-center">
        <h3>Billing Page</h3>
    </div>
    <div class="card-body p-4 row">
        <div class="col-12">
            <div class="row">
                <div class="col-10 my-2 pb-2">
                    <p class="customer_email"><span class="pe-2 fw-bold">Customer Email:</span>{{ $value->email }}</p>
                </div>
                <div class="table table-responsive fixTableHead first_content">
                    <p class="bill_section fw-bold">Bill Section:</p>
                    <table id="bill_example" class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="ps-3 pe-0 align-middle">Product ID</th>
                                <th class="ps-3 pe-0 align-middle">Unit Price</th>
                                <th class="ps-0 pe-0 align-middle">Quantity</th>
                                <th class="ps-0 pe-0 align-middle">Purchase Price</th>
                                <th class="ps-0 pe-0 align-middle">Tax % for Item</th>
                                <th class="ps-0 pe-0 align-middle">Tax Payable for Item</th>
                                <th class="ps-0 pe-0 align-middle">Total Price of The Item</th>
                            </tr>
                        </thead>
                        <tbody class="bill_table_body">
                            @isset($responses)
                            @foreach ($responses as $response)
                            <tr>
                                <td class="ps-3 pe-0 align-middle">{{ $response->product_id }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->unit_price }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->quantity }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->purchase_price }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->unit_tax }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->payable_tax }}</td>
                                <td class="ps-3 pe-0 align-middle">{{ $response->total_price }}</td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
                <div class="text-end my-2 pb-2">
                    <p class="pe-2 fw-bold">Total price without tax: {{ $value->without_tax_amount }}</p>
                    <p class="pe-2 fw-bold">Total tax payable: {{ $value->tax_amount }}</p>
                    <p class="pe-2 fw-bold">Net price of the purchased item: {{ $value->total_purchase_amount }}</p>
                    <p class="pe-2 fw-bold">Rounded down value of the purchased items net price: {{ round($value->total_purchase_amount) }}</p>
                    <p class="pe-2 fw-bold">Balance payable to the customer: {{ round($value->balance_paid_amount) }}</p>
                </div>
                <hr>
                <div class="text-end">
                    <p>Balance Denomination</p>
                    <div class="balance_denomination">
                        @isset($results)
                        @foreach ($results as $key => $result)
                        <p>{{ $key }}: {{ $result }}</p>
                        @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
