<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	// function blog() {

	// 	$this->load->model('blog_model');
	// 	$one = 'Hello';
	// 	$two = ' World';


	// 	$data['hello']=$this->blog_model->bind_value($one,$two);

		
	// 	$data['author']='Rashini';
	// 	$data['book'] = 'Nihongo Shoho';
	// 	$this->load->view('blog_news',$data);
		
	// }
}
