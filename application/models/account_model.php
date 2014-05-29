<?php

class Account_model extends CI_Model
{

    public function can_log_in()
    {
        // first extract the salt to generate pw
        $this->db->where('email', $this->input->post('email'));
        $query1 = $this->db->get('users');
        $user = $query1->result_array();
        $salt = $user['0']['salt'];

        // check pw with salt
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', sha1($salt.$this->input->post('password')));
        $query2 = $this->db->get('users');

        if ($query2->num_rows() == 1)
        {
            return $user;
        }
        else
        {
            return false;
        }
    }

    public function getUser($userid)
    {
        $this->db->where('id', $userid);
        $query = $this->db->get('users', 1);
        return $query->result_array();
    }

    public function getAllUsers()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function add_user($key)
    {
        $passwordsalt = md5(uniqid());

        $data = array(
            'prename' => $this->input->post('prename'),
            'surname' => $this->input->post('surname'),
            'email' => $this->input->post('email'),
            'salt' => $passwordsalt,
            'password' => sha1($passwordsalt.$this->input->post('password')),
            'rights' => 0,
            'status' => 0,
            'authkey' => $key
        );

        $query = $this->db->insert('users', $data);

        if ($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}