<?php

class Admin extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

        $this->load->model('Film');
    }

    public function index()
    {
        $data['dataMovie'] = $this->Film->getDataMovie();


        $data['title'] = 'Moofy - Admin';

        $this->load->view('templates/admin_header');
        $this->load->view('admin/daftarfilm', $data);
        $this->load->view('templates/admin_footer');
    }

    public function prosesAddFilm()
    {
        $judulFilm = $this->input->post('judulfilm');
        $kategori = $this->input->post('kategori');
        $deskripsifilm = $this->input->post('deskripsifilm');
        // $gambar = $this->input->post('uploadgambar');
        $linkvideo = $this->input->post('linkvideo');
        $tahunrilis = $this->input->post('tahunrilis');
        $rating = $this->input->post('rating');

        $fiction = 0;
        $adventure = 0;
        $horror = 0;
        $action = 0;
        $thriller = 0;
        $comedy = 0;
        $criminal = 0;
        $fantasy = 0;
        $anime = 0;
        $scifi = 0;
        $mystery = 0;
        $drama = 0;
        $romance = 0;

        $config['upload_path']         = './gambar/';  // folder upload 
        $config['allowed_types']        = '*'; // jenis file
        // $config['max_size']             = 999999;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $file = $this->upload->data();

        if (!$this->upload->do_upload('gambar')) {
            redirect('/admin/tambahfilm/', 'refresh');
        } else {

            $namaGambar = $this->upload->data('file_name');


            if ($kategori == 'fiction') {
                $fiction = 1;
            } elseif ($kategori == 'adventure') {
                $adventure = 1;
            } elseif ($kategori == 'horror') {
                $horror = 1;
            } elseif ($kategori == 'action') {
                $action = 1;
            } elseif ($kategori == 'thriller') {
                $thriller = 1;
            } elseif ($kategori == 'comedy') {
                $comedy = 1;
            } elseif ($kategori == 'criminal') {
                $criminal = 1;
            } elseif ($kategori == 'fantasy') {
                $fantasy = 1;
            } elseif ($kategori == 'anime') {
                $anime = 1;
            } elseif ($kategori == 'sci-fi') {
                $scifi = 1;
            } elseif ($kategori == 'mystery') {
                $mystery = 1;
            } elseif ($kategori == 'drama') {
                $drama = 1;
            } elseif ($kategori == 'romance') {
                $romance = 1;
            }

            $data = [
                'fiction' => $fiction,
                'adventure' => $adventure,
                'horror' => $horror,
                'action' => $action,
                'thriller' => $thriller,
                'comedy' => $comedy,
                'criminal' => $criminal,
                'fantasy' => $fantasy,
                'anime' => $anime,
                'sci-fi' => $scifi,
                'mystery' => $mystery,
                'drama' => $drama,
                'romance' => $romance,

                'name' => $judulFilm,
                'dir' => $namaGambar,
                'rdate' => $tahunrilis,
                'description' => $deskripsifilm,
                'yt_link' => $linkvideo,
                'rating' => $rating
            ];

            $this->Film->tambahFilm($data);
            echo '<script>alert("Berhasil Tambah Film!!")</script>';
            redirect('/admin/index', 'refresh');
        }
    }



    public function editfilm()
    {
        $id = $this->uri->segment(3);

        $data['movie'] = $this->Film->GetMoveByID($id);


        $data['title'] = 'Moofy - Edit Film';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/editfilm', $id);
        $this->load->view('templates/admin_footer');
    }

    public function tambahfilm()
    {
        $data['title'] = 'Moofy - Tambah Film';
        $this->load->view('templates/daftarfilm_header', $data);
        $this->load->view('admin/tambahfilm');
        $this->load->view('templates/daftarfilm_footer');
    }

    public function prosesEditFilm()
    {
        $judulFilm = $this->input->post('judulfilm');
        $deskripsifilm = $this->input->post('deskripsifilm');
        // $gambar = $this->input->post('uploadgambar');
        $linkvideo = $this->input->post('linkvideo');
        $tahunrilis = $this->input->post('tahunrilis');
        $rating = $this->input->post('rating');
        $id = $this->input->post('idMovie');



        $config['upload_path']         = './gambar/';  // folder upload 
        $config['allowed_types']        = '*'; // jenis file
        // $config['max_size']             = 999999;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $file = $this->upload->data();



        if (!$this->upload->do_upload('gambar')) {
            echo '<script>alert("Upload Gambar, Wajib!!!")</script>';
            redirect('/admin/editfilm/' . $id, 'refresh');
        } else {

            $namaGambar = $this->upload->data('file_name');

            $data = [
                'name' => $judulFilm,
                'dir' => $namaGambar,
                'rdate' => $tahunrilis,
                'description' => $deskripsifilm,
                'yt_link' => $linkvideo,
                'rating' => $rating
            ];

            $this->Film->updateFilm($data, $id);
            echo '<script>alert("Berhasil Update!!")</script>';
            redirect('/admin/index', 'refresh');
        }
    }

    public function hapusFilm()
    {
        $id = $this->uri->segment(3);
        $this->Film->hapusFilm($id);
        echo '<script>alert("Berhasil Hapus!!")</script>';
        redirect('/admin/index', 'refresh');
    }
}
