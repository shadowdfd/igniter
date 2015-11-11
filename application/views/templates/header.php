<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Управление договорами</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #000;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		::border-bottom: 1px solid #D0D0D0;
		font-size: 14px;
		font-weight: normal;
		margin: 0 0 0px 0;
		padding: 5px 5px 5px 5px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}
	p.logo {
		text-align: left;
		font-size: 11px;
		border-bottom: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	p.menu {
		text-align: left;
		font-size: 14px;
		border-bottom: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 0px 0 0 0;
	}
	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	a.button
	{
		font-size: 14px;
		color: #fff;
		border: 1px solid #D0D0D0;
		background-color: #000;
		line-height: 32px;
		padding: 5px 5px 5px 5px;
		margin: 0 0 0 0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	#container {
		background-color: #fff;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>



        <body>
		
		<div id="container">
			<p class="logo">
				<a href='<?php echo site_url(''); ?>'><font size=6>LOGO COMPANY</font></a>
			</p>
			<p class="menu">
				<a href='<?php echo site_url('news'); ?>'>All News</a> | 
				<a href='<?php echo site_url('about'); ?>'>About Page</a> | 
				<a href='<?php echo site_url(''); ?>'>Home Page</a> |
				<?php if ($nick_l == '---') { ?>
				<a href='<?php echo site_url('login'); ?>'><b>Login</b></a> 
				<?php } else { ?>
				<a href='<?php echo site_url('logout'); ?>'>Logout</a> | Hi: <?php echo $nick_l; ?>!
				<?php } ?>
			</p>
			<div id="body">
				<h1>Home > <?php echo $title; ?> ></h1>			