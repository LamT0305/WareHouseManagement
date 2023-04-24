@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/create-product.css')}}">
    
@endsection
@section('content')
<div class="create">
        
        <form class="create_form">
            <h1 class="create_text-h1">Create Category</h1>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" name="name" id="name">
            </div>
            <div>
                <button type="submit" onclick="handleAddCategory()">Submit</button>
            </div>
        </form>
    </div>

    <script src="{{url('js/category.js')}}"></script>
@endsection