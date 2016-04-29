<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends Controller {

	function index()
	{
		$this->load->view('autocomplete_view');
	}
	
	function suggestions_title()
	{
		$this->load->model('autocomplete_model');
		$rows = $this->autocomplete_model->GetAutocomplete2_title();
		$array = array();
		foreach ($rows as $row) {//array_push($array, $row->NAME);
			 array_push($array, $row->TITLE);
			}
		echo json_encode($array);
	}
	
	function suggestions_author()
	{
		$this->load->model('autocomplete_model');
		$rows = $this->autocomplete_model->GetAutocomplete2_author();
		$array = array();
		foreach ($rows as $row) {//array_push($array, $row->NAME);
			 array_push($array, $row->AUTHOR_NAME);
			}
		echo json_encode($array);
	}

	
	function suggestions_publisher()
	{
		$this->load->model('autocomplete_model');
		$rows = $this->autocomplete_model->GetAutocomplete2_publisher();
		$array = array();
		foreach ($rows as $row) {//array_push($array, $row->NAME);
			 array_push($array, $row->PUBLISHER);
			}
		echo json_encode($array);
	}

	
	function suggestions_subject()
	{
		$this->load->model('autocomplete_model');
		$rows = $this->autocomplete_model->GetAutocomplete2_subject();
		$array = array();
		foreach ($rows as $row) {//array_push($array, $row->NAME);
			 array_push($array, $row->SUBJECT);
			}
		echo json_encode($array);
	}




}