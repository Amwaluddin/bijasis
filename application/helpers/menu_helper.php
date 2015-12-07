<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('active_link_controller')) {
	function active_link_controller($controller)
	{
		$CI =& get_instance();
		$class = $CI->router->fetch_class();

		return ($class == $controller) ? 'active' : NULL;
	}
}

if (!function_exists('active_link_function')) {
	function active_link_function($controller)
	{
		$CI =& get_instance();
		$class = $CI->router->fetch_method();

		return ($class == $controller) ? 'active' : NULL;
	}
}

if (!function_exists('table')) {
	function table($id)
	{
		return '<table class="table table-striped table-hover table-bordered table-condensed table-responsive" id="'
		. $id . '">
							<thead></thead>
							<tbody></tbody>
						</table>';
	}
}

if (!function_exists('btn_create_top')) {
	function btn_create_top($text, $onclick, $color)
	{
		if (!$color) $color = 'danger';
		if ($text) $text = '&nbsp; ' . $text;

		return '<button class="btn btn-' . $color . ' btn-flat btn-sm" onclick="' . $onclick . '">
		<i class="fa fa-plus-circle">' . $text . '</i></button>';
	}
}

if (!function_exists('title_breadcrumb')) {
	function title_breadcrumb($pagetitle, $breadcrumb)
	{
		return '<section class="content-header">' . $pagetitle . $breadcrumb . '</section>';
	}
}

if (!function_exists('modal_footer')) {
	function modal_footer($save_act, $form)
	{
		return Tb::panelControlGroup(
			Tb::button('Cancel',
				[
					'icon'         => Tb::ICON_BACKWARD,
					'type'         => Tb::BUTTON_TYPE_HTML,
					'url'          => '#',
					'class'        => 'btn-flat',
					'data-dismiss' => 'modal',
				]),
			Tb::buttonGroup(
				[
					'item' =>
						[
							'label'   => 'Save',
							'icon'    => Tb::ICON_FLOPPY_SAVE,
							'type'    => Tb::BUTTON_TYPE_SUBMIT,
							'onclick' => $save_act,
							'form'    => $form,
							'color'   => Tb::BUTTON_COLOR_PRIMARY,
							'class'   => 'btn-flat',
						],
					[
						'label' => 'Reset',
						'icon'  => Tb::ICON_REFRESH,
						'type'  => Tb::BUTTON_TYPE_RESET,
						'color' => Tb::BUTTON_COLOR_WARNING,
						'class' => 'btn-flat',
					],
				]
			));
	}
}



