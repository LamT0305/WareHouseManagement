@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" href="css/category/update-category.css">

    <div class="update"> 
        <form action="/category" method="post" class="update_form">
            <h1 class="update_text-h1">Update Category</h1>
            <label>ID: 3121231</label>
            <br>
            <label>Name:</label>
            <div>
                <input type="text" placeholder="Enter Name" value="">
            </div>
            <div>
                <button type="submit" value="">Submit</button>
            </div>
        </form>
    </div>

@endsection