<?php

class Autocomplete_Model extends CI_Model
{
	function GetAutocomplete2()
    {
		$term = $this->input->post('term');
		$sql = "SELECT title FROM book WHERE title LIKE '%$term%' ORDER BY title ASC"; //'%$term%' 
        
        $query = $this->db->query($sql);
		return $query->result();
    }
}



