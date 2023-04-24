@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="css/cart.css">
    <div class="cart">
        <div>
            <img src="{{asset('image/avt.jpg')}}" alt="" class="avt_user">
            <h2>User's orders:</h2>
        </div>
        <div>
            <ul>
                <span class="Cart_Text">Orders in progess: 10</span>
                <span class="Cart_Text">Delivered orders: 10</span>
                <span class="Cart_Text">Canceled orders: 10</span>
                <span class="Cart_Text">Total orders: 10</span>
            </ul>
        </div>
    </div>
    <br>

    <div class="cart_list">
        <table class="table_1">
            <thead class="thead_1">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            @foreach(range(1, 3) as $number)
            <tbody class="tbody_1">
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                </tr>             
            </tbody>
            @endforeach          
        </table>

        <table class="table_2">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            @foreach(range(1, 3) as $number)
            <tbody>
                <tr>
                    <td><img src="{{asset('image/logo.png')}}" alt="" class="img_table_2"></td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                </tr>             
            </tbody>
            @endforeach
        </table>
        <span>Total Price: 10</span>
    </div>

    



@endsection
