@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        
        
        Id: <input type="text" name="st_id" value="{{old('st_id')}}" placeholder="Id"><br>
        @error('st_id')
            {{$message}}<br>
        @enderror
        
        Date of Birth: <input type="date" name="dob"><br>
        @error('dob')
            {{$message}}<br>
        @enderror

        Email: <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror

        
        Phone Number: <input type="text" name="phone" placeholder="Phone Number" value="{{old('phone')}}"><br>
        @error('phone')
            {{$message}}<br>
        @enderror
        



        <input type="submit" value="Create">
    </form>
@endsection