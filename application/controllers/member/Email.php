<?php
class Email extends CI_Controller
{

    function index()
    {
        $data['title'] = ' email';
        $this->load->view('member/email');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
