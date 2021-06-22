<?php


defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Film_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Film');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if($id === null){
            $Film = $this->Film->getDataMovie();
        }else {
            $Film = $this->Film->GetMoveByID($id);
        }

        if($Film){
            $this->response([
                'status' => true,
                'data' => $Film
            ], REST_Controller::HTTP_OK);
        }else {
            $this->response([
                'status' => FALSE,
                'message' => 'id film tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
