@extends('dashboard.layouts.app')
@section('content')
    
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Add new</a>
            <div class="customer-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr class=" text-center">
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th> Id</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                {{-- @dd($product); --}}
                                <tr class=" text-center">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $product->id }}</a>
                                    </td>

                                    <td>
                                        <a class="d-flex align-items-center gap-3" href="javascript:;">
                                            <div class="customer-pic">
                                                <img src="{{ Storage::url($product->image) }}" class="rounded-circle"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <p class="mb-0 customer-name fw-bold">{{ $product->name }}</p>
                                        </a>
                                    </td>
                                    <td>{{ $product->category ? $product->category->name : '' }}</td>

                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $product->price }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $product->sale_price }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->quantity }}</td>

                                    <td class="d-flex">
                                        <a href="" class="btn btn-success me-2">View</a>
                                        <a href="{{ route('products.edit', $product) }}"
                                            class="btn btn-primary me-2">Edit</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                           
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>{{ $products->onEachSide(4)->links() }}
        </div>
    </div>
@endsection
