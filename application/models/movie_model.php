<?php

class Movie_model extends CI_Model
{

    public function getAllMovies()
    {
        $query = $this->db->get('movie');
        return $query->result_array();
    }

}