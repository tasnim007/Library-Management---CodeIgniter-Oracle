<?php

class Autocomplete_Model extends Model
{
	function GetAutocomplete2_title()
    {
		$term = $this->input->post('term',TRUE);
		$cap_term =  strtoupper($term);
		$small_term =  strtolower($term);
		$cam_term =  strtoupper($small_term);
		//$term = 'A';
		//$sql = "SELECT name FROM bands WHERE name LIKE '$term%'ORDER BY name ASC"; //'%$term%'
		//$sql = "SELECT name FROM b WHERE name LIKE '$term%'";
		  $sql = "SELECT title FROM book WHERE title LIKE '$term%' ORDER BY title ASC";	
		//$sql = "SELECT title FROM book WHERE title LIKE '$small_term%' OR title LIKE '$cap_term%' OR title LIKE '$cam_term%'  ORDER BY title ASC";
		//$sql = "SELECT author_name FROM author WHERE author_name LIKE '$term%' ORDER BY author_name ASC";
        $query = $this->db->query($sql);
		return $query->result();
    }
	
	function GetAutocomplete2_author()
    {
		$term = $this->input->post('term',TRUE);
		$cap_term =  strtoupper($term);
		$small_term =  strtolower($term);
		$cam_term =  strtoupper($small_term);
		
		 // $sql = "SELECT title FROM book WHERE title LIKE '$term%' ORDER BY title ASC";	
		//$sql = "SELECT title FROM book WHERE title LIKE '$small_term%' OR title LIKE '$cap_term%' OR title LIKE '$cam_term%'  ORDER BY title ASC";
		$sql = "SELECT author_name FROM author WHERE author_name LIKE '$term%' ORDER BY author_name ASC";
        $query = $this->db->query($sql);
		return $query->result();
    }
	
	function GetAutocomplete2_publisher()
    {
		$term = $this->input->post('term',TRUE);
		$cap_term =  strtoupper($term);
		$small_term =  strtolower($term);
		$cam_term =  strtoupper($small_term);
		
		  $sql = "SELECT distinct publisher FROM book WHERE publisher LIKE '$term%' ORDER BY title ASC";	
		//$sql = "SELECT title FROM book WHERE title LIKE '$small_term%' OR title LIKE '$cap_term%' OR title LIKE '$cam_term%'  ORDER BY title ASC";
		//$sql = "SELECT author_name FROM author WHERE author_name LIKE '$term%' ORDER BY author_name ASC";
        $query = $this->db->query($sql);
		return $query->result();
    }
	
	function GetAutocomplete2_subject()
    {
		$term = $this->input->post('term',TRUE);
		$cap_term =  strtoupper($term);
		$small_term =  strtolower($term);
		$cam_term =  strtoupper($small_term);
		
		  $sql = "SELECT distinct subject FROM book WHERE subject LIKE '$term%' ORDER BY title ASC";	
		//$sql = "SELECT title FROM book WHERE title LIKE '$small_term%' OR title LIKE '$cap_term%' OR title LIKE '$cam_term%'  ORDER BY title ASC";
		//$sql = "SELECT author_name FROM author WHERE author_name LIKE '$term%' ORDER BY author_name ASC";
        $query = $this->db->query($sql);
		return $query->result();
    }
}



