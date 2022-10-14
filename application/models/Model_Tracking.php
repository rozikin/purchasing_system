<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Tracking extends CI_Model

{

    public function get_tracking()
    {
        $query = "SELECT DISTINCT id_trim,trim_code,trim_mo,trim_date,trim_status,po_no,request_date,po_status from v_status where id_trim>0 ORDER BY id_po DESC";
        return $this->db->query($query)->result_array();
    }
    public function get_trim()
    {
        $query = "SELECT * from tb_trim_order where id_trim >0 order by id_trim asc";
        return $this->db->query($query)->result_array();
    }
    public function get_po()
    {
        $query = "SELECT DISTINCT id_po,po_no,request_date  from v_status";
        return $this->db->query($query)->result_array();
    }

    public function get_detil_status($id)
    {
        return $this->db->get_where('v_purchase_order_detail',  ['id_po' => $id]);
    }
    public function get_detil_trim($id)
    {
        return $this->db->get_where('v_trimorder_detail',  ['id_trim' => $id]);
    }


    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_status');
    }

    public function delete_statuss($id)
    {
        $this->db->where('id_status', $id);
        $this->db->delete('tb_status');
    }

    public function getID($id)
    {
        return $this->db->get_where('tb_status',  ['id_status' => $id])->row_array();
    }















    public function editDataMenu()
    {
        $data = [
            'menu' => $this->input->post('menu'),
            'icon' => $this->input->post('icon')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function hapusDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }





    public function hapussubmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    public function editData()
    {
        $data = [
            'title' => $this->input->post('title'),
            'menu_id' => $this->input->post('menu_id'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
}
