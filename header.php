<?php

$directory = dirname(__FILE__);

$cwd = str_replace("\\", "/", getcwd());
if(strpos($cwd, "/examples") !== false) {
	$indexPath = "../index.php";
	$prettifyPath = "../prettify";
}
else {
	$indexPath = "";
	$prettifyPath = "prettify";
}


function prettyprint($code) {
	echo '<pre class="prettyprint linenums">', str_replace("\t", str_repeat("&nbsp", 4), htmlspecialchars($code)), '</pre>';
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<link href="prettify/prettify.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
		<script src="prettify/prettify.js"></script>
	</head>

	<body onload="prettyPrint()">

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li class="nav-header">Methods</li>
						<li><a href="index.php">Export Orders</a></li>
						<li><a href="">Export Orders Statuses</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>

						<li><a href="">5</a></li>

					</ul>
				</div>
			</div>
			<div class="span9">
