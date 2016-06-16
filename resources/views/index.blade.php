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

<script type="text/javascript" src="./jquery-1.12.0.js"></script>
<script>
$(document).ready( function (){
	$.post("../server.php", { login: "user"} , function(data)
	       {
		       console.log(data);
		       if(data==1){
			       var url="../html/inbox.html?"+ getCookie("username");
			       alert(url);
			       setTimeout(function(){ window.location = url; }, 1000);
		       }
	       });
}
		 );
		 function getCookie(cname) {
			 var name = cname + "=";
			 var ca = document.cookie.split(';');
			 for(var i=0; i<ca.length; i++) {
				 var c = ca[i];
				 while (c.charAt(0)==' ') c = c.substring(1);
				 if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
			 }
			 return "";
		 }
</script>
@endsection
