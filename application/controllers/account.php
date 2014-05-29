<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($this->session->userdata('is_logged_in'))
        {
            redirect("account/profile");
        }
        //set title and load header and navigation first
        $data['pageTitle'] = "Login";
        $data['bodyid'] = "form";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('account/login');

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function login_validation()
    {
        //set title and load header and navigation first
        $data['pageTitle'] = "Login";
        $data['bodyid'] = "form";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        // login validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Emailadresse', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Passwort', 'required|xss_clean');

        if($this->form_validation->run())
        {
            redirect(base_url());
        }
        else
        {
            $this->load->view('account/login');
        }

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function validate_credentials()
    {
        $this->load->model('account_model');

        if ($user = $this->account_model->can_log_in())
        {
            $data = array(
                'userid' => $user['0']['id'],
                'prename' => $user['0']['prename'],
                'surname' => $user['0']['surname'],
                'email' => $this->input->post('email'),
                'rights' => $user['0']['rights'],
                'status' => $user['0']['status'],
                'is_logged_in' => 1
            );

            $this->session->set_userdata($data);
            return true;
        }
        else
        {
            $this->form_validation->set_message('validate_credentials', 'Benutzername oder Passwort ist falsch.');
            return false;
        }
    }

    public function register()
    {
        //set title and load header and navigation first
        $data['pageTitle'] = "Registrieren";
        $data['bodyid'] = "form";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->view('account/register');

        //finally load the footer
        $this->load->view('template/footer');
    }

    public function register_validation()
    {
        //set title and load header and navigation first
        $data['pageTitle'] = "Registrieren";
        $data['bodyid'] = "form";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('prename', 'Vorname', 'required|trim');
        $this->form_validation->set_rules('surname', 'Nachname', 'required|trim');
        $this->form_validation->set_rules('email', 'Emailadresse', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_error_delimiters('<li>', '</li>');

        if($this->form_validation->run())
        {
            $key = md5(uniqid());
            $this->load->model('account_model');

            if ($this->account_model->add_user($key))
            {
                $data['login'] = true;
            }
            else
            {
                $data['login'] = false;
            }

            $this->load->view('account/register_success', $data);
        }
        else
        {
            $this->load->view('account/register');
        }

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function profile()
    {
        // no access for not logged in users
        if (!$this->session->userdata('is_logged_in'))
        {
            redirect("account/login");
        }

        //set title and load header and navigation first
        $data['pageTitle'] = "Benutzerprofil";
        $data['bodyid'] = "account";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        $this->load->model('account_model');
        $userData = $this->account_model->getUser($this->session->userdata('userid'));

        $data['prename'] = $userData[0]['prename'];
        $data['surname'] = $userData[0]['surname'];
        $data['email'] = $userData[0]['email'];

        $this->load->view('account/profile', $data);

        // finally load the footer
        $this->load->view('template/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('overview');
    }
}