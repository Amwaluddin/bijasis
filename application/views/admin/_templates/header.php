<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="<?=$lang; ?>">
	<head>
		<meta charset="<?=$charset; ?>"/>
		<title><?=$title; ?></title>
		<meta http-equiv='cache-control' content='no-cache' />
		<meta http-equiv='expires' content='0' />
		<meta http-equiv='pragma' content='no-cache' />
		<link rel="icon"
		      href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAqElEQVRYR+2WYQ6AIAiF8W7cq7oXd6v5I2eYAw2nbfivYq+vtwcUgB1EPPNbRBR4Tby2qivErYRvaEnPAdyB5AAi7gCwvSUeAA4iis/TkcKl1csBHu3HQXg7KgBUegVA7UW9AJKeA6znQKULoDcDkt46bahdHtZ1Por/54B2xmuz0uwA3wFfd0Y3gDTjhzvgANMdkGb8yAyY/ro1d4H2y7R1DuAOTHfgAn2CtjCe07uwAAAAAElFTkSuQmCC"/>
		<link rel="stylesheet"
		      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,700italic"/>
		<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/bootstrap/css/bootstrap.min.css'); ?>"/>
		<link rel="stylesheet"
		      href="<?=site_url($frameworks_dir . '/datatables/css/dataTables.bootstrap.css'); ?>"/>
		<link rel="stylesheet"
		      href="<?=site_url($frameworks_dir . '/font-awesome/css/font-awesome.min.css'); ?>"/>
		<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/ionicons/css/ionicons.min.css'); ?>"/>
		<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/adminlte/css/adminlte.min.css'); ?>"/>
		<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/adminlte/css/skins/skin-red.min.css'); ?>"/>
		<?php if ($admin_prefs['transition_page'] == TRUE): ?>
			<link rel="stylesheet" href="<?=site_url($plugins_dir . '/animsition/animsition.min.css'); ?>"/>
		<?php endif; ?>
		<link rel="stylesheet" href="<?=site_url($frameworks_dir . '/domprojects/css/dp.min.css'); ?>" />
		<link rel="stylesheet" href="<?=site_url($plugins_dir . '/select2/css/select2.css'); ?>" />
		<link rel="stylesheet" href="<?=site_url($plugins_dir . '/toastr/toastr.css'); ?>" />
		<link rel="stylesheet" href="<?=site_url($plugins_dir . '/my_style.css'); ?>" />
		<script src="<?=site_url($frameworks_dir . '/jquery/jquery.min.js'); ?>"></script>
		<script src="<?=site_url($frameworks_dir . '/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?=site_url($frameworks_dir . '/datatables/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?=site_url($frameworks_dir . '/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>
	</head>
<body class="hold-transition skin-red fixed sidebar-mini">
<?php if ($admin_prefs['transition_page'] == TRUE): ?>
	<div class="wrapper animsition">
<?php else: ?>
	<div class="wrapper">
<?php endif; ?>