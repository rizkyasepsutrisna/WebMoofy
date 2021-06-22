<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Register_api extends REST_Controller{
    public function index_post(){
        $data = [
            'name' => $this->input->post('name'),

            'email' => $this->input->post('email'),

            'image' => 'default.jpg',

            'password' => md5($this->input->post('password1')),

            'role_id' => 2,

            'is_active' => 1,

            'date_created' => time()
        ];
        $this->db->insert('user', $data);
        if ($data > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'Data user berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => TRUE,
                'message' => 'Data user partially ditambahkan'
            ], REST_Controller::HTTP_OK);
        }
    }
}