<?php 
class movie_detail extends CI_Model 
{
    function display_detail($name)
    {
        $query=$this->db->query("select * from movies1 where name='".urldecode($name)."'");
        return $query->result();
    }
}
?>