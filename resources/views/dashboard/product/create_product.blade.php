@extends('dashboard.layouts.app')
@section('content')

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Product Create Form</h5>
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="input35" class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input35" placeholder="Product Name" name="name">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input36" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input36" placeholder="Price" name="price">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input37" class="col-sm-3 col-form-label">Sale Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input37" placeholder="Sale Price"
                            name="sale_price">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input37" class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input37" placeholder="Quantity" name="quantity">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input39" class="col-sm-3 col-form-label">Product Category</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="category_id">
                            <option selected value="">Open this select menu</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input38" class="col-sm-3 col-form-label">Poduct Image</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="input38" placeholder="Poduct Image" name="image">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input23" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="input23" placeholder="Description ..." rows="3" name="description"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="input41">
                            <label class="form-check-label" for="input41">Check me out</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <input type="submit" class="btn btn-primary px-4">
                            <a href="{{route('products.index')}}" class="btn btn-light px-4">Close</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
