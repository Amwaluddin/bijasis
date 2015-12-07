/**
 * Created by Amwaluddin Lubis on 10/19/2015.
 */

$( document ).ready( function () {
	$.fn.modal.Constructor.prototype.enforceFocus = function () {};
	$( 'body' ).on( 'hidden.bs.modal', '.modal', function () {
		$( this ).removeData( 'bs.modal' );
	} );
} )
function btn_act_row(data, prefix) {
	var btn = "<a class='btn btn-xs btn-primary' onclick='edit_" + prefix + "(" + data.id + ")'><i class='fa" +
		" fa-edit'></i></a>";
	btn += " <a class='btn btn-xs btn-danger' onclick='delete_" + prefix + "(" + data.id + ")'><i class='fa fa-trash'></i></a>";
	return btn;
}
function btn_create_top(txt, onclick, color) {
	if (!color) color = 'danger';
	if (txt) txt = '&nbsp; ' + txt;
	if (onclick) onclick = ' onclick = "' + onclick + '"';
	return ' &nbsp; <button class="btn btn-sm btn-' + color + ' btn-flat"' + onclick + '"><i class="fa fa-plus-circle">' + txt + '</i></button>';
}
function btn_toolbar() {
	if (!color) color = 'danger';
	if (txt) txt = '&nbsp; ' + txt;
	if (onclick) onclick = ' onclick = "' + onclick + '"';
	return ' &nbsp; <button class="btn btn-sm btn-' + color + ' btn-flat"' + onclick + '"><i class="fa' +
		' fa-plus-circle">' + txt + '</i></button>';
}
function TitleCase(text) {
	return text.replace( /\w\S*/g, function (txt) {
		return txt.charAt( 0 ).toUpperCase() + txt.substr( 1 ).toLowerCase();
	} );
}

toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": true,
	"progressBar": true,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "3000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
}

function error(msg) {
	return toastr[ "error" ]( msg, "Error" )
}

function info(msg) {
	return toastr[ "info" ]( msg, "Information" )
}

function warning(msg) {
	return toastr[ "warning" ]( msg, "Warning" )
}

function reload_table(table) {
	table.ajax.reload( null, false );
}

function delete_by_id(id, url, table) {
	BootstrapDialog.confirm( {
		title: 'Confirmation',
		message: 'Are you sure want to delete this data ?',
		type: BootstrapDialog.TYPE_DANGER,
		closable: true,
		callback: function (res) {
			if (res) {
				$.ajax( {
					url: url,
					type: "post",
					data: {'id': id},
					datatype: 'JSON',
					success: function (res) {
						var val = JSON.parse( res );
						if (val.status === true) {
							info( 'This item successfully deleted.' );
						} else {
							error( 'This item not successfully deleted.' );
						}
						reload_table( table );
					}
				} )
			}
		}
	} );
}
