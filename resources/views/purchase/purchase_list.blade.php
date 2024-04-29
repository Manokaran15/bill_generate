@extends('master')
@section('title', 'Purchase Lists')

@section('main_section')
<div class="container">
    <div class="text-center">
        <h3>Purchase Lists</h3>
    </div>
    <div class="text-end">
        <a href="/" class="btn btn-warning rounded">Goto Home</a>
    </div>

    <div class="table table-responsive fixTableHead first_content">
        <table id="purchase_example" class="table table-borderless">
            <thead>
                <tr>
                    <th class="ps-3 pe-0 align-middle">Email</th>
                    <th class="ps-3 pe-0 align-middle">Without Tax Amount</th>
                    <th class="ps-0 pe-0 align-middle">Tax Amount</th>
                    <th class="ps-0 pe-0 align-middle">Total Amount</th>
                    <th class="ps-0 pe-0 align-middle">Customer Paid Amount</th>
                    <th class="ps-0 pe-0 align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($results)
                @foreach ($results as $result)
                    <tr>
                        <td class="ps-3 pe-0 align-middle">{{ $result['email'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['without_tax_amount'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['tax_amount'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['total_purchase_amount'] }}</td>
                        <td class="ps-3 pe-0 align-middle">{{ $result['customer_paid_amount'] }}</td>
                        <td class="ps-3 pe-0 align-middle">
                            <div>
                                <a href="/view-purchase/{{ $result['id'] }}" class="btn btn-primary">View</a>
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
