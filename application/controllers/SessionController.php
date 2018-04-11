<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SessionController extends CI_Controller {

	public function index()
	{
		$this->load->view('main_view');
	}
        public function view()
	{
            //print value from the key univ
            $session_data = $this->session->userdata('univ');
            //print data for the key colors 
            $session_data = $this->session->userdata('colors');
            //echo $session_data;
            print_r($this->session->userdata());
            //print all session data from the array
      if($this->session->userdata('colors')){
          $data=$this->session->userdata('colors');
           foreach ( $data as $key=>$var )
                {
                    print "<br/>$key = = > $var<br/>";
                    }
      }else
         echo 'No data in the session';
   }

	
        public function set()
	{
     // $this->load->library('session');
       $colors = array(
                   'color1' => 'red',
                   'color2' => 'yellow',
                   'color3' => 'blue'
               );
       //add a varible to session
      $this->session->set_userdata('univ','"Al. I. Cuza"');
      //add a string to session
      $this->session->set_userdata('colors',$colors);
      echo "Data has been added to session";

	}
        public function delete()
	{
          //delete all session data
        $this->session->sess_destroy();
        //delete values for key univ
        //$this->session->unset_userdata('univ');
        //delete values for key color1
        //$this->session->unset_userdata('color1');
        echo "Data has been removed from session.";

	}
}
