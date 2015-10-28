<?php
class Auction_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function select_all()
    {

        $this->db->limit(20);
        $this->db->order_by('create_time', 'desc');
        $this->db->select('*');
        $query = $this->db->get('grabinfo');
        return $query->result();
        a

    }
}
