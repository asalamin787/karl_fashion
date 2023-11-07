@extends('dashboard.layouts.app')
@section('content')

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Product Edit Form</h5>
            <form action="{{route('products.update', $product)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- @dd($product->all()); --}}
                <div class="row mb-3">
                    <label for="input35" class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input35" placeholder="Product Name" name="name" value="{{$product->name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input36" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input36" placeholder="Phone No" name="price" value="{{$product->price}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input37" class="col-sm-3 col-form-label">Sale Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input37" placeholder="Sale Price"
                            name="sale_price" value="{{$product->sale_price}}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="input37" class="col-sm-3 col-form-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="input37" placeholder="Quantity" name="quantity" value="{{$product->quantity}}">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="input39" class="col-sm-3 col-form-label">Product Category</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="category_id">
                            <option selected>Open this select menu</option>
                            @foreach ($categorys as $category)
                            <option @if($product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="input23" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="input23" placeholder="Description ..." rows="3" name="description" value="">{{$product->description}}</textarea>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="input38" class="col-sm-3 col-form-label">Poduct Image</label>
                    <div class="col-sm-9">
                        <img class="mb-2" src="{{ Storage::url($product->image) }}" alt="" height="100px" width="100px">
                        <input type="file" class="form-control" id="input38" placeholder="Poduct Image" name="image" value="{{$product->image}}">
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
                            <button type="button" class="btn btn-light px-4">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
