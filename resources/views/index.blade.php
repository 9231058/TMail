@extends('layout.app')
@section('content')
	<div class="container">
	<form id="signup">
		<div class="titles">
			<h5>First Name :</h5>
			<h5>Last Name :</h5>
			<h5>Email :</h5>
			<h5>Password :</h5>
			<h5>Image :</h5>
			<input type="submit" value="Register" name="Register">
		</div>
		<div class="inputs">
			<input type="text" name="firstname">
			<input type="text" name="lastname">
			<input type="email" name="email">
			<input type="password" name="pass">
			<input type="file" name="image">
		</div>
	</form>
	<form id="login">
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" id="checkremember">Remember me
			</label>
		</div>
		<button type="submit" class="btn btn-default" value="Login" name="Login">Login</button>
	</form>
</div>
@endsection
