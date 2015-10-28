<?php
class Web_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function select_all()
    {

        $this->db->limit(20);
        $this->db->order_by('grab_num', 'desc');
        $this->db->select('*');
        $query = $this->db->get('grabtargettype');
        return $query->result();

    }
}
