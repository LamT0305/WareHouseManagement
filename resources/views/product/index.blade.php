@extends('layouts.app')
@section('title', 'product')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endsection
@section('content')
    <div class="cart-icon">
        <a href="{{url('/')}}">
            <img src="{{ asset('image/cart.png') }}" alt="cart-item">

        </a>
    </div>
    <div>
        <h3 style="text-align: center;font-size: 45px; font-weight:600;margin: 20px 0;margin-bottom: 70px;">Our new Products
        </h3>

        <div class="preview" id="preview">

        </div>

    </div>

    <div class="filter">
        <label for="dropdown">Sắp xếp theo: </label>
        <select name="dropdown" id="sortBy">
            <option value="gia-thap-den-cao">Giá thấp đến cao</option>
            <option value="gia-cao-den-thap">Giá cao đến thấp</option>
            <option value="gia-a-den-z">Giá A đến Z</option>
            <option value="gia-z-den-a">Giá Z đến A</option>
        </select>
    </div>

    <div class="row" id="products">

    </div>

    <script src="{{ asset('js/product.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
@endsection
