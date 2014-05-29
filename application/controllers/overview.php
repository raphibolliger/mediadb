<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

    public function index()
    {
        $this->startpage();
    }

    public function startpage()
    {
        //set title and load header and navigation first
        $data['pageTitle'] = "Übersicht";
        $data['bodyid'] = "dashboard";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        // do somthing with data


        // load content
        $this->load->view('overview/startpage', $data);

        // load footer
        $this->load->view('template/footer');
    }

}