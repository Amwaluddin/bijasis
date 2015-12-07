<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		/* COMMON :: ADMIN & PUBLIC */
		/* Load */
		$this->load->database();
		$this->load->config('common/dp_config');
		$this->load->config('common/dp_language');
		$this->load->library(['form_validation', 'ion_auth', 'template']);
		$this->load->helper(['array', 'language', 'url']);
		$this->load->model('common/prefs_model');

		/* Data */
		$this->data['lang'] = element($this->config->item('language'), $this->config->item('language_abbr'));
		$this->data['charset'] = $this->config->item('charset');
		$this->data['frameworks_dir'] = $this->config->item('frameworks_dir');
		$this->data['plugins_dir'] = $this->config->item('plugins_dir');
		$this->data['avatar_dir'] = $this->config->item('avatar_dir');
	}
}

class Admin_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		} elseif (!$this->ion_auth->is_admin()) {
			return show_error('You must be an administrator to view this page.');
		} else {
			/* Load */
			$this->load->config('admin/dp_config');
			$this->load->library('admin/page_title');
			$this->load->library('admin/breadcrumbs');
			$this->load->model('admin/core_model');
			$this->load->helper('menu');
			$this->lang->load(['admin/main_header', 'admin/main_sidebar', 'admin/footer', 'admin/actions']);

			/* Load library function  */
			$this->breadcrumbs->unshift(0, $this->lang->line('menu_dashboard'), 'admin/dashboard');

			/* Data */
			$this->data['title'] = $this->config->item('title');
			$this->data['title_lg'] = $this->config->item('title_lg');
			$this->data['title_mini'] = $this->config->item('title_mini');
			$this->data['admin_prefs'] = $this->prefs_model->admin_prefs();
			$this->data['user_login'] = $this->prefs_model->user_info_login($this->ion_auth->user()->row()->id);

			if ($this->router->fetch_class() == 'dashboard') {
				$this->data['dashboard_alert_file_install'] = $this->core_model->get_file_install();
				$this->data['header_alert_file_install'] = NULL;
			} else {
				$this->data['dashboard_alert_file_install'] = NULL;
				$this->data['header_alert_file_install'] = NULL;
			}
		}
	}
}

class Public_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->ion_auth->logged_in() AND $this->ion_auth->is_admin()) {
			$this->data['admin_link'] = TRUE;
		} else {
			$this->data['admin_link'] = FALSE;
		}

		if ($this->ion_auth->logged_in()) {
			$this->data['logout_link'] = TRUE;
		} else {
			$this->data['logout_link'] = FALSE;
		}
	}
}