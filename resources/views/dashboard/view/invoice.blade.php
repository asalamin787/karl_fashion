@extends('dashboard.view.layouts.main')
@section('main')
    <div class="card">
        <div class="card-body">
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">User <strong>ID: #{{ Auth::User()->id }}</strong></p>
                    </div>
                    <div class="col-xl-3 float-end">
                        <button onclick="printDiv('printarea')" class="btn btn-success ">Print Now</button>
                        {{-- <a href="{{ route('view_admissions') }}" class="btn btn-primary">Cencel</a> --}}
                        <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                                class="far fa-file-pdf text-danger"></i> Export</a>
                    </div>
                    <hr>
                </div>

                <div class="container" id="printarea">
                    {{-- <div class="col-md-12">
                        <div class="text-center">
                            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                            <p class="pt-0">MDBootstrap.com</p>
                        </div>

                    </div> --}}

                    <div class="row">
                        <div class="col-xl-8">
                            <ul class="list-unstyled">
                                <li class="text-muted">To: <span style="color:#5d9fc5 ;">{{ $order->name }}</span>
                                </li>
                                <li class="text-muted">{{ $order->city }}</li>
                                <li class="text-muted">{{ $order->address }}</li>
                                <li class="text-muted"><i class="fas fa-phone"></i> {{ $order->phone }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-4">
                            <p class="text-muted">Invoice</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>#{{ $order->id }}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">Creation Date: </span>{{ $order->created_at }}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="me-1 fw-bold">Status:</span><span
                                        class="badge bg-warning text-black fw-bold">
                                        {{ $order->status }}</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row my-2 mx-1 justify-content-center">
                        <table class="table table-striped table-borderless">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Quantity</th>
                                    {{-- <th scope="col">Unit Price</th>
                                    <th scope="col">Amount</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $order->product ? $order->product->name : '' }}</td>
                                    <td>${{ $order->product ? $order->product->price : '' }}</td>
                                    <td>
                                        <img width="40px" height="40px"
                                            src="{{ Storage::url($order->product ? $order->product->image : '') }}"
                                            alt="">
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="ms-3">Add additional notes and payment information</p>

                        </div>
                        <div class="col-xl-3">
                            <ul class="list-unstyled">
                                <li class="text-muted ms-3"><span
                                        class="text-black me-4">SubTotal</span>${{ $order->subtotal }}</li>
                                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>$</li>
                            </ul>
                            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                                    style="font-size: 25px;">${{ $order->total }}</span></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-10">
                            <p>Thank you for your purchase</p>
                        </div>
                        <div class="col-xl-2">
                            <button type="button" class="btn btn-primary text-capitalize"
                                style="background-color:#60bdf3 ;">Pay Now</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function printDiv(divName) {
            // console.log(divName)
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
