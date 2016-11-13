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
     *
     * @return redirct
     */
    public function insert()
    {

    }

    /**
     * Destroy a invalid signature.
     *
     * @return redirect
     */
    public function destroy()
    {
        $sid = $this->uri->segment(3);

        if (Signatures::destroy($sid)) {
            $this->session->set_flash('class', '');
            $this->session->set_flash('message', '');
        }
    }
}