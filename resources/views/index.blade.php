@extends('layout.app')
@section('content')
	<div id="container">
	<div class="forms">
		<form id="registeration">
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
	</div>
	<div class="forms">
		<form id="login">
			<div class="titles">
				<h5>Email :</h5>
				<h5>Password :</h5>
				<input type="checkbox" id="checkremember"> <h6>Remember me</h6>
				<input type="submit" value="Login" name="Login">
			</div>
			<div class="inputs">
				<input type="email" name="email">
				<input type="password" name="pass">
			</div>
		</form>
	</div>
</div>
@endsection
