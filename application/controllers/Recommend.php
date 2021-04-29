<?php

class Recommend extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Moofy - Recommended Film';
        $this->load->view('templates/ratingrecom_header', $data);
        $this->load->view('user/recommend');
        $this->load->view('templates/ratingrecom_footer');
    }
}
