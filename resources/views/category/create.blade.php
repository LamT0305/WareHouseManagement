@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" href="css/category/create-category.css">
<div class="create"> 
        <form action="/category" method="post" class="create_form">
            <h1 class="create_text-h1">Create Category</h1>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" name="">
            </div>
            <div>
                <button type="submit" value="">Submit</button>
            </div>
        </form>
    </div>


@endsection