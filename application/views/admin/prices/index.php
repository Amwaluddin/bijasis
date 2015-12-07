<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
	<div class="content-wrapper">
		<?php echo title_breadcrumb($pagetitle, $breadcrumb); ?>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_price_cat" data-toggle="tab">Price Category</a></li>
							<li><a href="#tab_price" data-toggle="tab">Price</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_price_cat">
								<div class="box-body">
									<?php echo table('price_cat') ?>
								</div>
							</div>
							<div class="tab-pane" id="tab_price">
								<div class="box-header" style="padding: 0px 10px !important;">
									<div class="col-xs-5 row">
										<div class="col-xs-10 pull-left row">
											<?php echo tb::dropDownList('category', '', $price_cat, ['id' => 'category', 'onchange' => 'change_category()']); ?>
										</div>
										<div class="col-xs-2 pull-right">
											<?php echo btn_create_top('', 'add_price()', ''); ?>
										</div>
									</div>
								</div>
								<div class="box-body">
									<?php echo table('price') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript">
		var tb_price_cat, tb_price;

		$( document ).ready( function () {
			tb_price_cat = $( '#price_cat' ).DataTable( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?=site_url('admin/prices/list_price_cat') ?>",
					"type": "POST"
				},
				"columns": [
					{data: "rownum", title: 'No.', width:'15px'},
					{data: "desc", title: 'Description'},
					{data: "note1", title: 'Price 1'},
					{data: "note2", title: 'Price 2'},
					{data: "note3", title: 'Price 3'},
					{data: "note4", title: 'Price 4'},
					{data: "note5", title: 'Price 5'},
					{
						data: null,
						className: "center",
						title: 'Actions',
						render: function (data, type, row) {
							return btn_act_row( data, 'price_cat' );
						}
					}
				],
			} );
			$( '#price_cat_length' ).append( btn_create_top( '', 'add_price_cat()', '' ) );
			load_price();
		} );

		function load_price() {
			var id_company = $( '#category' ).val();
			var lbl = set_label_price_tabel();
			tb_price = $( '#price' ).DataTable( {
				"processing": false,
				"serverSide": true,
				"ajax": {
					"url": "<?=site_url('admin/prices/list_price') ?>",
					"type": 'POST',
					"data": {'id': id_company},
				},
				"columns": [
					{data: "rownum", title: 'No.', width:'15px'},
					{data: "cat_id", title: 'Price Category'},
					{data: "doc", title: 'Document'},
					{data: "price1", title: price_label( lbl [ 'note1' ] )},
					{data: "price2", title: price_label( lbl [ 'note2' ] )},
					{data: "price3", title: price_label( lbl [ 'note3' ] )},
					{data: "price4", title: price_label( lbl [ 'note4' ] )},
					{data: "price5", title: price_label( lbl [ 'note5' ] )},
					{
						data: null,
						className: "center",
						title: 'Actions',
						render: function (data, type, row) {
							return btn_act_row( data, 'price' );
						}
					}
				],
			} );
		}

		function change_category() {
			tb_price.destroy();
			load_price();
		}

		function add_price() {
			$( '#form_price' )[ 0 ].reset();
			var cat_id = $( '#category' ).val();
			get_price_name( cat_id );
			$( '#modal_price' ).modal( 'show' );
			$( '.modal-title' ).text( 'Create Price' );
		}

		function get_price_name(cat_id) {
			var result;
			$.ajax( {
				url: "<?php echo site_url('admin/prices/price_name_by_cat_id') ?>",
				type: "post",
				data: {cat_id: cat_id},
				datatype: "JSON",
				async: false,
				success: function (res) {
					result = res;
				}
			} );
			return result;
		}

		function set_form_price_label() {
			var cat_id = $( '#category' ).val();
			var res = get_price_name( cat_id );
			var obj = $.parseJSON( res );
			$( '[for="price1"]' ).text( price_label( obj[ 'note1' ] ) );
			$( '[for="price2"]' ).text( price_label( obj[ 'note2' ] ) );
			$( '[for="price3"]' ).text( price_label( obj[ 'note3' ] ) );
			$( '[for="price4"]' ).text( price_label( obj[ 'note4' ] ) );
			$( '[for="price5"]' ).text( price_label( obj[ 'note5' ] ) );
		}

		function set_label_price_tabel() {
			var cat_id = $( '#category' ).val();
			var res = get_price_name( cat_id );
			var obj = $.parseJSON( res );
			return obj;
		}

		function price_label(str) {
			if (!str || str === '&lt;Reserve&gt;') {
				str = "< Reserve >";
			} else {
				str = TitleCase( str );
			}
			return str;
		}
		/*

		 var id = $( '#cat' ).val();
		 get_price_name( id );
		 */
		function edit_price(id) {
			$( '#form_price' )[ 0 ].reset();
			set_form_price_label();
			$.ajax( {
				url: "<?php echo site_url('admin/prices/edit_price') ?>",
				type: "POST",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse( res );
					$( '.modal-title' ).text( 'Edit Price : ' + obj[ 'doc' ] + " / " + obj[ 'id' ] );
					$( '[name="id"]' ).val( obj[ 'id' ] );
					$( '[name="doc"]' ).val( obj[ 'doc' ] );
					$( '[name="cat"]' ).val( obj[ 'cat_id' ] );
					$( '[name="price1"]' ).val( obj[ 'price1' ] );
					$( '[name="price2"]' ).val( obj[ 'price2' ] );
					$( '[name="price3"]' ).val( obj[ 'price3' ] );
					$( '[name="price4"]' ).val( obj[ 'price4' ] );
					$( '[name="price5"]' ).val( obj[ 'price5' ] );
					$( '#modal_price' ).modal( 'show' );
				}
			} );
		}

		function delete_price(id) {
			var url = "<?php echo site_url('admin/prices/delete_price') ?>";
			delete_by_id( id, url, tb_price );
		}

		function save_price() {
			$.ajax( {
				url: "<?php echo site_url('admin/prices/upsert_client') ?>",
				type: 'POST',
				data: $( '#' + form_price ).serialize(),
				success: function (res) {
					var val = JSON.parse( res );
					if (val.status === true) {
						$( '#modal_price' ).data( 'bs.modal', null );
						reload_table( tb_price );
						info( 'Successfully saved' );
					} else {
						warning( 'Data not saved' );
					}
					reload_table( tb_price );
				},
			} );
			return false;
		}

		function add_price_cat() {
			$( '#form_price_cat' )[ 0 ].reset();
			$( '#modal_price_cat' ).modal( 'show' );
			$( '.modal-title' ).text( 'Create Price Category' );
		}

		function edit_price_cat(id) {
			$( '#form_price_cat' )[ 0 ].reset();
			$.ajax( {
				url: "<?php echo site_url('admin/prices/edit_price_cat') ?>",
				type: "post",
				data: {'id': id},
				datatype: 'JSON',
				success: function (res) {
					var obj = JSON.parse( res );
					$( '.modal-title' ).text( 'Edit Price Category : ' + obj[ 'desc' ] + " / " + obj[ 'id' ] );
					$( '[name="id"]' ).val( obj[ 'id' ] );
					$( '[name="desc"]' ).val( obj[ 'desc' ] );
					$( '[name="note1"]' ).val( obj[ 'note1' ] );
					$( '[name="note2"]' ).val( obj[ 'note2' ] );
					$( '[name="note3"]' ).val( obj[ 'note3' ] );
					$( '[name="note4"]' ).val( obj[ 'note4' ] );
					$( '[name="note5"]' ).val( obj[ 'note5' ] );
					$( '#modal_price_cat' ).modal( 'show' );
				}
			} );
		}
		function save_price_cat() {
			$.ajax( {
				url: "<?php echo site_url('admin/prices/upsert_price_cat') ?>",
				type: "POST",
				data: $( '#form_price_cat' ).serialize(),
				success: function (data) {
					$( '#modal_price_cat' ).modal( 'hide' );
					reload_table( tb_price_cat );
				},
				error: function (jqXHR, textStatus, errorThrown) {
					alert( 'Error adding / update data' );
				}
			} );
		}

	</script>
<?php echo Tb::modal([
	 'id'     => 'modal_price_cat',
	 'header' => '',
	 'body'   => $this->load->view('admin/prices/price_category', [], TRUE),
	 'footer' => modal_footer('save_price_cat()', 'form_price_cat'),
]); ?>

<?php echo Tb::modal([
	 'id'     => 'modal_price',
	 'header' => '',
	 'body'   => $this->load->view('admin/prices/price', [], TRUE),
	 'footer' => modal_footer('save_price()', 'form_price'),
]); ?>