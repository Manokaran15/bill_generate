@extends('master')
@section('title', 'Add Product Details')

@section('main_section')
<div class="create">
    <div class="create_content">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
                    <h2>Create a New Product</h2>
                    <a href="/" class="btn btn-warning rounded">Goto Home</a>
                </div>
            </div>
            <hr class="my-2">
            <div class="row my-3">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header bg-info">
                        <h3 class="text-dark text-center fw-bold">Add New Product</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="post" action="/add-product" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_id">Product ID:</label>
                                    <input type="text" name="product_id" id="product_id" class="form-control @error('product_id') is-invalid @enderror" placeholder="Product ID" value="{{ old('product_id') }}">
                                    @error('product_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_name">Product Name:</label>
                                    <input type="text" name="product_name" id="product_name" class="form-control @error('product_name') is-invalid @enderror" placeholder="Product Name" value="{{ old('product_name') }}">
                                    @error('product_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="available_stocks">Available Stocks:</label>
                                    <input type="text" name="available_stocks" id="available_stocks" class="form-control @error('available_stocks') is-invalid @enderror" placeholder="Available Stocks" value="{{ old('available_stocks') }}">
                                    @error('available_stocks')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="product_price">Price:</label>
                                    <input type="text" name="product_price" id="product_price" class="form-control @error('product_price') is-invalid @enderror" placeholder="Price" value="{{ old('product_price') }}">
                                    @error('product_price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-6 my-2 pb-2">
                                    <label class="fw-bold" for="tax_percentage">Tax Percentage:</label>
                                    <input type="text" name="tax_percentage" id="tax_percentage" class="form-control @error('tax_percentage') is-invalid @enderror" placeholder="Tax Percentage" value="{{ old('tax_percentage') }}">
                                    @error('tax_percentage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="my-2 text-center">
                                <input type="submit" value="Add Product" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
