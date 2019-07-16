@extends('master')

@section('title', 'Register')

@section('content')

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
  {{ $message }}
</div>
@endif

<div class="card">
    <div class="card-header">Register</div>
    <div class="card-body">
        <form action="{{ route('auth.postRegister') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input type="text" id="name" name="name" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="email" id="email" name="email" class="form-control" required autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6 offset-md-4">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
        </form>
    </div>
</div>

@endsection
