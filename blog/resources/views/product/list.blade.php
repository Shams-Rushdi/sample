@extends('layouts.main')
@section('content')
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    @foreach($products as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td><a href="{{route('product.details',['id'=>$st->id])}}">{{$st->name}}</a></td>
            <td>{{$st->price}}</td>
        </tr>
    @endforeach
</table>
@endsection