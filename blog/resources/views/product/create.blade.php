@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Price: <input type="text" name="price" value="{{old('price')}}" placeholder="Price"><br>
        @error('price')
            {{$message}}<br>
        @enderror
        
        <input type="submit" value="Create">
    </form>
@endsection