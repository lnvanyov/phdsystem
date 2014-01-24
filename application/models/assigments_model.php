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

    public function get_assigment($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('assigments');
        foreach ($query->result() as $row) {
            return $row;
        }
    }

    public function update_assigment()
    {
        $data = array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
            'status'=>$this->input->post('status'),
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('assigments', $data);
        return true;
    }

    public function delete_assigment($id)
    {
        $this->db->delete('assigments', array('id' => $id));
    }

}
