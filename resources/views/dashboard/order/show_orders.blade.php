@extends('dashboard.layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {{-- <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">+ Add new</a> --}}
            <h3 class="my-3">Orders Table</h3>
            <div class="customer-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr class=" text-center">
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th> Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Email</th>
                                <th>Product Name</th>
                                <th>Address</th>
                                <th>Post code</th>
                                <th>City</th>
                                <th>SubTotal</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                                {{-- @dd($product); --}}
                                <tr class=" text-center">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $order->id }}</a>
                                    </td>
                                    <td>{{ $order->name }} {{ $order->last_name }}</td>
                                    {{-- <td><img src="{{ Storage::url($order->product->image) }}" width="40" height="40"
                                            alt=""></td> --}}
                                    <td>{{ $order->email }}</td>
                                    {{-- <td>
                                        <a class="d-flex align-items-center gap-3" href="javascript:;">
                                            <div class="customer-pic">
                                                
                                            </div>
                                        </a>
                                    </td> --}}
                                    <td>{{ $order->product ? $order->product->name : '' }}</td>

                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->post_code }}</td>
                                    <td>{{ $order->city }}</td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">${{ $order->subtotal }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">${{ $order->total }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>

                                    {{-- <td class="d-flex">
                                        <a href="" class="btn btn-success me-2">View</a>
                                        <a href="{{ route('products.edit', $product) }}"
                                            class="btn btn-primary me-2">Edit</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-end">{{ $orders->onEachSide(4)->links() }}
        </div>
    </div>
@endsection
