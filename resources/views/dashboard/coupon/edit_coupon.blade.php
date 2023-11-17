@extends('dashboard.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('coupons.update', $coupon) }}" method="post" class="needs-validation" novalidate>

                @csrf
                @method('put')
                <div class="mb-3">
                    <h4>Coupon Edit</h4>
                </div>

                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="validationCustom01">Code</label>
                        <input type="number" class="form-control" id="validationCustom01" placeholder="Code" value="{{$coupon->code}}"
                            required name="code">

                        <div class="valid-feedback"></div>
                    </div>
                    
                    <div class="col-4 mb-3">
                        <label for="validationCustom02">Discount</label>
                        <input type="number" class="form-control" id="validationCustom02" placeholder="Discount"
                        value="{{$coupon->discount}}" required name="discount">

                        <div class="valid-feedback"></div>
                    </div>
                    
                    <div class="col-4 mb-3">
                        <label for="validationCustomUsername">Expire Date</label>
                        <input type="date" class="form-control" id="validationCustomUsername" placeholder="Expire Date"
                            aria-describedby="inputGroupPrepend" required name="expire_at" value="{{$coupon->expire_at}}">
                        <div class="invalid-feedback">
                            Please choose a Expire Date.
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="validationCustom03">Limit</label>
                        <input type="number" class="form-control" id="validationCustom03" placeholder="City" required
                            name="limit" value="{{$coupon->limit}}">
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                   
                    <div class="col-4 mb-3">
                        <label for="validationCustom04">Minimum Cart</label>
                        <input type="number" class="form-control" id="validationCustom04" placeholder="Minimum Cart"
                            required name="minimum_cart" value="{{$coupon->minimum_cart}}">
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    
                    <div class="col-4 mb-3">
                        <label for="validationCustom05">Used</label>
                        <input type="number" class="form-control" id="validationCustom05" placeholder="Used" required
                            name="used" value="{{$coupon->used}}">
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <input type="submit" class="btn btn-primary">
                    <a href="{{route('coupons.index')}}"class="btn btn-danger">Cancle</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
