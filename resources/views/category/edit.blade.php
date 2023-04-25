@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{asset('css/category/update-category.css')}}">
    
@endsection
@section('content')

    <div class="update"> 
        <form class="update_form">
            <h1 class="update_text-h1">Update Category</h1>
            <label>ID: {{$category->id}}</label>
            <br>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" value="{{$category->name}}" id="cate-name">
            </div>
            <div>
                <button type="submit" value="" onclick="handleUpdateCategory({{$category->id}})">Submit</button>
            </div>
        </form>
    </div>
    <script src="{{asset('js/category.js')}}"></script>
@endsection