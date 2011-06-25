<?php

class profile_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function add_sport()
	{
		$query = this->mongo_db->$_POST
	}
	
	function display_sports()
	{
		#php script that gets the users sports
		$query = this->mongo_db->$get('sports');
		return $query->result();
	}
	
}


?>