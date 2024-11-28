@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center">
        <!-- Coffees -->
        <h1 class="text-center mb-4">Coffee</h1>
        @foreach($products->where('category_id', 1) as $product) <!-- Filter for Coffee -->
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow-md border-light" style="background-color: #A5773B;" data-bs-toggle="modal" data-bs-target="#orderModal{{$product->id}}"> 
                @if($product->product_image)
                <!-- Use Storage if image is a path, otherwise Base64 -->
                @if(Str::contains($product->product_image, '/'))
                    <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
                @else
                    <img src="data:image/jpeg;base64,{{ base64_encode($product->product_image) }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
                @endif
                @else
                    <img src="{{ asset('images/placeholder.png') }}" class="card-img-top img-fluid" alt="No Image Available">
                @endif
                <div class="card-body">
                    <h5 class="card-title text-white">{{$product->product_name}}</h5>
                    <p class="card-text text-white">{{$product->description}}</p>
                    <p class="text-white"><strong>{{$product->price}}</strong></p>
                    <p class="text-white">Category: Coffee</p>
                    
                    <!-- Button Group for Edit and Delete -->
                    <div class="d-flex justify-content-between">
                        <!-- Button trigger modal for Edit -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                            Edit
                        </button>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Cakes -->
        <h1 class="text-center mb-4">Cake</h1>
        @foreach($products->where('category_id', 2) as $product) <!-- Filter for Cake -->
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow-sm border-light" style="background-color: #A5773B;" data-bs-toggle="modal" data-bs-target="#orderModal{{$product->id}}">
                @if($product->product_image)
                <!-- Use Storage if image is a path, otherwise Base64 -->
                @if(Str::contains($product->product_image, '/'))
                    <img src="{{ asset('storage/' . $product->product_image) }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
                @else
                    <img src="data:image/jpeg;base64,{{ base64_encode($product->product_image) }}" class="card-img-top img-fluid" alt="{{ $product->product_name }}">
                @endif
                @else
                    <img src="{{ asset('images/placeholder.png') }}" class="card-img-top img-fluid" alt="No Image Available">
                @endif
                <div class="card-body">
                    <h5 class="card-title text-white" >{{$product->product_name}}</h5>
                    <p class="card-text text-white">{{$product->description}}</p>
                    <p class="text-white"><strong>{{$product->price}}</strong></p>
                    <p class="text-white">Category: Cake</p>
                    
                    <!-- Button Group for Edit and Delete -->
                    <div class="d-flex justify-content-between">
                        <!-- Button trigger modal for Edit -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                            Edit
                        </button>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('layouts.edit')

@endsection
