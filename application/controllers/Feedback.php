<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Feedback
 */
class Feedback extends CI_Controller
{
    /**
     * Feedback constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['session', 'form_validation']);
        $this->load->model('feedbask');
    }

    /**
     * [METHOD]: Create a new support ticket in the system.
     *
     * @return mixed
     */
    public function insert()
    {
        if ($this->form_validation->run() === true) {
            // Validation passes
        } else {
            // Validation fails.
        }

        redirect($this->agent->refferer(), 'back');
    }

    public function show()
    {

    }

    public function destroy()
    {

    }
}