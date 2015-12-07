<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
	<div class="content-wrapper">
		<?php echo title_breadcrumb($pagetitle, $breadcrumb); ?>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_agenda" data-toggle="tab"><?= lang('menu_agenda') ?></a></li>
							<li><a href="#tab_client" data-toggle="tab"><?= lang('agenda_client') ?></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_agenda">
								<div class="box-body">
									<?php echo table('agenda') ?>
								</div>
							</div>
							<div class="tab-pane" id="tab_client">
								<div class="box-body">
									<?php echo table('client') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		var tb_agenda, tb_client;
		var agenda = 'agenda', form_agenda = 'form_' + agenda, mdl_agenda = 'modal_' + agenda;
		var client = 'client', form_client = 'form_' + client, mdl_client = 'modal_' + client;
		$( document ).ready( function () {
			tb_agenda = $( '#' + agenda ).DataTable( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?php echo site_url('admin/agenda/list_agenda') ?>",
					"type": "POST"
				},
				"columns": [
					{data: "rownum", title: 'No.', className: 'number'},
					{data: "job_date", title: 'Job Date'},
					{data: "bill_to", title: 'Bill To'},
					{data: "desc", title: 'Client'},
					{data: "process", title: 'Document/Process'},
					{data: "actor", title: 'Actor'},
					{data: "status", title: 'Status'},
					{
						data: null,
						className: "center",
						title: 'Actions',
						render: function (data, type, row) {
							return btn_act_row( data, 'agenda' );
						}
					}
				],
			} );

			$( '#agenda_length' ).append( btn_create_top( '', 'add_agenda()', '' ) );
			tb_client = $( '#' + client ).DataTable( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?php echo site_url('admin/agenda/list_client') ?>",
					"type": "POST"
				},
				"columns": [
					{data: "rownum", title: 'No.', className: 'number'},
					{data: "name", title: 'Name'},
					{data: "title", title: 'Title'},
					{
						data: null,
						className: "center",
						title: 'Actions',
						render: function (data, type, row) {
							return btn_act_row( data, 'client' );
						}
					}
				],
			} );
			$( '#client_length' ).append( btn_create_top( '', 'add_client()', '' ) );
			return false;
		} );

		function add_agenda() {
			var title = "<?=lang('agenda_create') ?>";
			$( '#' + form_agenda )[ 0 ].reset();
			$( '#' + mdl_agenda ).modal( 'show' );
			$( '.modal-title' ).text( title );
		}

		function add_client() {
			var title = "<?=lang('agenda_create_client') ?>";
			$( '#' + form_client )[ 0 ].reset();
			$( '#' + mdl_client ).modal( 'show' );
			$( '.modal-title' ).text( title );
		}

		function edit_agenda(id) {
			$( '#' + form_agenda )[ 0 ].reset();
			$.ajax( {
				url: "<?php echo site_url('admin/agenda/edit_agenda') ?>",
				type: "post",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse( res );
					$( '.modal-title' ).text( 'Edit Agenda : ' + obj[ 'desc' ] + " / " + obj[ 'id' ] );
					$( '[name="id"]' ).val( obj[ 'id' ] );
					$( '[name="client_id"]' ).select2().select2( 'val', obj[ 'client_id' ] );
					$( '[name="desc"]' ).val( obj[ 'desc' ] );
					$( '[name="price_cat"]' ).select2().select2( 'val', obj[ 'price_cat' ] );
					$( '[name="unit_price"]' ).val( obj[ 'unit_price' ] );
					$( '[name="bill_to"]' ).select2().select2( 'val', obj[ 'bill_to' ] );
					$( '[name="area"]' ).val( obj[ 'area' ] );
					$( '[name="qty"]' ).val( obj[ 'qty' ] );
					$( '[name="job_date"]' ).val( obj[ 'job_date' ] );
					$( '[name="complete_date"]' ).val( obj[ 'complete_date' ] );
					$('#price_id').select2().select2( 'val', obj[ 'price_id' ] );
					$( '[name="process"]' ).val( obj[ 'process' ] );
					$( '[name="priority"]' ).select2().select2( 'val', obj[ 'priority' ] );
					$( '#' + mdl_agenda ).modal( 'show' );
				}
			} );
		}

		function save_agenda() {
			$( '#' + form_agenda ).on( 'submit', function (e) {
				e.preventDefault();
				$.ajax( {
					url: "<?php echo site_url('admin/agenda/upsert_agenda') ?>",
					type: 'POST',
					data: $( '#' + form_agenda ).serialize(),
					success: function (res) {
						var val = JSON.parse( res );
						if (val.status === true) {
							$( mdl_agenda ).data( 'bs.modal', null );
							reload_table( tb_agenda );
							info( 'Successfully saved' );
						} else {
							warning( 'Data not saved' );
						}
						reload_table( tb_agenda );
					},
				} );
			} );
		}

		function save_client() {
			$.ajax( {
				url: "<?=site_url('admin/agenda/upsert_client') ?>",
				type: 'POST',
				data: $( '#' + form_client ).serialize(),
				success: function (res) {
					var val = JSON.parse( res );
					if (val.status === true) {
						$( '#modal_client' ).data( 'bs.modal', null );
						reload_table( tb_client );
						info( 'Successfully saved' );
					} else {
						warning( 'Data not saved' );
					}
					reload_table( tb_client );
				},
			} );
			return false;
		}


		function edit_client(id) {
			$( '#form_client' )[ 0 ].reset();
			$.ajax( {
				url: "<?=site_url('admin/agenda/edit_client') ?>",
				type: "post",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse( res );
					$( '.modal-title' ).text( 'Edit Client Name : ' + obj[ 'name' ] + ', ' + obj[ 'title' ] + " / " +
							obj[ 'id' ] );
					$( '[name="id"]' ).val( obj[ 'id' ] );
					$( '[name="name"]' ).val( obj[ 'name' ] );
					$( '[name="title"]' ).val( obj[ 'title' ] );
					$( '#modal_client' ).modal( 'show' );
				}
			} );
		}

		function delete_agenda(id) {
			var url = "<?=site_url('admin/agenda/delete_agenda') ?>";
			delete_by_id( id, url, tb_agenda );
		}

		function delete_client(id) {
			var url = "<?=site_url('admin/agenda/delete_client') ?>";
			delete_by_id( id, url, tb_client );
		}

	</script>
<?php echo Tb::modal([
	 'id'     => 'modal_agenda',
	 'header' => '',
	 'body'   => $this->load->view('admin/agenda/agenda', [], TRUE),
	 'footer' => modal_footer('save_agenda()', 'form_agenda'),
]); ?>

<?php echo Tb::modal([
	 'id'     => 'modal_client',
	 'header' => '',
	 'body'   => $this->load->view('admin/agenda/client', [], TRUE),
	 'footer' => modal_footer('save_client()', 'form_client'),
]); ?>