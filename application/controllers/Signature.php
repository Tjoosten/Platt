<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Signature
 */
class Signature extends MY_Controller
{
    /**
     * @var array
     */
    public $Session = [];

    /**
     * Signature constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url']);
        $this->load->model('signatures', '', true);
        $this->load->library(['session', 'blade', 'form_validation']);

        $this->Session = $this->session->userdata('logged_in');
    }

    /**
     * Middleware for this controller.
     *
     * @return array
     */
    public function middleware()
    {
        return [];
    }

    /**
     * Backend index for the signatures.
     *
     * @return blade view
     */
    public function index()
    {
        $this->blade->render('signatures/index', $this->pagination());
    }

    /**
     * Insert a signature.
     *
     * @return redirect
     */
    public function insert()
    {
        // Validation is done by vue.js.
        // -------

        // Birth day calculation.
        $day   = $this->input->post('day');
        $month = $this->input->post('month');
        $year  = $this->input->post('year');

        $input['name']          = $this->input->post('name');
        $input['email']         = $this->input->post('email');
        $input['city']          = $this->input->post('city');
        $input['birth_date']    = $day . '/' . $month . '/' . $year;

        // var_dump($input);

        if (Signatures::create($input)) {
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The signature has been inserted');
        }

        redirect($_SERVER['HTTP_REFERER']);
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
            $this->session->set_flashdata('class', 'alert alert-success');
            $this->session->set_flashdata('message', 'The signature has been deleted.');
        }

        redirect('/');
    }

    /**
     * Pagination for the signatures output.
     *
     * @return mixed
     */
    protected function pagination()
    {

    }
}