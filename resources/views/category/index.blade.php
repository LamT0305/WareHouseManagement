@extends('layouts.app')
@section('title', 'Category')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/category/index.css') }}">

@endsection
@section('content')

    <a href="{{url('/category/create')}}" class="btn_create">Create</a>

    <h1 class="h1_text">Category List</h1>
    <div class="table-responsive">
        <table
            class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
            <thead class="table-light">
                <caption>Table Products data</caption>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider" id="category">
                
                
            </tbody>
            
            <tfoot>

            </tfoot>
        </table>
    </div>
    <script src="{{asset('js/category.js')}}"></script>
@endsection
