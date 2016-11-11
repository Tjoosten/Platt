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
        $this->load->library(['session', 'blade', 'form_validation']);
        $this->load->model('Tickets', '', true);
    }

    /**
     * Get All the tickets for the platform.
     */
    public function index()
    {
        $data['all'] = Tickets::with('labels', 'platform')->get();
        $this->blade->render('', $data);
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

    /**
     * [METHOD]: Destroy a feedback out off the system.
     */
    public function destroy()
    {
        $id = $this->uri->segment(3);

        if (Tickets::destroy($id)) {
            $this->session->set_flashdata('', '');
            $this->session->set_flashdata('', '');
        }
    }
}