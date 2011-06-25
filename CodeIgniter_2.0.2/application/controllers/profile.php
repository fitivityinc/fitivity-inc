<?php

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		#load profile view - profile view will load style.css
		$data = array(
				'title' => 'My Name',
				'age' => 'My Age',
				'location' => 'My Location');
		
		$this->load->view('profile_view', $data);
	}
	
	function showSports()
	{
		#load profile model here
		#this function is accessed through the URL localhost/index.php/profile/showSports
		this->load->model('profile_model');
		$data['query'] = $this->profile_model->display_sport();
		$this->load->view('profile_view', $data);
	}

}

?>