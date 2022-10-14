<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_Tracking extends CI_Controller
{
	public function __construct()
	{
		Parent::__construct();
		is_logged_in();
		$this->load->model('Model_Tracking', 'tracking');
	}

	public function index()
	{
		$data['title'] = 'List Tracking';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['tracking'] = $this->tracking->get_trim();

		$this->load->view('template_oznet/header', $data);
		$this->load->view('template_oznet/sidebar', $data);
		$this->load->view('administrator/tracking/index', $data);
		$this->load->view('template_oznet/footer');
	}

	public function index2()
	{
		$data['title'] = 'List Tracking';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['tracking'] = $this->tracking->get_trim();

		$this->load->view('template_oznet/header', $data);
		$this->load->view('template_oznet/sidebar', $data);
		$this->load->view('administrator/tracking/index2');
		$this->load->view('template_oznet/footer');
	}




	public function get_data()
	{
		// Datatables Variables
		$draw = intval($this->input->get("draw"));

		$this->db->order_by('id_po', 'desc');
		$this->db->where("id_po >", 0);
		$query = $this->db->get("v_status");
		$data = [];
		$no = 0;
		foreach ($query->result() as $r) {
			$this->db->where('id_trim', $r->id_trim);
			$s = $this->db->get('tb_trim_detail');
			$l = $s->num_rows();

			$this->db->where('id_trim', $r->id_trim);
			$this->db->distinct('id_supplier');
			$this->db->select('id_supplier');
			$s = $this->db->get('v_trimorder_fix');
			$lu = $s->num_rows();

			// $this->db->where('id_trim', $r->id_trim);
			// $this->db->distinct('item_description');
			// $this->db->select('item_description');
			// $s = $this->db->get('v_trimorder_fix');
			// $lx = $s->num_rows();



			$this->db->where('id_po', $r->id_po);
			$s = $this->db->get('tb_purchase_order_detail');
			$li = $s->num_rows();




			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<a class="text-danger font-weight-bold" href="javascript:void(0)" title="view" onclick="view_trim(' . "'" . $r->id_trim . "'" . ')"> ' . $r->trim_code . '</a>';
			$row[] = $r->trim_mo;
			$row[] = $r->trim_date;
			$row[] = $l . ' itm ,' . $lu . ' sup ';

			$row[] = $r->trim_status == 'Request' ? '<a class="badge badge-warning">' . $r->trim_status . '</a>' : '<a class="badge badge-success">' . $r->trim_status . '</a>';
			$row[] = '<a class="text-danger font-weight-bold" href="javascript:void(0)" title="view" onclick="view_data(' . "'" . $r->id_po . "'" . ')"> ' . $r->po_no . '</a>';

			$row[] = $r->request_date;
			$row[] = $li;

			$row[] = $r->po_status == 'Process' ? '<a class="badge badge-warning">' . $r->po_status . '</a>' : '<a class="badge badge-success">' . $r->po_status . '</a>';
			$row[] = $r->supplier_name;
			$data[] = $row;
		};

		$result = array(
			"draw" => $draw,
			// "recordsTotal" => $query->num_rows(),
			// "recordsFiltered" => $query->num_rows(),
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}



	public function get_trim()
	{
		// Datatables Variables
		$draw = intval($this->input->get("draw"));
		$this->db->order_by("id_trim", "desc");
		$this->db->where("id_trim >", 0);
		$this->db->where("trim_status", 'Request');
		$query = $this->db->get("tb_trim_order");
		$data = [];
		$no = 0;

		foreach ($query->result() as $r) {
			$this->db->where('id_trim', $r->id_trim);
			$s = $this->db->get('tb_trim_detail');
			$l = $s->num_rows();


			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $r->trim_code;
			$row[] = $r->trim_mo;
			$row[] = $r->trim_style;
			$row[] = $r->trim_destination;
			$row[] = $r->trim_date;
			$row[] = $r->trim_status == 'Request' ? '<a class="badge badge-warning">' . $r->trim_status . '</a>' : '<a class="badge badge-success">' . $r->trim_status . '</a>';
			$row[] = $l;
			$row[] = $r->user;


			$data[] = $row;
		};

		$result = array(
			"draw" => $draw,
			"recordsTotal" => $query->num_rows(),
			"recordsFiltered" => $query->num_rows(),
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}



	public function remove($id)
	{
		//delete fil
		$this->tracking->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



	public function detail_status($id)
	{
		// Datatables Variables

		$querc = $this->tracking->get_detil_status($id);
		$data = [];
		$no = 0;

		foreach ($querc->result() as $r) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $r->item_code;
			$row[] = $r->item_description;
			$row[] = $r->remark;
			$row[] = $r->supplier_name;
			$row[] = $r->size_code;
			$row[] = $r->color;
			$row[] = $r->qty;
			$row[] = $r->item_price;
			//add html for action
			$data[] = $row;
		};

		$result = array(
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}
	public function detail_trim($id)
	{
		// Datatables Variables

		$querc = $this->tracking->get_detil_trim($id);
		$data = [];
		$no = 0;

		foreach ($querc->result() as $r) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $r->item_code;
			$row[] = $r->item_description;
			$row[] = $r->item_remark;
			$row[] = $r->supplier_name;
			$row[] = $r->size_code;
			$row[] = $r->color;
			$row[] = $r->qty;
			$row[] = $r->item_price;
			//add html for action
			$data[] = $row;
		};

		$result = array(
			"data" => $data
		);

		echo json_encode($result);
		exit();
	}




	public function add_tracking()
	{
		$data['title'] = 'Add tracking';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['tracking'] = $this->tracking->get_tracking();


		$this->load->view('template_oznet/header', $data);
		$this->load->view('template_oznet/sidebar', $data);

		$this->load->view('administrator/tracking/add_tracking', $data);
		$this->load->view('template_oznet/footer');
	}

	public function add_data()
	{

		$data = [
			'tracking_name' => $this->input->post('tracking_name'),
			'tracking_address' => $this->input->post('tracking_address'),
			'tracking_phone' => $this->input->post('tracking_phone'),
			'tracking_fax' => $this->input->post('tracking_fax'),
			'tracking_email' => $this->input->post('tracking_email'),
			'tracking_attention' => $this->input->post('tracking_attention'),
			'remark' => $this->input->post('remark')
		];

		$this->db->insert('tb_tracking', $data);


		$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">Data added</div>');
		redirect('Controller_tracking');
	}

	public function delete_tracking($id)
	{
		$this->tracking->delete_trackings($id);
		$this->session->set_flashdata('message', '<div class= "alert alert-info" role="alert">Data Deleted</div>');
		redirect('Controller_tracking');
	}


	public function edit_tracking($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit tracking';

		$data['tracking'] = $this->tracking->getID($id);

		$this->form_validation->set_rules('tracking_phone', 'tracking Code', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template_oznet/header', $data);
			$this->load->view('template_oznet/sidebar', $data);

			$this->load->view('administrator/tracking/edit_tracking', $data);
			$this->load->view('template_oznet/footer');
		} else {

			$data = [
				'tracking_name' => $this->input->post('tracking_name'),
				'tracking_address' => $this->input->post('tracking_address'),
				'tracking_phone' => $this->input->post('tracking_phone'),
				'tracking_fax' => $this->input->post('tracking_fax'),
				'tracking_email' => $this->input->post('tracking_email'),
				'tracking_attention' => $this->input->post('tracking_attention'),
				'remark' => $this->input->post('remark')
			];


			$this->db->where('id_tracking', $this->input->post('id_tracking'));
			$this->db->update('tb_tracking', $data);
			$this->session->set_flashdata('message', '<div class= "alert alert-success" role="alert">tracking edited</div>');
			redirect('Controller_tracking');
		}
	}
}
