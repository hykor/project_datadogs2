<?php

defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json, charset=utf-8');

 
class Page_ctr extends CI_Controller {
    

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Datadogs_model');
		// $this->load->database();
    }

    // public function th($a = '') {
    //     $data['theme'] = "datadogs_page/overview";
    //     $this->load->view('theme', $data);
    // }

    public function home() {  
        // $data = $this->Datadogs_model->searchUsage();
		// print_r($data);
		// exit();
		// $data['usageG'] = $this->Datadogs_model->usageGet();
        $data['theme'] = "datadogs_page/overview";
        $this->load->view('theme', $data);
        
    }
   
	public function filter_usage() {  
		
		// $search = $this->input->post('mount');
		// print_r($search);
		// exit();
		// $data['usageG'] = $this->Datadogs_model->usagefilter($search);
        $data['theme'] = "datadogs_page/overview";
        $this->load->view('theme', $data);
    }
    
	public function overview() {  
        $data['theme'] = "datadogs_page/overview";
        $this->load->view('theme', $data);
    }

	// public function show(){
		// $data = $this->Datadogs_model->searchUsage();
		// echo json_encode($data);
		// print_r($data);
		// exit();
	// }
	

}

?>
