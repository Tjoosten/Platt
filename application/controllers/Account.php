<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['blade']);
        $this->load->model('Logins', '', true);
    }

    public function index()
    {

    }

    public function updateSec()
    {

    }

    public function updateInfo()
    {

    }
}