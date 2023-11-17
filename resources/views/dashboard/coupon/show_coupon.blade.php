@extends('dashboard.layouts.app')
@section('content')
   
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <a href="{{ route('coupons.create') }}" class="btn btn-primary mb-3">+ Add new</a>
            <div class="customer-table">

                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr class=" text-center">
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th> Id</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Expire Date</th>
                                <th>Limit</th>
                                <th>Minimum Cart</th>
                                <th>Used</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $coupon)
                                <tr class="text-center">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $coupon->id }}</a>
                                    </td>

                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->discount }}</td>
                                    <td>{{ $coupon->expire_at }}</td>
                                    <td>{{ $coupon->limit }}</td>
                                    <td>{{ $coupon->minimum_cart }}</td>
                                    <td>{{ $coupon->used }}</td>

                                    <td class="d-flex text-center">

                                        <a href="{{ route('coupons.edit', $coupon) }}"
                                            class="btn btn-sm btn-primary me-2">Edit</a>

                                        <form action="{{ route('coupons.destroy', $coupon) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="la la-trash-o"></i>Delete</button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div>{{ $categorys->onEachSide(4)->links() }} --}}
        </div>
    </div>
@endsection
