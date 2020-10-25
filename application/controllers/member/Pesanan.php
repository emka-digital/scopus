<?php
class Pesanan extends CI_Controller
{

    function index()
    {
        $data['title'] = ' invoice';
        $this->load->view('member/pesanan');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
