<?php
class Order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-J7gLRBawUjFAuHtqwu2iE2OH', 'production' => false);
        $this->load->library('midtrans');
        $this->midtrans->config($params);
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['webinar'] = $this->db->get('tbl_webinar')->result_array();
        $data['title'] = 'Order';
        $this->load->view('member/order', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/footer', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/print', $data);
    }
    public function konfir_order()
    {
        if ($this->uri->segment(4)) {
            $id = $this->uri->segment(4);
            $data['webinar'] = $this->db->get('tbl_webinar')->result_array();
            $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Order Confirmation';
            $this->load->view('member/konfir_order', $data);
            $this->load->view('member/template/navbar', $data);
            $this->load->view('member/template/footer', $data);
            $this->load->view('member/template/head', $data);
            $this->load->view('member/template/print', $data);
        } else {
            redirect('member/order');
        }
    }
}
