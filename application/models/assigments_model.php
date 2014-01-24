<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Assigments_model extends CI_Model {
    public function __construct()
    {

    }

    public function add_assigment() {
        $data = array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
            'status'=>$this->input->post('status'),
            'author'=>$this->session->userdata('username'),
        );
        $this->db->insert('assigments',$data);
    }

    public function get_all_assigments() {

        $this->db->select('*');
        $this->db->from('assigments');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete_assigment($id)
    {
        $this->db->delete('assigments', array('id' => $id));
    }

}
