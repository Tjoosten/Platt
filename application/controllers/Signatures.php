<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Signature
 */
class Signature extends MY_Controller
{
    /**
     * Signature constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->model('signatures', '', true);
        $this->load->library(['session', 'form_validation']);
    }

    /**
     * Insert a signature.
     */
    public function insert()
    {

    }

    /**
     * Destroy a invalid signature.
     */
    public function destroy()
    {

    }
}