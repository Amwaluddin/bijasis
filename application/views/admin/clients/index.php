<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<div class="content-wrapper">
		<?php echo title_breadcrumb($pagetitle, $breadcrumb) ?>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">
								<?php echo btn_create_top(lang('clients_create_client'), 'add_client()', '') ?>
							</h3>
						</div>
						<div class="box-body">
							<?php echo table('clients') ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		var save_method;
		var table;
		$( document ).ready ( function () {
			table = $( '#clients' ).DataTable ( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?php echo site_url('admin/clients/ajax_list')?>",
					"type": "POST"
				},
				"columns": [
					{data: 'rownum', title: 'No.'},
					{data: 'company', title: 'Company'},
					{data: 'partner', title: 'Partner'},
					{
						data: null,
						title: 'Contact 1',
						render: function (data, type, row) {
							return data.contact_name1 + '<br/> ' + data.contact_number1;
						}
					},
					{
						data: null,
						title: 'Contact 2',
						render: function (data, type, row) {
							return data.contact_name2 + '<br/> ' + data.contact_number2;
						}
					},
					{data: "business_sector", title: 'Business Sector'},
					{
						data: null,
						className: "center",
						title: 'Actions',
						render: function (data, row, type) {
							return btn_act_row( data, 'client' );
						}
					}
				],
			} );
		} );

		function add_client() {
			$( '#form' )[ 0 ].reset ();
			$( '#modal_client' ).modal ( 'show' );
			$( '.modal-title' ).text ( 'Add Client' );
		}
		function edit_client(id) {
			$( '#form' )[ 0 ].reset ();
			$.ajax ( {
				url: "<?php echo site_url('admin/clients/ajax_edit') ?>",
				type: "post",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse ( res );
					$( '.modal-title' ).text ( 'Edit Client : ' + obj[ 'company' ] + " / " + obj[ 'id' ] );
					$( '[name="id"]' ).val ( obj[ 'id' ] );
					$( '[name="client_name"]' ).val ( obj[ 'company' ] );
					$( '[name="partner"]' ).val ( obj[ 'partner' ] );
					$( '[name="contact_number1"]' ).val ( obj[ 'contact_number1' ] );
					$( '[name="contact_number2"]' ).val ( obj[ 'contact_number2' ] );
					$( '[name="contact_name1"]' ).val ( obj[ 'contact_name1' ] );
					$( '[name="contact_name2"]' ).val ( obj[ 'contact_name2' ] );
					$( '[name="tax_number"]' ).val ( obj[ 'tax_number' ] );
					$( '[name="business_sector"]' ).val ( obj[ 'business_sector' ] );
					$( '#modal_client' ).modal ( 'show' );
				}
			} );
		}
		function save() {
			$.ajax ( {
				url: "<?php echo site_url('admin/clients/ajax_save')?>",
				type: "POST",
				data: $( '#form' ).serialize (),
				success: function (data) {
					$( '#modal_client' ).modal ( 'hide' );
					reload_table();
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert( 'Error adding / update data' );
				}
			} );
		}
		function reload_table() {
			table.ajax.reload ( null, false );
		}

	</script>
<?php echo Tb::modal([
	 'id' => 'modal_client',
	 'header' => '',
	 'body' => $this->load->view('admin/clients/edit', [], TRUE),
	 'footer' => modal_footer('save()'),
]); ?>