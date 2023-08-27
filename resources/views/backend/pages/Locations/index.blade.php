@extends('backend.master')
@section('content')

<div class="container">
    <h1 class="text-center"><strong>Location</strong></h1>
    <a class="btn btn-primary" href="{{route('location.create')}}">Create Location</a>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>sl</th>
                <th>Crisis Name</th>
                <th>Location Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $value )
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->crisisLocation->name}}</td>
                <td>{{$value->location}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
