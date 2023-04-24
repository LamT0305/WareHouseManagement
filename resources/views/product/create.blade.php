@extends('layouts.app')
@section('title', 'create')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/create-product.css') }}">

@endsection
@section('content')
    <div class="create">

        <form class="create_form" id="myForm" action="{{url('/product/create')}}" method="POST">
            @csrf
            <h1 class="create_text-h1">Create Product</h1>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>
            </div>
            <label>Description:</label>
            <div>
                <input type="text" placeholder="Enter Description" name="description" id="description" required>
            </div>
            <label>Price:</label>
            <div>
                <input type="text" placeholder="Enter Price" name="price" id="price" required>
            </div>
            <label>Quantity:</label>
            <div>
                <input type="text" placeholder="Enter Quantity" name="quantity" id="quantity" required>
            </div>
            <label>Unit:</label>
            <div>
                <input type="text" placeholder="Enter Unit" name="unit" id="unit" required>
            </div>
            <label>Image:</label>
            <div>
                <input type="text" placeholder="Enter Image" name="image_url" id="image_url" required>
            </div>
            <label for="category">Select Category:</label>
            <div>
                <select id="category" name="category_id">
                    @foreach ($category as $item)
                        <Option value="{{$item->id}}">{{$item->name}}</Option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

        <script type="module" src="{{asset('js/create.js')}}"></script>
        {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    </div>


@endsection
