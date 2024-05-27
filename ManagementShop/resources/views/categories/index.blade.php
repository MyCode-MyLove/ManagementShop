@extends('layouts.app')

@section('content')
    @session('success')
        <div class="alert alert-success" role="alert">
            {{ $value }}
        </div>
    @endsession

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="container-fluid">
            <div class="page-header">
                <h1>Category</h1>
                <div class="float-end" style="margin-top: -50px;">
                    <a  data-bs-toggle="tooltip" title class="btn btn-success" data-bs-original-title="Back" aria-label="Back">
                        <i class="fas fa-reply"></i>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> Category List
                    <div class="" style="float: right;">
                        <a href="{{route('categories.create')}}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div id="order" class="card-body">
                    <form id="form-order">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="title-col">
                                        <th class="text-center">No.</th>
                                        <th class="text-start">Category Name</th>
                                        <th class="text-start">Category Description</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($categories))
                                        @forelse($categories as $category)
                                            <tr>
                                                <td class="text-center">{{$loop->iteration }}</td>
                                                <td class="text-start">{{$category->name }}</td>
                                                <td class="text-start">{{ $category->description }}</td>
                                                <td class="text-end">
                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="btn-group dropdown">
                                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"
                                                                aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item">
                                                                        <div class="submit-delete">
                                                                            <button type="submit" class="button" onclick="return confirm('Do you want to delete this product?');">
                                                                            <i class="fas fa-trash-alt"></i> </button>Delete
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">There is no category in the list</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <script>
        setTimeout(function () {
            var systemNotification = document.getElementById('systemNotification');
            if (systemNotification) {
                systemNotification.style.display = 'none';
            }
        }, 3000);
    </script>
@endsection
