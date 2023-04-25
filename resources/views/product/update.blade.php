@extends('layouts.app')
@section('title', 'Edit')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/create-product.css') }}">

@endsection
@section('content')
    <div class="create">

        <form class="create_form" id="myForm" action="{{ url('/product/update/'.$product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="create_text-h1">Create Product</h1>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" name="name" id="name" value="{{ $product->name }}"
                    required>
            </div>
            <label>Description:</label>
            <div>
                <input type="text" placeholder="Enter Description" name="description" value="{{ $product->description }}"
                    id="description" required>
            </div>
            <label>Price:</label>
            <div>
                <input type="text" placeholder="Enter Price" name="price" value="{{ $product->price }}" id="price"
                    required>
            </div>
            <label>Quantity:</label>
            <div>
                <input type="text" placeholder="Enter Quantity" name="quantity" value="{{ $product->quantity }}"
                    id="quantity" required>
            </div>
            <label>Unit:</label>
            <div>
                <input type="text" placeholder="Enter Unit" name="unit" value="{{ $product->unit }}" id="unit"
                    required>
            </div>
            <label>Image:</label>
            <div>
                <input type="text" placeholder="Enter Image" name="image_url" value="{{ $product->image_url }}"
                    id="image_url" required>
            </div>
            <label for="category">Select Category:</label>
            <div>
                <select id="category" name="category_id">
                    @foreach ($category as $item)
                        <Option value="{{ $item->id }}" @if ($product->category_id == $item->id) selected @endif>
                            {{ $item->name }}</Option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" onclick="handleSubmit()">Submit</button>
            </div>
        </form>

        <script src="{{asset('js/create.js')}}"></script>
        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    </div>


@endsection
