<?php
  
  class Start_preshop extends Controller {
    
    function Start_preshop(){
      parent::Controller();
      $this->load->helper('url');
      
    }
    
    function index(){
      
      $this->load->view('homepage');
      
          
    }
    
  }
/* End of file welcome.php */
/* Location: ./system/application/controllers/start_preshop.php */