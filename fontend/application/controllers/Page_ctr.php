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

    public function home() {  
        // $data = $this->Datadogs_model->searchUsage();
		// print_r($data);
		// exit();
		// $data['usageG'] = $this->Datadogs_model->usageGet();
        $data['theme'] = "datadogs_page/overview";
        $this->load->view('theme', $data);
        
    }
    
	public function customer_org() {  
        $data['theme'] = "datadogs_page/customer_org";
        $this->load->view('theme', $data);
    }
	

}

?>
