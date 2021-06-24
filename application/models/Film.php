<?php
class Film extends CI_Model
{
    public function tambahFilm($data)
    {
        $this->db->insert('movies1', $data);
    }

    public function getDataMovie()
    {
        $this->db->select('*');
        $this->db->from('movies1');
        $this->db->order_by('id_movies', 'ASC');

        return $this->db->get()->result();
    }

    public function GetMoveByID($id)
    {
        //$this->db->select('*');
        //$this->db->from('movies1');
        //$this->db->where('id_movies', $id);

        return $this->db->get_where('movies1',['id_movies' => $id])->row_array();
    }

    public function hapusFilm($id)
    {
        $this->db->where('id_movies', $id);
        $this->db->delete('movies1');
    }

    public function updateFilm($data, $id)
    {
        $this->db->where('id_movies', $id);
        $this->db->update('movies1', $data);
    }
}
