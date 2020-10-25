<?php
class Dasboard extends CI_Controller
{

    function index()
    {
        $data['title'] = ' profile';
        $this->load->view('member/profile');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
