@extends('layouts.app')
@section('content')

<div>
        <h1>Add Product</h1>
        <form action="#" method="post">
            <div>
                <label>Name:</label>
                <input type="text" placeholder="Enter Name" name="">
            </div>
            <div>
                <label>Description:</label>
                <input type="text" placeholder="Enter Description" name="">
            </div>
            <div>
                <label>Price:</label>
                <input type="text" placeholder="Enter Price" name="">
            </div>
            <div>
                <label>Quantity:</label>
                <input type="text" placeholder="Enter Quantity" name="">
            </div>
            <div>
                <label>Unit:</label>
                <input type="text" placeholder="Enter Unit" name="">
            </div>
            <div>
                <label>Image:</label>
                <input type="text" placeholder="Enter Image" name="">
            </div>
            <div>
                <select>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
            </div>
            <div>
                <button type="submit" value="">Submit</button>
            </div>
        </form>
    </div>


@endsection
