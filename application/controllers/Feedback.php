<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Feedback
 */
class Feedback extends CI_Controller
{
    // TODO: Implement flash session output to the view.
    // TODO: Build up the ticket create modal.
    // TODO: Make count query for the open tickets.
    // TODO: Make count query for the closed tickets.
    // TODO: Make a count for the tickets that assigned to the logged in user.
    // TODO: Set all the tickets to a pagination.
    // TODO: Create a search form method.

    /**
     * Session data array.
     *
     * @var array
     */
    public $Session = [];

    /**
     * Feedback constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->library(['session', 'blade', 'form_validation']);
        $this->load->model('Tickets', '', true);
        $this->lang->load(['welcome']);
        $this->Session = $this->session->userdata('logged_in');
    }

    /**
     * Get All the tickets for the platform.
     *
     * @return blade view
     */
    public function index()
    {
        $data['tickets'] = Tickets::with('labels', 'platform')->get();
        $this->blade->render('feedback/index', $data);
    }

    /**
     * [METHOD]: Search tickets based on the user input.
     *
     * @return blade view.
     */
    public function search()
    {
        $this->blade->render('');
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

    /**
     * [VIEW]: Show the data for a specific ticket to the logged in user.
     *
     * @return blade view.
     */
    public function show()
    {
        $data['id']     = $this->uri->sqegment(3);
        $data['ticket'] = Tickets::with('labels', 'platform')->find($data['id']);

        return $this->blade->render('feedback/show', $data);
    }

    /**
     * [METHOD]: Destroy a feedback out off the system.
     */
    public function destroy()
    {
        $id = $this->uri->segment(3);

        if (Tickets::destroy($id)) {
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', '');
        }
    }

    /**
     * The pagination function for the tickets.
     *
     * @param string $uri      The baseurl for the page.
     * @param int    $segment  The URI segment for the curtrent page.
     * @param int    $perPage  Results per page.
     * @param string $query    The database query for the output;
     *
     * @return mixed
     */
    private function pagination($uri, $segment, $perPage, $query)
    {

    }
}