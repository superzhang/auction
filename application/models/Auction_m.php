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

    }

    public function select_from_page($db, $per_page, $order_by, $asc)
    {
        $this->db->order_by($order_by, $asc);
        $page = $this->uri->segment(3);
        $q    = $this->db->get($db, $per_page, $this->uri->segment(3));
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
