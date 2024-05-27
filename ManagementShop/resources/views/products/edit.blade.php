@extends('layouts.app')


@section('content')
    @if(session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
    @endif

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
    <div class="containe">
        <div class="page-header">
            <h1>Cập nhật thông tin sách</h1>
            <div class="float-end" style="margin-top: -50px;">
                <a href="{{ route('products.index') }}" data-bs-toggle="tooltip" title
                    class="btn btn-success" data-bs-original-title="Back" aria-label="Back"><i
                        class="fas fa-reply"></i></a>
            </div>
        </div>
        <section id="product_part" class="main">
            <div class="container">
                <div class="card" style="margin-bottom: 10px;">
                <form action="{{ route('products.store') }}" method="post" style="margin: 10px;" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Tên sách: </label>
                            <input type="text" name="name" class="form-control large-input @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                            @error('name')
                                <span style="color: red;">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label class="form-label">Tác giả: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Nhà xuất bản: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Hình thức bìa: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Năm xuất bản: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Kích thước bìa: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Trọng lượng: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Số lượng sách: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Mô tả: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label">Loại sách: </label>
                            <input type="text" name="description" class="form-control large-input @error('description') is-invalid @enderror" value="{{old('description')}}">
                            @error('description')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="button-container text-end mt-2">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <script src="https://kit.fontawesome.com/8143c9cd7e.js" crossorigin="anonymous"></script>
@endsection
