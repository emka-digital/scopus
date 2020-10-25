<?php
class Cetak extends CI_Controller
{

    function index()
    {
        $data['title'] = ' print';
        $this->load->view('member/template/print');
    }
}
