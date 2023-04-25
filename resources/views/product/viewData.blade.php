@extends('layouts/app')
@section('title', 'Data product')
@section('header')

@endsection

@section('content')
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
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider" id="item">
                
                
            </tbody>
            
            <tfoot>

            </tfoot>
        </table>
    </div>
    <script src="{{asset('js/data.js')}}"></script>
@endsection
