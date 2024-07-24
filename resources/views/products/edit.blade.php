@extends('layout')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Fill Details</li>
                        </ol>
                    <div class="card">
                        <h1> Edit Product </h1>
                        <form action="{{ route('products.update', $product->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div>
                                <label>Name:</label>
                                <input type="text" name="name" value="{{$product->name}}">
                    </div>
                    <div>
                        <label>Description:</label>
                        <textarea name="description">{{ $product->description}}</textarea>
                    </div>
                    <div>
                        <label>Price:</label>
                        <input type="text" name="price" value="{{$product->price}}">
                    </div>
                    <button type="sumbit">Update</button>
                </form>
                </div>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection
