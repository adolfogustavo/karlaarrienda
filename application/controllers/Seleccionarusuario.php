<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleccionarusuario extends CI_Controller {

    public function index()
    {
        $this->load->library('upload');
        $this->load->view('seleccionarusuario.php');
        $this->load->helper('url');
    }

}