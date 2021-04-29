<?php

class Rating extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Moofy - Rating Film';
        $this->load->view('templates/ratingrecom_header', $data);
        $this->load->view('user/rating');
        $this->load->view('templates/ratingrecom_footer');
    }
}
