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
            </tr>
            
            @endforeach

            
        </tbody>
    </table>
</div>
    
@endsection