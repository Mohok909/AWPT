


@extends('layout.app')
@section('content')
@php
if (session()->has('name')) {
    echo session()->get('name');
}
else {echo "error";}
@endphp
<h2>Create Student</h2>
<form action="{{route('service')}}" class="form-group" method="post">
   
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="col-md-4 form-group">
        <span>Name</span>
        <br>
        <input type="text" name="name" value="{{old('name')}}" class="form-control"><br>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Payment</span> <br><br>
        <input type="radio" id="Bkash" name="payment" value="Bkash">
        <label for="Bkash">Bkash</label>
        <input type="radio" id="Nagad" name="payment" value="Nagad">
        <label for="Nagad">Nagad</label><br><br>
    
        @error('payment')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    <div class="col-md-4 form-group">
        <span>Phone</span><br>
        <input type="text" name="phone" placeholder="017xxxxxxxx" class="form-control"><br>
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Donate" >                  
</form>
@endsection 

