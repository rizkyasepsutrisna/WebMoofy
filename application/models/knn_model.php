<?php
class knn_model extends CI_Model
{
        /*View*/
        function display_movies()
        {
                $query = $this->db->query("select * from movies1");
                return $query->result();
        }

        function display_action()
        {
                $query = $this->db->query("select * from movies1 where action IN ('1')");
                return $query->result();
        }

        function display_adventure()
        {
                $query = $this->db->query("select * from movies1 where adventure IN ('1')");
                return $query->result();
        }
        function display_anime()
        {
                $query = $this->db->query("select * from movies1 where anime IN ('1')");
                return $query->result();
        }
        function display_comedy()
        {
                $query = $this->db->query("select * from movies1 where comedy IN ('1')");
                return $query->result();
        }
        function display_criminal()
        {
                $query = $this->db->query("select * from movies1 where criminal IN ('1')");
                return $query->result();
        }
        function display_drama()
        {
                $query = $this->db->query("select * from movies1 where drama IN ('1')");
                return $query->result();
        }
        function display_fantasy()
        {
                $query = $this->db->query("select * from movies1 where fantasy IN ('1')");
                return $query->result();
        }
        function display_fiction()
        {
                $query = $this->db->query("select * from movies1 where fiction IN ('1')");
                return $query->result();
        }
        function display_horror()
        {
                $query = $this->db->query("select * from movies1 where horror IN ('1')");
                return $query->result();
        }
        function display_mystery()
        {
                $query = $this->db->query("select * from movies1 where mystery IN ('1')");
                return $query->result();
        }
        function display_romance()
        {
                $query = $this->db->query("select * from movies1 where romance IN ('1')");
                return $query->result();
        }
        function display_thriller()
        {
                $query = $this->db->query("select * from movies1 where thriller IN ('1')");
                return $query->result();
        }

        function get_user_history()
        {
                $query = $this->db->query("select * from history where id_user=" . $this->session->userdata('id'));
                return $query->result();
        }
        function check_history($table, $where)
        {
                return $this->db->get_where($table, $where);
        }

        function display_rated_movies()
        {
                $query = $this->db->query("select * from movies1 ORDER BY rating ASC limit 10");
                return $query->result();
        }

        function display_header_movies()
        {
                $query = $this->db->query("select * from movies1 ORDER BY RAND() ASC limit 5");
                return $query->result();
        }
}
