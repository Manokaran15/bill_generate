@extends('master')
@section('title', 'Product Lists')

@section('main_section')
<div class="container">
    <div class="text-center">
        <h3>Product Lists</h3>
    </div>
    <div class="d-flex justify-content-between align-items-center mx-auto pb-3">
        <div>
            <button class="btn btn-primary"><a href="/purchase-product" class="text-decoration-none text-white">Purchase Product</a></button>
            <button class="btn btn-primary"><a href="/purchase-list" class="text-decoration-none text-white">View Purchase</a></button>
        </div>
        <div>
            <button class="btn btn-warning"><a href="/add-product" class="text-decoration-none text-dark">Add Product</a></button>
        </div>
    </div>

    <div class="table table-responsive fixTableHead first_content">
        <table id="example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Product ID</th>
                    <th class="ps-3 pe-0 align-middle">Product Name</th>
                    <th class="ps-0 pe-0 align-middle">Available Stocks</th>
                    <th class="ps-0 pe-0 align-middle">Price</th>
                    <th class="ps-0 pe-0 align-middle">Tax</th>
                    <th class="ps-0 pe-0 align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($results)
                @foreach ($results as $result)
                    <tr>
                        <td class="ps-3 pe-0 align-middle">{{ $result['product_id'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['product_name'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['available_stocks'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['product_price'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['tax_percentage'] }}</td>
                        <td class="ps-3 pe-0 align-middle">
                            <div>
                                <a href="/edit-product/{{ $result['id'] }}" class="btn btn-primary">Edit</a>
                                <a href="/delete-product/{{ $result['id'] }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
