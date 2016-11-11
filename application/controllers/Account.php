<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Account
 */
class Account extends MY_Controller
{
    /**
     * The logged in session data array.
     */
    public $Session = [];

    /**
     * Account constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['blade', 'session', 'form_validation']);
        $this->load->model('Logins', '', true);
        $this->lang->load(['welcome']);

        $this->Session = $this->session->userdata('logged_in');
    }

    /**
     * Get the profile view for the logged in user.
     *
     * @return blade view.
     */
    public function index()
    {
        $userId = $this->Session['id'];
        $data['user'] = Logins::find($userId);

        $this->blade->render('auth/profile', $data);
    }

    public function updateSec()
    {

    }

    public function updateInfo()
    {

    }
}