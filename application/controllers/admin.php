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

        // load librarys and model
        $this->load->library('table');
        $this->load->model('account_model');

        // load all user data
        $allUsersInfo = $this->account_model->getAllUsers();

        for ($i = 0; $i < count($allUsersInfo); $i++)
        {
            $userid = $allUsersInfo[$i]['id'];
            $prename = $allUsersInfo[$i]['prename'];
            $surname = $allUsersInfo[$i]['surname'];
            $email = $allUsersInfo[$i]['email'];
            $action = '<button type="button" class="btn btn-success btn-xs">Bearbeiten</button>&nbsp;<button type="button" class="btn btn-danger btn-xs">Löschen</button>';
            if ($allUsersInfo[$i]['status'] == 1)
            {
                $action .= '&nbsp;<button type="button" class="btn btn-warning btn-xs">Deaktivieren</button>';
            }
            else
            {
                $action .= '&nbsp;<button type="button" class="btn btn-primary btn-xs">Aktivieren</button>';
            }

            $allUsers[] = array($userid, $prename, $surname, $email, $action);
        }

        // generate a html table with allUserdata
        $tmpl = array('table_open' => '<table class="table table-striped">');
        $this->table->set_template($tmpl);
        $this->table->set_heading('ID', 'Vorname', 'Nachname', 'Email', '');
        $data['usertable'] = $this->table->generate($allUsers);

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
}