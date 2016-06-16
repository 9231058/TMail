<?php
/**
* In The Name Of God
* File: header.blade.php
* User: Parham Alvani (parham.alvani@gmail.com)
* Date: 16-06-2016
* Time: 10:23
*/
<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta name="description" content="TMail PHP server">

<title>
	TMail
	<?php if (defined('title')) echo ' - ' . title ?>
</title>

<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

</head>
<body>
