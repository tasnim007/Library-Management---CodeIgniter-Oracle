<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

	function index()
	{
		$this->load->view('autocomplete_view');
	}
	
	function suggestions()
	{
		$this->load->model('autocomplete_model');
		$rows = $this->autocomplete_model->GetAutocomplete2();
		$array = array();
		foreach ($rows as $row)
			 array_push($array, $row->NAME);
		echo json_encode($array);
	}



}

