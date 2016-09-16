@extends('layouts.master1')
@section('title')
 socioappy
@endsection
@section('content')
@if(count($errors)>0)
<div class="row">
<div class="col-md-6">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>    
</div>
@endif
<div class="row">
<div class="col-md-6">
<h3>SIGN UP</h3>
<form method="post" action="{{ URL::route('signup')}}" >
<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
<label for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
</div>
<div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
<label for="username">username</label>
<input class="form-control" type="text" name="username" id="username" value="{{Request::old('username')}}">
</div>
<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
<label for="password">password</label>
<input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
</div>
<button type="submit" class="btn btn-primary">submit</button>
<input type="hidden" name="_token" value="{{ csrf_token()}}">
</form>
</div>
<div class="col-md-6">
<h3>SIGN IN</h3>
<form method="post" action="{{route('signin')}}">
<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
<label for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
</div>
<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
<label for="password">password</label>
<input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
</div>
<button type="submit" class="btn btn-primary">submit</button>
<input type="hidden" name="_token" value="{{ csrf_token()}}">
</form>
</div>
@endsection