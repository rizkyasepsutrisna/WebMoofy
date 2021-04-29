<?php

class Allfilm extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();

        /*load database libray manually*/
        $this->load->database();

        /*load Model*/
        $this->load->model('knn_model');
    }

    public function index()
    {

        $result2 = json_decode(json_encode($this->knn_model->display_movies()), true);
        $resultaction = json_decode(json_encode($this->knn_model->display_action()), true);
        $resultadventure = json_decode(json_encode($this->knn_model->display_adventure()), true);
        $resultanime = json_decode(json_encode($this->knn_model->display_anime()), true);
        $resultcomedy = json_decode(json_encode($this->knn_model->display_comedy()), true);
        $resultcriminal = json_decode(json_encode($this->knn_model->display_criminal()), true);
        $resultdrama = json_decode(json_encode($this->knn_model->display_drama()), true);
        $resultfantasy = json_decode(json_encode($this->knn_model->display_fantasy()), true);
        $resultfiction = json_decode(json_encode($this->knn_model->display_fiction()), true);
        $resulthorror = json_decode(json_encode($this->knn_model->display_horror()), true);
        $resultmystery = json_decode(json_encode($this->knn_model->display_mystery()), true);
        $resultromance = json_decode(json_encode($this->knn_model->display_romance()), true);
        $resultthriller = json_decode(json_encode($this->knn_model->display_thriller()), true);
        $data['title'] = 'Moofy - Semua Film';
        $data['data2'] = $result2;
        $data['data3'] = $resultaction;
        $data['data4'] = $resultadventure;
        $data['data5'] = $resultanime;
        $data['data6'] = $resultcomedy;
        $data['data7'] = $resultcriminal;
        $data['data8'] = $resultdrama;
        $data['data9'] = $resultfantasy;
        $data['data10'] = $resultfiction;
        $data['data11'] = $resulthorror;
        $data['data12'] = $resultmystery;
        $data['data13'] = $resultromance;
        $data['data14'] = $resultthriller;
        $this->load->view('templates/ratingrecom_header', $data);
        $this->load->view('user/allfilm');
        $this->load->view('templates/ratingrecom_footer');
    }
}
