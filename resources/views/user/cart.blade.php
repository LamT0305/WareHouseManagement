@extends('layouts.app')
@section('title', 'Cart')


@section('content')
    <link rel="stylesheet" href="css/cart.css">
    <div class="cart">
        <div>
            <img src="{{ asset('image/avt.jpg') }}" alt="" class="avt_user">
            <h2>User's orders:</h2>
        </div>
        <div>
            <ul style="display: flex; align-items:center; justify-content:space-evenly">
                <li>Your products: @if ($count > 0)
                        {{ $count }}
                    @else
                        0
                    @endif
                    <span id="count"></span>
                </li>
                <li>Your total cost: $ <span id="total-cost" class="total-cost"></span></li>
                <li><a href=""
                        style="color: black; border: 1px solid white; background-color:white; padding:5px 10px; border-radius:10px">Click
                        to purchase</a></li>
            </ul>
        </div>
    </div>
    <br>

    <div class="cart_table">
        <div class="header-table">
            <ul class="header" style="display:flex; align-items:center;">
                <li class="head-text">Image</li>
                <li class="head-text">ID</li>
                <li class="head-text">Product name</li>
                {{-- <li class="head-text">Descripiton</li> --}}
                <li class="head-text">Price</li>
                <li class="head-text">Quantity</li>
                <li class="head-text">Total</li>
                <li class="head-text">Action</li>
            </ul>
        </div>
        <div class="body-table" id="body">
            @foreach ($cart as $element)
                <ul class="cart-list" data-id="{{ $element->id }}">
                    <li class="cart-item">
                        <img class="img-cart" src="{{ $element->image_url }}" alt="" />
                    </li>
                    <li class="cart-item">{{ $element->product_id }}</li>
                    <li class="cart-item">{{ $element->name }}</li>
                    {{-- <li class="cart-item des">{{ $element->description }}</li> --}}
                    <li class="cart-item">$ <span class="price" data-id="{{ $element->id }}">{{ $element->price }}</span>
                    </li>
                    <li class="cart-item">
                        <button class="quantity-button minus" type="button"
                            onclick="decreaseQuantity({{ $element->id }})">-</button>
                        <input type="number" class="quantity-input" name="quantity" value="{{ $element->quantity }}"
                            min="1" style="width: 55px" data-id="{{ $element->id }}"
                            onchange="handleChangeValue({{ $element->id }})">
                        <button class="quantity-button plus" type="button" onclick="increaseQuantity({{ $element->id }})"
                            style="margin-right:20px">+</button>
                    </li>
                    <li class="cart-item">$ <span class="cost"
                            data-id="{{ $element->id }}">{{ $element->price * $element->quantity }}</span>
                    </li>
                    <li class="cart-item">
                        <button type="button" onclick="handleDeleteCart({{ $element->product_id }})">Delete</button>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>



    <script src="{{ asset('js/cart.js') }}"></script>
@endsection
