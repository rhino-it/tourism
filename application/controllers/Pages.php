<?php
 session_start();
// if (isset($_SESSION['language'])!=true) $_SESSION['language'] = 'russian';
// if (isset($_SESSION['user_login_check'])!=true) $_SESSION['user_login_check'] = 0;

if (isset($_SESSION['about'])!=true) $_SESSION['about']=0;

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('slider_view');
		$this->load->view('services_view');
		// $this->load->view('call_back_view');
		$this->load->view('project_view');
		$this->load->view('number_view');
		$this->load->view('news_view');
		$this->load->view('partners_view');
		$this->load->view('testimonials_view');
		$this->load->view('sign_up_view');
		$this->load->view('footer_view');
	}	

	public function airticket($id=0){
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('airticket_view');
		$this->load->view('footer_view');
	}	

		public function about()	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('about_view');
		$this->load->view('footer_view');
	}
		public function contact()	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('contact_view');

		$this->load->view('footer_view');
	}
		public function news_page()	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('news_page_view');
		$this->load->view('footer_view');
	}


	public function tours($id=0){
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('tour_view');
		$this->load->view('footer_view');
	}
		public function pamir_tours($id=0){
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('pamir_tour_view');
		$this->load->view('footer_view');
	}
		public function visa()	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('visa_view');
		$this->load->view('footer_view');
	}
		public function for_clients()	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$this->load->view('header_view');
		$this->load->view('for_clients_view');
		$this->load->view('footer_view');
	}


}	