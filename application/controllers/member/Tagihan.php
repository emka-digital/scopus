<?php
class Tagihan extends CI_Controller
{

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_member', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Invoice';
        $this->load->view('member/tagihan', $data);
        $this->load->view('member/template/navbar', $data);
        $this->load->view('member/template/head', $data);
        $this->load->view('member/template/footer', $data);
    }
}
