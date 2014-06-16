<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie extends CI_Controller
{
    public function index()
    {
        $this->overview();
    }

    public function overview()
    {
        //set title and load header and navigation first
        $data['pageTitle'] = "Filmübersicht";
        $data['bodyid'] = "dashboard";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        //initialize other classes
        $this->load->model('movie_model');
        $this->load->library('table');


        //load movies from DB
        $allMovies = $this->movie_model->getAllMovies();

        //echo '<pre>';
        //print_r($allMovies);
        //echo '</pre>';

        for ($i = 0; $i < count($allMovies); $i++)
        {
            $tmdbid = $allMovies[$i]['tmdbid'];
            $title = $allMovies[$i]['title'];
            $adddate = $allMovies[$i]['adddate'];
            $releasedate = $allMovies[$i]['releasedate'];
            $rating = $allMovies[$i]['rating'];
            $videoquali = $allMovies[$i]['videoquali'];
            $status = $allMovies[$i]['status'];

            $titellink = '<a href="'.base_url().'movie/detail/'.$tmdbid.'">'.$title.'</a>';

            $movieInfos[] = array($titellink, $adddate, $releasedate, $rating, $videoquali);

        }

        //create html table
        $tmpl = array('table_open' => '<table id="movietable" class="table table-striped">');
        $this->table->set_template($tmpl);
        $this->table->set_heading('Filmtitel','Hinzugefügt', 'Erschienen', 'Rating', 'Qualität');

        $data['movietable'] = $this->table->generate($movieInfos);

        //load movieoverview
        $this->load->view('movie/overview', $data);

        //finally load the footer
        $this->load->view('template/footer');
    }

    public function detail($tmdbid = false)
    {
        if (!$tmdbid)
        {
            redirect(base_url()."movie");
        }
        //set title and load header and navigation first
        $data['pageTitle'] = "Filmdetail";
        $data['bodyid'] = "dashboard";
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');

        // initialize tmdb class and table class
        $this->load->library('tmdb');
        $data['movieDetails'] = $this->tmdb->movieDetail($tmdbid);

        //load movieoverview
        $this->load->view('movie/detail', $data);

        //finally load the footer
        $this->load->view('template/footer');
    }
}