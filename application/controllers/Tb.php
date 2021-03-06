<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tb extends CI_Controller
{

    /**
     * Index Page for this controller.
     *首页
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auction_m');
        $this->load->model('web_m');

    }

    public function index()
    {
        $data['rows'] = $this->auction_m->select_all();
        $this->load->view('/home/tb', $data);
        $this->load->view('/comm/foot');
    }

    public function web() //抓取网站列表

    {
        $data['rows'] = $this->web_m->select_all();
        $this->load->view('/home/web', $data);
        $this->load->view('/comm/foot');
    }
    public function re()
    {
        $data['rows'] = $this->tb_m->select_re();
        $this->load->view('/tb/re');
        $this->load->view('/comm/foot');
    }
}
