@extends('layout.layout')



@section('section')
<div class="container mt-5">
{{-- 
    <pre>
        {{print_r($request)}}
    </pre> --}}

    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($request as $user)
            <tr>
                <td>{{$user->c_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->city}}</td> 
                <td>
                    <a href="/edit/{{$user->c_id}}" class="btn btn-warning">Edit</a>    
                <a href="/delete/{{$user->c_id * 2323}}" class="btn btn-danger">Delete</a>    
                </td> 
            </tr>
            
            @endforeach

            
        </tbody>
    </table>
</div>
    
@endsection