@extends('layouts.app')


@section('content')
    @session('success')
        <div class="alert alert-success" role="alert">
            {{ $value }}
        </div>
    @endsession

    @if ($errors->any())
        <div class="alert alert-danger">Thông tin không hợp lệ, Vui lòng nhập lại.</div>
    @endif


    <style>
    .page-header {
        margin-top: 20px;
    }

    .page-header h1 {
        margin-left: 15px;
    }

    .form-label {
        margin: 0;
    }

    label {
        font-weight: 500;
    }

    .text-danger {
        color: red;
        font-size: 14px;
        font-style: italic;
    }
    .card-body {
    border: 1px solid rgb(208, 198, 198);
    border-radius: 10px;
    }

    .btn-custom {
    padding: 10px 20px;
    font-size: 0.9rem;
    line-height: 1;
    text-align: left;
    display: inline-block;
    white-space: nowrap;
    }

    </style>
    <div class="container">
        <div class="page-header">
            <h1>Edit category book</h1>
            <div class="float-end" style="margin-top: -50px;">
                <a href="{{ route('categories.index') }}" data-bs-toggle="tooltip" title
                    class="btn btn-success" data-bs-original-title="Back" aria-label="Back"><i
                        class="fas fa-reply"></i></a>
            </div>
        </div>
        <section id="product_part" class="main">
            <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                <form action="{{ route('categories.update', $category->id)}}" method="post" style="margin: 10px;" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                        <div class="form-group">
                            <label class="form-label">Tên loại sách: </label>
                            <input type="text" name="name" class="form-control large-input @error('name') is-invalid @enderror" id="name" name="name" value="{{$category->name}}">
                            @error('name')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label class="form-label">Mô tả: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{$category->description}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button-container text-end mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>


    <script src="https://kit.fontawesome.com/8143c9cd7e.js" crossorigin="anonymous"></script>
@endsection
