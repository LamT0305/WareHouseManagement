@extends('layouts.app')
@section('title', 'create')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/create-product.css') }}">

@endsection
@section('content')
    <div class="create">

        <form action="#" method="post" class="create_form">
            <h1 class="create_text-h1">Create Product</h1>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" name="">
            </div>
            <label>Description:</label>
            <div>
                <input type="text" placeholder="Enter Description" name="">
            </div>
            <label>Price:</label>
            <div>
                <input type="text" placeholder="Enter Price" name="">
            </div>
            <label>Quantity:</label>
            <div>
                <input type="text" placeholder="Enter Quantity" name="">
            </div>
            <label>Unit:</label>
            <div>
                <input type="text" placeholder="Enter Unit" name="">
            </div>
            <label>Image:</label>
            <div>
                <input type="text" placeholder="Enter Image" name="">
            </div>
            <label>Select Category:</label>
            <div>
                <select placeholder="Select Category">
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
            <div>
                <button type="submit" value="">Submit</button>
            </div>
        </form>
    </div>


@endsection
