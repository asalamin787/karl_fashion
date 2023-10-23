@extends('dashboard.layouts.app')
@section('content')
   
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">+ Add new</a>
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
                                <tr class="text-center">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $category->id }}</a>
                                    </td>

                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>

                                    <td class="d-flex text-center">

                                        <a href="{{ route('categories.edit', $category) }}"
                                            class="btn btn-primary me-2">Edit</a>

                                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="la la-trash-o"></i>Delete</button>
                                        </form>


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
