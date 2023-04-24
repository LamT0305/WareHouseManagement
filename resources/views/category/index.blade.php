@extends('layouts.adminlayout')
@section('content')
<link rel="stylesheet" href="css/category/index.css">

    <a href="#" class="btn_create">Create</a>
    
    <h1 class="h1_text">Category List</h1>
    <div class="list_category">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (range(1, 3) as $number)
                <tr>
                    <td>{{ $number }}</td>
                    <td>{{ $number }}</td>
                    <td class="action_btn">
                        <a href="#" class="btn_edit">Edit</a>
                        <form method="POST" action="#">
                            <button type="submit" class="btn_delete"  onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection