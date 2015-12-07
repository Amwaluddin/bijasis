<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b><?php echo lang('footer_version'); ?></b> 2.3.0
	</div>
	<strong><?php echo lang('footer_copyright'); ?> &copy; 2014-<?php echo date('Y'); ?>
		<a href="http://biantarajaya.com" target="_blank"> Biantara Jaya Service</a> &amp;
		<a href="http://domprojects.com" target="_blank"> domProjects</a>. </strong> <?php echo lang('footer_all_rights_reserved'); ?>.
</footer>
</div>
<script src="<?=site_url($plugins_dir . '/slimscroll/slimscroll.min.js'); ?>"></script>
<script src="<?=site_url($plugins_dir . '/fastclick/fastclick.min.js'); ?>"></script>
<script src="<?=site_url($plugins_dir . '/select2/js/select2.min.js'); ?>"></script>
<script src="<?=site_url($plugins_dir . '/moment/moment.js'); ?>"></script>
<?php if ($admin_prefs['transition_page'] == TRUE): ?>
	<script src="<?php #echo base_url($plugins_dir . '/animsition/animsition.min.js'); ?>"></script>
<?php endif; ?>

<script src="<?php #echo base_url($frameworks_dir . '/highcharts/highcharts.js'); ?>"></script>
<script src="<?php #echo base_url($frameworks_dir . '/highcharts/highcharts-more.js'); ?>"></script>
<script src="<?php #echo base_url($frameworks_dir . '/highcharts/modules/solid-gauge.js'); ?>"></script>

<script src="<?=site_url($plugins_dir . '/toastr/toastr.min.js'); ?>"></script>
<script src="<?=site_url($plugins_dir . '/my_plugin.js'); ?>"></script>
<script src="<?=site_url($plugins_dir . '/bootstrap-dialog.min.js'); ?>"></script>
</body>
<script type="text/javascript">
	$(document).ready(function(){

	});
	$(document).on("keypress", 'form', function (e) {
		var code = e.keyCode || e.which;
		/*console.log(code); */
		if (code == 13) {
			console.log('Inside');
			/*e.preventDefault();*/
			return false;
		}
	});
</script>
</html>