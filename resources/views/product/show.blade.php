@extends('layouts.app')
@section('title', 'Product details')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('content')
    <div class="product" style="display: flex; justify-content:space-around">
        <div class="img">
            <img src="{{ $product->image_url }}" alt="" class="img-pd">
        </div>
        <div class="details" style="display: flex; flex-direction:column; justify-content:space-between; width:55%">
            <h3>{{ $product->name }}</h3>
            <div>
                <p>Description: {{ $product->description }}</p>
                <p>Quantity: {{ $product->quantity }}</p>
                <p>Price: {{ $product->price }}$</p>
            </div>
            <div style="display:flex; align-items:center">
                <div class="quantity">
                    <button class="quantity-button minus" type="button" onclick="decreaseQuantity()">-</button>
                    <input type="number" class="quantity-input" name="quantity" value="1" min="1" style="width: 55px">
                    <button class="quantity-button plus" type="button" onclick="increaseQuantity()" style="margin-right:20px">+</button>
                </div>

                <button style="submit">Add to cart</button>
            </div>

        </div>
    </div>
    <div>
        <h3 style="text-align:center; margin: 70px 0;">You may also like:</h3>
        <div>
            <div class="preview" id="preview">
            
            </div>
        </div>
    </div>
    <script src="{{ asset('js/showProduct.js') }}"></script>
@endsection
