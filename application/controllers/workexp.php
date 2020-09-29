<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workexp extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('page1');
    }
    public function workexp(){
        $data = array(
        'career' => $this->input->post("career"),
        'salary' => $this->input->post("salary"),
        'Companyname' => $this->input->post("Companyname"),
        'position' => $this->input->post("position"),
    );
    $tao["x"]=$data ;
    $this ->load->view('show_page1',$tao);
}
}
