@extends('dashboard.layouts.app')
@section('content')
    <!-- Repeater Items -->
    <div class="items" data-group="test">
        <h3 class="fw-bold text-uppercase">Catigory Add</h3>
        <div class="card">
            <div class="card-body">
                <!-- Repeater Content -->
                <form action="{{route('categories.update', $category)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="item-content">
                        <div class="mb-3">
                            <label for="inputName1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName1" placeholder="Name" data-name="name"
                                name="name" value="{{$category->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="inputslug1" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="inputslug1" placeholder="Slug" data-name="Slug"
                                name="slug" value="{{$category->slug}}">
                        </div>
                    </div>
                    <!-- Repeater Remove Btn -->
                    <div class="repeater-remove-btn">
                        <input type="submit" class="btn btn-success">
                        <a href="{{route('categories.index')}}" class="btn btn-danger">Cancle</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
