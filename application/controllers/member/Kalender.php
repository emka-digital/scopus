<?php
class Kalender extends CI_Controller
{

    function index()
    {
        $data['title'] = ' Calender';
        $this->load->view('member/calendar');
        $this->load->view('member/template/navbar');
        $this->load->view('member/template/footer');
        $this->load->view('member/template/head');
    }
}
