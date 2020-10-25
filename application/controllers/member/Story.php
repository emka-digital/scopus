<?php
class Story extends CI_Controller
{

    function index()
    {
        $data['title'] = ' Story Pemesanan';
        $this->load->view('member/story');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
