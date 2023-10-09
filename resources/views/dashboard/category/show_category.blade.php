@extends('dashboard.layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{ route('create_category') }}" class="btn btn-primary mb-3">+ Add new</a>
        <div class="customer-table">
            <div class="table-responsive white-space-nowrap">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr class=" text-center">
                            <th>
                                <input class="form-check-input" type="checkbox">
                            </th>
                            <th> Id</th>
                            <th>Categorys Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorys as $category)
                            <tr class=" text-center">
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">{{ $category->id }}</a>
                                </td>

                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>

                                <td>
                                    
                                    <a href="{{ route('edit_category', $category) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('ctegory_destroy', $category)}}" class="btn btn-sm btn-danger"><i
                                            class="la la-trash-o"></i>Delete</a>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 