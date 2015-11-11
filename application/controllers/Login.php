<?php
class Login extends CI_Controller {

        
		
		public function __construct()
        {
                parent::__construct();
                 $this->load->helper('url_helper');
				 if($this->auth->isAuthorised() == true)
					{
						redirect('home'); //Контроллер авторизации
					}
				
        }
		public function index()
        {
                $this->load->helper('form');
				
				$data['title'] = 'Login';
				
				if ( $this->input->post( 'login' ) ) 
				{ 
						if( ($this->auth->checkAuth() ) == true ) 
						{
							redirect('home');
						} 
					else 
						{
							
							$this->load->view('templates/header', $data);
							$this->load->view('login/index', $data);
							$this->load->view('templates/footer');
						}
							
				} else {
						
						$this->load->view('templates/header', $data);
						$this->load->view('login/index', $data);
						$this->load->view('templates/footer');
				}
        }
		public function logout()
        {
			$session_data = array(
					$this->CI->config->item('auth_passw') => '',
					$this->CI->config->item('auth_nick') => ''
				);
			$this->session->set_userdata($session_data);
			redirect('login');
		}
}		