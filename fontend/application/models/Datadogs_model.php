<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Datadogs_model extends CI_Model {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
		// $this->load->database();
		
    }

	public function searchUsage() {
		$month  = "08";
		// $month  = $this->input->post('month');
		$year = "2023";
		// $year = $this->input->post('year');
		$this->db->where('month',$month);
		$this->db->where('year',$year);
		$query = $this->db->get('usage_infrastructure')->result();
		return $query;
	}

	// function usageGet() {
	// 	$query = $this->db->get_where('usage_db', array('date_mount' => "February"))->result_array();
	// 	return $query;
	// }
	
	// function usagefilter($search) {
	// 	$query = $this->db->get_where('usage_db', array('date_mount' => $search))->result_array();
	// 	return $query;
	// }
	
	
	

}
?>
