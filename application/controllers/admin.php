<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->usermanagement();
    }

    public function usermanagement()
    {
        if (!$this->session->userdata('is_logged_in') OR $this->session->userdata('rights') != 4)
        {
            redirect("admin/noaccess");
        }
        //set title and load header and navigation first
        $data['pageTitle'] = "Benutzerverwaltung";
        $data['bodyid'] = "account";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $data['usertable'] = $this->generateUserTable();
        $this->load->view('admin/usermanagement', $data);

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function switchuserstate($userid)
    {
        if (!$this->session->userdata('is_logged_in') OR $this->session->userdata('rights') != 4)
        {
            redirect("admin/noaccess");
        }
        //set title, bodyid and load header and navigation first
        $data['pageTitle'] = "Benutzerverwaltung";
        $data['bodyid'] = "account";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        // load account model
        $this->load->model('account_model');

        $this->account_model->switchuserstate($userid);

        $data['usertable'] = $this->generateUserTable();
        $this->load->view('admin/usermanagement', $data);

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function noaccess()
    {
        if (!$this->session->userdata('is_logged_in'))
        {
            redirect("account/login");
        }
        //set title, bodyid and load header and navigation first
        $data['pageTitle'] = "Benutzerverwaltung";
        $data['bodyid'] = "dashboard";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('admin/noaccess');

        // finally load the footer
        $this->load->view('template/footer');
    }

    private function generateUserTable()
    {
        // load librarys and model
        $this->load->library('table');
        $this->load->model('account_model');

        // load all user data
        $allUsersInfo = $this->account_model->getAllUsers();

        for ($i = 0; $i < count($allUsersInfo); $i++) {
            $userid = $allUsersInfo[$i]['id'];
            $prename = $allUsersInfo[$i]['prename'];
            $surname = $allUsersInfo[$i]['surname'];
            $email = $allUsersInfo[$i]['email'];
            $rights = $allUsersInfo[$i]['rights'];
            $action = '<a href="/mediadb/admin/edituser/' . $userid . '" class="btn btn-success btn-xs" role="button">Bearbeiten</a>&nbsp;';
            $action .= '<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal">Löschen</button>&nbsp;';
            if ($allUsersInfo[$i]['status'] == 1) {
                $action .= '<a href="/mediadb/admin/switchuserstate/' . $userid . '" class="btn btn-warning btn-xs" role="button">Deaktivieren</a>&nbsp;';
            } else {
                $action .= '<a href="/mediadb/admin/switchuserstate/' . $userid . '" class="btn btn-primary btn-xs" role="button">Aktivieren</a>&nbsp;';
            }

            $allUsers[] = array($userid, $prename, $surname, $email, $rights, $action);
        }

        // generate a html table with allUserdata
        $tmpl = array('table_open' => '<table class="table table-striped">');
        $this->table->set_template($tmpl);
        $this->table->set_heading('ID', 'Vorname', 'Nachname', 'Email', 'Rechte', '');
        return $this->table->generate($allUsers);
    }
}