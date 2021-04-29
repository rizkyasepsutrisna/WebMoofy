<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Playfilm extends CI_Controller
{
  public function __construct()
  {

    parent::__construct();

    // load base_url
    $this->load->helper('url');
    $this->load->model('movie_detail');
    $this->load->model('knn_model');
  }
  public function index()
  {
    $select = $this->uri->segment(3);
    $hasil = $this->movie_detail->display_detail($select);

    $has = json_decode(json_encode($hasil), true)[0];
    $data = array();
    $result = json_decode(json_encode($this->knn_model->get_user_history()), true);
    $result2 = json_decode(json_encode($this->knn_model->display_rated_movies()), true);
    $result3 = json_decode(json_encode($this->knn_model->display_header_movies()), true);

    $h = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    foreach ($result as $row) {

      // echo $row['genre'] == 'action';
      switch ($row['genre']) {
        case 'fiction':
          $h[0] += 1;
          break;
        case 'adventure':
          $h[1] += 1;
          break;
        case 'horror':
          $h[2] += 1;
          break;
        case 'action':
          $h[3] += 1;
          break;
        case 'thriller':
          $h[4] += 1;
          break;
        case 'comedy':
          $h[5] += 1;
          break;
        case 'criminal':
          $h[6] += 1;
          break;
        case 'fantasy':
          $h[7] += 1;
          break;
        case 'anime':
          $h[8] += 1;
          break;
        case 'sci-fi':
          $h[9] += 1;
          break;
        case 'mystery':
          $h[10] += 1;
          break;
        case 'drama':
          $h[11] += 1;
          break;
        case 'romance':
          $h[12] += 1;
          break;
        default:
          break;
      }
    }
    $h_sort = $h;
    rsort($h_sort);
    $top3 = array_slice($h_sort, 0, 3);
    $i = 0;
    foreach ($h as $val) {
      if (in_array($val, $top3)) {
        $h[$i] = 1;
      } else {
        $h[$i] = 0;
      }
      $i += 1;
    }
    array_push($data, $h);
    $movies = json_decode(json_encode($this->knn_model->display_movies()), true);
    // print_r($movies);
    foreach ($movies as $f) {

      array_push($data, array($f['fiction'], $f['adventure'], $f['horror'], $f['action'], $f['thriller'], $f['comedy'], $f['criminal'], $f['fantasy'], $f['anime'], $f['sci-fi'], $f['mystery'], $f['drama'], $f['romance'], $f['name'], $f['dir'], $f['rdate'], $f['description'], $f['yt_link'], $f['rating']));
      // print_r($f);

    }
    // // print_r($data);
    $distances = $data;
    array_walk($distances,  array('self', 'euclideanDistance'), $data);

    $neighbors = $this->getNearestNeighbors($distances, 0, 10);
    $d['recommend'] = $this->getLabel($data, $neighbors);
    $d['data2'] = $result2;
    $d['data3'] = $result3;

    $d['title'] = 'Moofy - Tonton Trailer';
    $d['data'] = $has;
    if ($has['fiction'] == 1) {
      $this->save_genre('fiction', $has['id_movies']);
    }
    if ($has['adventure'] == 1) {
      $this->save_genre('adventure', $has['id_movies']);
    }
    if ($has['horror'] == 1) {
      $this->save_genre('horror', $has['id_movies']);
    }
    if ($has['action'] == 1) {
      $this->save_genre('action', $has['id_movies']);
    }
    if ($has['thriller'] == 1) {
      $this->save_genre('thriller', $has['id_movies']);
    }
    if ($has['comedy'] == 1) {
      $this->save_genre('comedy', $has['id_movies']);
    }
    if ($has['criminal'] == 1) {
      $this->save_genre('criminal', $has['id_movies']);
    }
    if ($has['fantasy'] == 1) {
      $this->save_genre('fantasy', $has['id_movies']);
    }
    if ($has['anime'] == 1) {
      $this->save_genre('anime', $has['id_movies']);
    }
    if ($has['sci-fi'] == 1) {
      $this->save_genre('sci-fi', $has['id_movies']);
    }
    if ($has['mystery'] == 1) {
      $this->save_genre('mystery', $has['id_movies']);
    }
    if ($has['drama'] == 1) {
      $this->save_genre('drama', $has['id_movies']);
    }
    if ($has['romance'] == 1) {
      $this->save_genre('romance', $has['id_movies']);
    }
    $this->load->view('templates/playfilm_header', $d);
    $this->load->view('user/playfilm');
    $this->load->view('templates/playfilm_footer');
  }
  function save_genre($genre, $id_movie)
  {
    $q = [
      'id_user' => $this->session->userdata('id'),
      'genre' => $genre,
      'id_movie' => $id_movie
    ];
    $cek = $this->knn_model->check_history("history", $q)->num_rows();
    if ($cek < 1) {
      // echo "gaada";
      $this->db->insert('history', $q);
    }
  }
  function euclideanDistance(&$sourceCoords, $sourceKey, $data)
  {
    $distances = array();
    list($a1, $b1, $c1, $d1, $e1, $f1, $g1, $h1, $i1, $j1, $k1, $l1, $m1) = $sourceCoords;
    // print_r($sourceCoords);
    foreach ($data as $destinationKey => $destinationCoords) {
      // Same point, ignore
      if ($sourceKey == $destinationKey) {
        continue;
      }
      list($a2, $b2, $c2, $d2, $e2, $f2, $g2, $h2, $i2, $j2, $k2, $l2, $m2) = $destinationCoords;
      $distances[$destinationKey] = sqrt(pow($a1 - $a2, 2) + pow($b1 - $b2, 2)
        + pow($c1 - $c2, 2)
        + pow($d1 - $d2, 2)
        + pow($e1 - $e2, 2)
        + pow($f1 - $f2, 2)
        + pow($g1 - $g2, 2)
        + pow($h1 - $h2, 2)
        + pow($i1 - $i2, 2)
        + pow($j1 - $j2, 2)
        + pow($k1 - $k2, 2)
        + pow($l1 - $l2, 2)
        + pow($m1 - $m2, 2));
    }
    asort($distances);
    $sourceCoords = $distances;
  }

  /**
   * Returns n-nearest neighbors
   *
   * @param array $distances Distances generated above ^
   * @param mixed $key Array key of source location
   * @param int $num Of neighbors to fetch
   * @return array Of nearest neighbors
   */
  function getNearestNeighbors($distances, $key, $num)
  {
    return array_slice($distances[$key], 0, $num, true);
  }
  // getRecommendation();
  /**
   * Gets result label from associated data
   *
   * @param array $data 
   * @param array $neighbors Result from getNearestNeighbors()
   * @return string label
   */
  function getLabel($data, $neighbors)
  {
    $results = array();
    $neighbors = array_keys($neighbors);
    foreach ($neighbors as $neighbor) {
      $results[] = $data[$neighbor];
      // print_r($results);
    }
    // $values = array_count_values($results);
    // $values = array_flip($values);
    // ksort($values);
    // return array_pop($values);
    return $results;
  }
}
