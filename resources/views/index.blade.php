@extends('layout.app')
@section('content')
	<div class="container">
	<div class="page-header">
        <h1>TMail <small>Simple way to destroy your mails :D</small></h1>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<form id="register" method="post">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" class="form-control" placeholder="First Name" name="first_name">
				</div>
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" name="last_name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" placeholder="Email" name="email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
				<div class="form-group">
					<label for="image">Profile Picture</label>
					<input type="file" name="image">
					<p class="help-block">Please upload jpg file</p>
				</div>
				<button type="submit" class="btn btn-default" name="Register">Register</button>
			</form>
			<form id="login" action="<?php echo route('login'); ?>" method="post">
                {!! csrf_field() !!}
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
                <button type="submit" class="btn btn-default" name="Login">Login</button>
            </form>
            <p class="text-center">
            <a id="register-btn">Register New Account</a>
            </p>
        </div>
    </div>
</div>
@endsection
