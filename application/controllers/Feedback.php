<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Feedback
 */
class Feedback extends CI_Controller
{
    /**
     * Session data collection. 
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

        $this->Session = $this->session->userdata('logged_in');
    }

    /**
     * Get All the tickets for the platform.
     */
    public function index()
    {
        $data['tickets'] = Tickets::with('labels', 'platform')->get();
        $this->blade->render('tickets/index', $data);
    }

    /**
     * [METHOD]: Create a new support ticket in the system.
     *
     * @return mixed
     */
    public function insert()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('category_id', 'Category', 'trim|required');
        $this->form_validation->set_rules('heading', 'Heading', 'trim|required'); 

        if ($this->form_validation->run() === true) {
            // Validation passes

            // Set the inputs.
            $input['email']       = $this->input->post('email');
            $input['description'] = $this->input->post('description'); 
            $input['category_id'] = $this->input->post('category_id');
            $input['heading']     = $this->input->post('heading');

            // Insert and set flash error message. 
            if (Tickets::create($input)) {
                $alert   = 'alert alert-success'; 
                $message = 'uw ticket is aangemaakt in het systeem. Bedankt voor het melden.';
            }
        } else {
            // Validation fails            

            // Set the flash session data. 
            $alert   = 'alert alert-danger';
            $message = 'Wij konden u ticket niet registreren in het systeem.';
        }

        // Set flash message based on form validation. 
        $this->session->set_flashdata('class', $alert);
        $this->session->set_flashdata('message', $message);

        redirect($_SERVER['HTTP_REFERER'], 'back');
    }

    /**
     * [METHOD]: See the specific ticket. 
     *
     *
     * @return view.
     */
    public function show()
    {
        $id = $this->uri->segment(3);

        $data['ticket'] = Tickets::with('labels', 'application')->find($id);
        $this->blade->render('tickets/show', $data);
    }

    /**
     * [METHOD]: github hook. To publish tickets to github. 
     *
     * @return redirect
     */
    public function githubHook() 
    {

    }


    /**
     * [METHOD]: Destroy a feedback out off the system.
     *
     * @return redirect
     */
    public function destroy()
    {
        $id = $this->uri->segment(3);

        if (Tickets::destroy($id)) {
            $this->session->set_flashdata('class', '');
            $this->session->set_flashdata('message', '');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}