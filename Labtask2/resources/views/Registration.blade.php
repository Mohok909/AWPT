


@extends('layout.app')
@section('content')
<body>
    <style>
        .center {
  margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;
}
    </style>
</body>
<div class="center">
<h2>Registration</h2>
<form action="{{route('Registration')}}" class="form-group" method="post">
  
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
        <br><br>
        <input type="text" name="name" placeholder="Input User's Name" class="form-control"><br>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>User Id</span>
        <br><br>
        <input type="text" name="user_id" placeholder="Input User Id" class="form-control"><br>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Create Password</span> 
        <br><br>
        <input type="password" name="Password" placeholder="Input a Password" class="form-control"> <br><br><br>
    
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Confirm Password</span> 
        <br><br>
        <input type="password" name="ConfirmPassword" placeholder="Input a Password" class="form-control"> <br><br><br>
    
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Registration">              </div>    
</form>
@endsection 