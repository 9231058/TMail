<footer>
	<br>
	<p>
	Computer and Information Technology Department,
	Amirkabir University - Published under GPL2 License -
	</p>
	<a href="https://github.com/1995parham/TMail" target="_blank">Available on Github</a>
	<a href="https://github.com/1995parham" target="_blank">@1995parham</a>
</footer>

<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- TMail specific javascripts -->
<!-- Pages specific javascripts -->
<?php
if (isset($js))
echo '<script src="' . asset("js/$js") . '"></script>'
?>

</body>
</html>
