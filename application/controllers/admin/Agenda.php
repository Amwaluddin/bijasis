<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->model('admin/agenda_model');
        $this->lang->load('admin/agenda');

        /* Title Page :: Common */
        $this->page_title->push(lang('menu_agenda'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_agenda'), 'admin/agenda');
    }

    public function index()
    {
        /* Breadcrumbs */
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        $this->data['dt_client_person'] = $this->agenda_model->dt_client_person();
        $this->data['dt_client_company'] = $this->agenda_model->dt_client_company();
        $this->data['price_cat'] = $this->agenda_model->dt_price_cat();
        $this->data['area'] = ['Jakarta'];
        $this->data['dt_price_cat'] = $this->agenda_model->dt_price_cat();

        /* Load Template */
        $this->template->admin_render('admin/agenda/index', $this->data);
    }

    public function list_agenda()
    {
        $list = $this->agenda_model->get_dt_agenda();
        $output = [
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->agenda_model->count_all($this->agenda_model->tb_agenda()),
            "recordsFiltered" => $this->agenda_model->count_filtered('agenda'),
            "data" => $list,
        ];

        //output to json format
        echo json_encode($output);
    }

    public function list_client()
    {
        $list = $this->agenda_model->get_dt_client();
        $sql = $this->agenda_model->select_client();
        $query = $this->db->query($sql);
        $output = [
            "draw" => $_POST['draw'],
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $this->agenda_model->count_filtered('client'),
            "data" => $list,
        ];

        //output to json format
        echo json_encode($output);
    }

    public function edit_client()
    {
        $id = $this->input->post('id');
        $data = $this->agenda_model->get_client_by_id($id);
        print(json_encode($data[0]));
    }

    public function edit_agenda()
    {
        $id = $this->input->post('id');
        $data = $this->agenda_model->get_agenda_by_id($id);

        print(json_encode($data[0]));
    }

    public function upsert_agenda()
    {
        $id = $this->input->post('id');
        $def_data = ['job_date', 'complete_date', 'client_id', 'desc', 'price_cat', 'price_id', 'process', 'priority', 'qty', 'bill_to', 'unit_price', 'area',];
        $data = $this->agenda_model->extract_data($def_data);
        if ($id > 0) {
            $this->agenda_model->update($this->agenda_model->tb_agenda(), ['id' => $id], $data);
        } else {
            $this->agenda_model->insert($this->agenda_model->tb_agenda(), $data);
            unset($data);
        }
        echo json_encode(["status" => TRUE]);
    }

    public function upsert_client()
    {
        $id = $this->input->post('id');
        $def_data = ['name', 'title'];
        $data = $this->agenda_model->extract_data($def_data);
        $data['type'] = 'person';

        if ($id > 0) {
            $this->agenda_model->update($this->agenda_model->tb_client(), ['id' => $id], $data);
        } else {
            $this->agenda_model->insert($this->agenda_model->tb_client(), $data);
            unset($data);
        }
        echo json_encode(["status" => TRUE]);
    }

    public function delete_client()
    {
        $id = $this->input->post('id');
        $this->agenda_model->delete($this->agenda_model->tb_client(), ['id' => $id]);
        echo json_encode(["status" => TRUE]);
    }

    public function DocPrice_Combobox()
    {
        $id = $this->input->post('id_cat');
        $res = $this->agenda_model->cb_doc_price_bypricecat($id);
        echo json_encode($res);
    }

    function dt_process_by_catid()
    {
        $cat_id = $this->input->post('id');
        $res = $this->agenda_model->dt_process_bycatid($cat_id);
        echo($res);

    }

    function cb_doc_by_price_catid()
    {
        $cat_id = $this->input->post('id');
        $query = "SELECT id, data->>'doc' AS text FROM " . $this->agenda_model->tb_prices() . "
			WHERE data->>'cat_id' = '" . $cat_id . "'";

        $json = $this->iam_database->q_result_array($this->db->query($query));

        echo json_encode($json);
    }

    function dt_priority_by_catid()
    {
        $cat_id = $this->input->post('cat_id');
        $query = $this->db->query("SELECT data FROM " . $this->agenda_model->tb_tags() . " WHERE id = '" . $cat_id . "'");
        $res = $query->result_array()[0]['data'];

        $sql = "SELECT key as id, VALUE  as text FROM jsonb_each_text('$res') WHERE key like 'note%' AND lower(value) not like '%res%'";
        $json = $this->iam_database->q_result_array($this->db->query($sql));

        echo json_encode($json);
    }

}
