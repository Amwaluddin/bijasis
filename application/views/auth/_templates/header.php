<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<html lang="<?=$lang; ?>">
<head>
	<meta charset="<?=$charset; ?>">
	<title><?=$title; ?></title>
	<!--[if IE 8]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="google" content="notranslate">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet"
	      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,700italic">
	<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/adminlte/css/adminlte.min.css'); ?>">
	<link rel="stylesheet" href="<?=site_url($plugins_dir . '/icheck/css/blue.css'); ?>">
	<!--[if lt IE 9]>
	<script src="<?=site_url($plugins_dir . '/html5shiv/html5shiv.min.js'); ?>"></script>
	<script src="<?=site_url($plugins_dir . '/respond/respond.min.js'); ?>"></script>
	<![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
