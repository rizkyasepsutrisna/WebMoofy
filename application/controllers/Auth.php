<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '');
            $data['title'] = 'Sign In - Moofy';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/signin');
            $this->load->view('templates/auth_footer');
        }
    }

    public function signin_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
        );
        $cek = $this->login->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $d = json_decode(json_encode($this->login->get_user_detail($email, md5($password))), true);

            $data_session = array(
                'nama' => $email,
                'id' => $d[0]['id'],
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url("dashboard"));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-dark" role="alert">
           Email atau Password Salah.</div>');

            $data['title'] = 'Sign In - Moofy';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/signin');
            $this->load->view('templates/auth_footer');
        }
    }


    public function signup_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah ada yang pakai'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sign Up - Moofy';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/signup');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => md5($this->input->post('password1')),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-dark" role="alert">
            Akun anda berhasil di buat. Silahkan login</div>');
            redirect('auth', 'refresh');
        }
    }

    public function signin_admin()
    {
        $data['title'] = 'Sign In Admin - Moofy';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/signin_admin');
        $this->load->view('templates/auth_footer');
    }

    public function signup_admin()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah ada yang pakai'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sign Up Admin - Moofy';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/signup_admin');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-dark" role="alert">
            Akun Admin anda berhasil di buat. Silahkan login</div>');
            redirect('auth/signin_admin', 'refresh');
        }
    }

    //public function resetpassword()
    //{
    //    $data['title'] = 'Reset Password - Moofy';
    //    $this->load->view('templates/auth_header', $data);
    //    $this->load->view('auth/resetpassword');
    //    $this->load->view('templates/auth_footer');
    //}
}
