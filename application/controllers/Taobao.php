<?php
defined('BASEPATH') or exit('No direct script access allowed');

class taobao extends CI_Controller
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

        $this->load->library('pagination');
        $this->load->library('table');

        $config['base_url'] = 'http://www.1000auction.com/taobao/index';
        //$config['total_rows']      = $this->db->query("SELECT * FROM grabinfo;")->num_rows();
        $config['total_rows']      = '600';
        $config['per_page']        = 10;
        $config['num_links']       = 10;
        $config['first_link']      = '第一页';
        $config['last_link']       = '最后一页';
        $config['full_tag_open']   = '<ul class="pagination">';
        $config['full_tag_close']  = '</ul>';
        $config['first_tag_open']  = '<li>'; //“第一页”链接的打开标签。
        $config['first_tag_close'] = '</li>'; //“第一页”链接的关闭标签。
        $config['cur_tag_open']    = '<li class="active"><a>'; //“当前页”链接的打开标签。
        $config['cur_tag_close']   = '</a></li>'; //“当前页”链接的关闭标签。
        $config['prev_tag_open']   = '<li>'; //“上一页”链接的打开标签。
        $config['prev_tag_close']  = '</li>'; //“上一页”链接的关闭标签。
        $config['next_tag_open']   = '<li>'; //“下一页”链接的打开标签。
        $config['next_tag_close']  = '</li>'; //“下一页”链接的关闭标签。
        $config['num_tag_open']    = '<li>'; //“数字”链接的打开标签。
        $config['num_tag_close']   = '</li>';
        $config['last_tag_open']   = '<li>'; //“最后一页”链接的打开标签。
        $config['last_tag_close']  = '</li>'; //“最后一页”链接的关闭标签。
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['rows'] = $this->auction_m->select_tb_by('grabinfo', $config['per_page'], 'initial_price', 'desc');

        $this->load->view('/taobao/tb', $data);
        $this->load->view('/comm/foot');
    }

    public function web() //抓取网站列表

    {
        $data['rows'] = $this->web_m->select_all();

        $this->load->view('/home/web', $data);
        $this->load->view('/comm/foot');
    }
}
