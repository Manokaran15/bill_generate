@extends('master')
@section('title', 'Purchase Lists')

@section('main_section')
<div class="container">
    <div class="text-center">
        <h3>Purchase Lists</h3>
    </div>
    <div class="text-end">
        <a href="/purchase-list" class="btn btn-warning rounded">Go Back</a>
    </div>

    <div class="table table-responsive fixTableHead first_content">
        <table id="purchase_view_example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Product ID</th>
                    <th class="ps-3 pe-0 align-middle">Quantity</th>
                    <th class="ps-0 pe-0 align-middle">Unit Price</th>
                    <th class="ps-0 pe-0 align-middle">Purchase Price</th>
                    <th class="ps-0 pe-0 align-middle">Unit Tax</th>
                    <th class="ps-0 pe-0 align-middle">Payable Tax</th>
                    <th class="ps-0 pe-0 align-middle">Total Price</th>
                </tr>
            </thead>
            <tbody>
                @isset($results)
                @foreach ($results as $result)
                    <tr>
                        <td class="ps-3 pe-0 align-middle">{{ $result->product_id }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->quantity }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->unit_price }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->purchase_price }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->unit_tax }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->payable_tax }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result->total_price }}</td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
