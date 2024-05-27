@extends('layouts.app')

@section('content')
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <div class="page-header">
            <h1>List of Products</h1>
            <div class="float-end" style="margin-top: -50px;">
                <a data-bs-toggle="tooltip" title class="btn btn-success"
                    data-bs-original-title="Back" aria-label="Back"><i class="fas fa-reply"></i></a>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="dropdown card-header">
                    <button class="no-border-button" type="button" data-bs-toggle="dropdown"> <i
                            class="fa-solid fa-list "></i>
                        Product classification
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" asp-controller="Product" asp-action="ListProduct">All product</a>
                        </li>

                            <a class="dropdown-item" asp-for="cateId" asp-controller="Product"
                               ></a>
                    </div>
                    <div class="" style="float: right;">
                        <a href="{{route('products.create')}}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div id="order" class="card-body">
                    <form action="" id="form-order" method="">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="title-col">
                                        <td>ID</td>
                                        <td>Tên sách</td>
                                        <td>Tác giả</td>
                                        <td>Nhà xuất bản</td>
                                        <td>Hình thức bìa</td>
                                        <td>Số lượng</td>
                                        {{-- <td class="text-end">Book Price</td>
                                        <td class="text-end">Number Of Products</td>
                                        <td class="text-center">Product Photo</td>
                                        <td>Product Type</td> --}}
                                        <td>Mô tả</td>
                                        <td><span>Action</span></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($products))
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td class="text-start">{{ $product->author }}</td>
                                                <td class="text-end">{{ $product->publishing_company }}
                                                </td>
                                                <td class="text-end">{{ $product->cover_form }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>{{ $product->description_long }}</td>
                                                <td class="text-end">
                                                    <div class="btn-group dropdown">
                                                        <a class="btn" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false"></button>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <h4 class="dropdown-header">Options</h4>
                                                            </li>
                                                            <li><a class="dropdown-item"><i
                                                                        class="fas fa-edit"></i> Update</a></li>
                                                            <li><a class="dropdown-item" ><i
                                                                        class="fas fa-trash-alt"></i> Delete</a>
                                                            </li>
                                                            <li><a class="dropdown-item"><i
                                                                        class="fas fa-info-circle"></i> Detail</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">There is no product in the list</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="text-end" style="margin-right: 10px;">
                            <h4>Total Product:</span></h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/8143c9cd7e.js" crossorigin="anonymous"></script>
    <script>
        setTimeout(function () {
            var systemNotification = document.getElementById('systemNotification');
            if (systemNotification) {
                systemNotification.style.display = 'none';
            }
        }, 3000);
    </script>
@endsection
