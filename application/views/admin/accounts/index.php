<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<div class="content-wrapper">
		<?php echo title_breadcrumb($pagetitle, $breadcrumb) ?>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_acc_type" data-toggle="tab">Account Type</a></li>
							<li><a href="#tab_acc" data-toggle="tab">Account</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_acc_type">
								<div class="box-header">
									<?php echo btn_create_top(lang('accounts_create_account_type'), 'add_acc_type()', '') ?>
								</div>
								<div class="box-body">
									<?php echo table('acc_type') ?>
								</div>
							</div>
							<div class="tab-pane" id="tab_acc">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		var save_method;
		var table;
		$( document ).ready( function () {
			table = $( '#acc_type' ).DataTable( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?php echo site_url('admin/accounts/ajax_list_acc_type')?>",
					"type": "POST"
				},
				"columns": [
					{data: "rownum", title: "No"},
					{data: "name", title: "Account Type"},
					{data: "note", title: "Normal Balance"},
					{
						data: null,
						className: "center",
						title: "Actions",
						render: function (data, type, row) {
							return btn_act_row( data, 'acc_type' );
						}
					}
				],
				"columnDefs": [ {
					"searchable": true,
					"orderable": true,
					"targets": 0
				} ],
				"order": [ [ 2, 'asc' ] ]
			} );

		} );

		function add_acc_type() {
			$( '#form_acc_type' )[ 0 ].reset();
			$( '#modal_acc_type' ).modal( 'show' );
			$( '.modal-title' ).text( 'Add Client' );
		}

		function edit_acc_type(id) {
			$( '#form_acc_type' )[ 0 ].reset();
			$.ajax( {
				url: "<?php echo site_url('admin/accounts/ajax_edit_acc_type') ?>",
				type: "post",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse( res );
					$( '.modal-title' ).text( 'Edit Client : ' + obj[ 'name' ] + " / " + obj[ 'id' ] );
					$( '[name="id"]' ).val( obj[ 'id' ] );
					$( '[name="name"]' ).val( obj[ 'name' ] );
					$( '[name="note"]' ).val( obj[ 'note' ] );
					$( '#modal_acc_type' ).modal( 'show' );
				}
			} );
		}

		function save_acc_type() {
			$.ajax( {
				url: "<?php echo site_url('admin/accounts/ajax_save_acc_type')?>",
				type: "POST",
				data: $( '#form_acc_type' ).serialize(),
				success: function (data) {
					$( '#modal_acc_type' ).modal( 'hide' );
					reload_table();
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert( 'Error adding / update data' );
				}
			} );
		}

		function reload_table() {
			table.ajax.reload( null, false );
		}

	</script>
<?php echo Tb::modal([
	 'id' => 'modal_acc_type',
	 'header' => '',
	 'body' => $this->load->view('admin/accounts/account_type', [], TRUE),
	 'footer' => [
		  Tb::buttonGroup(
				['item' => ['label' => 'Submit',
					 'icon' => Tb::ICON_FLOPPY_SAVE,
					 'type' => Tb::BUTTON_TYPE_SUBMIT,
					 'onclick' => 'save_acc_type()',
					 'color' => Tb::BUTTON_COLOR_PRIMARY,
					 'class' => 'btn-flat'],
					 ['label' => 'Reset',
						  'icon' => Tb::ICON_REFRESH,
						  'type' => Tb::BUTTON_TYPE_RESET,
						  'color' => Tb::BUTTON_COLOR_WARNING,
						  'class' => 'btn-flat'],
				])
	 ],
]); ?>