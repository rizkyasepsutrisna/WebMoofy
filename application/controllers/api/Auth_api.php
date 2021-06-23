<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Auth_api extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_post()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['role_id'] == 2) {
                if (password_verify($pass, $user['password'])) {
                    $this->response([
                        'status' => TRUE,
                        'data' => $user
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Maaf, password salah'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'Maaf, harus user yang bisa login di aplikasi'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'Maaf, email tersebut belum terdaftar'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
