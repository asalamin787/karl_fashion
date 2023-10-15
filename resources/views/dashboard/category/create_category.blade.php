@extends('dashboard.layouts.app')
@section('content')
    <!-- Repeater Items -->
    <div class="items" data-group="test">
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold text-uppercase"> Add Catigory</h3>
                <!-- Repeater Content -->
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                   
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                   
                    <div class="item-content">
                        <div class="mb-3">
                            <label for="inputName1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName1" placeholder="Name" data-name="name"
                                name="name">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="inputslug1" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="inputslug1" placeholder="Slug" data-name="Slug"
                                name="slug">
                        </div> --}}
                    </div>
                    <!-- Repeater Remove Btn -->
                    <div class="repeater-remove-btn">
                        <input type="submit" class="btn btn-success">
                        <a href="" class="btn btn-danger">Cancle</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
