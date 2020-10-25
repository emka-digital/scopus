<?php
class Dasboard extends CI_Controller
{

    function index()
    {
        $data['title'] = ' Dasboard';
        $this->load->view('member/dasboard');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
