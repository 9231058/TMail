<footer class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav">
			<li><a href="https://github.com/1995parham/TMail" target="_blank">Available on Github</a></li>
		</ul>
		<p class="navbar-text navbar-right">
		From <a class="navbar-link" href="https://github.com/1995parham/">@1995parham</a> with love :)
		</p>
	</div>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous">
</script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- TMail specific javascripts -->
<!-- Pages specific javascripts -->
<?php
if (isset($js))
echo '<script src="' . asset("js/$js") . '"></script>'
?>

</body>
</html>
