@extends('layouts.main')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>Email</th>
        <th>Phone</th>
        
    </tr>
    @foreach($students as $st)
        <tr>
            <td>{{$st->st_id}}</td>
            <td><a href="{{route('student.details',['id'=>$st->id])}}">{{$st->name}}</a></td>
            <td>{{$st->dob}}</td>
            <td>{{$st->email}}</td>
            <td>{{$st->phone}}</td>
        </tr>
    @endforeach
</table>
@endsection