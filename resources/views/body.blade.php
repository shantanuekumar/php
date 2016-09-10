@extends('layouts.master1')
@section('title')
 socioappy
@endsection
@section('content')
<div class="row">
<div class="col-md-6">
<h3>SIGN UP</h3>
<form method="post" action="#">
<div class="form-group">
<label for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email">
</div>
<div class="form-group">
<label for="username">username</label>
<input class="form-control" type="text" name="username" id="username">
</div>
<div class="form-group">
<label for="password">password</label>
<input class="form-control" type="text" name="password" id="password">
</div>
<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
<div class="col-md-6">
<h3>SIGN IN</h3>
<form method="post" action="#">
<div class="form-group">
<label for="email">E-mail</label>
<input class="form-control" type="text" name="email" id="email">
</div>
<div class="form-group">
<label for="password">password</label>
<input class="form-control" type="text" name="password" id="password">
</div>
<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
@endsection