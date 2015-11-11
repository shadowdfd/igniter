<?php
class News extends CI_Controller {

        
		
		public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
				 if($this->auth->isAuthorised() == false)
					{
						redirect('login'); //Контроллер авторизации
					}
				
        }

        public function index()
        {
                $this->news_model->_check_login();
				$this->load->library('auth');
				if ( ($this->auth->getUser()['access'])  == 'dissalow') {
					redirect ('about');
				} else 
				{	
				$data['news'] = $this->news_model->get_news();
				$data['title'] = 'News archive';
						if ($this->auth->getUser()['nick'])
		{
		$data['nick_l'] = $this->auth->getUser()['nick'];
		} else $data['nick_l'] = "---";
				
				$this->load->helper('access_helper');
				
				$this->load->view('templates/header', $data);
				$this->load->view('news/index', $data);
				$this->load->view('templates/footer');
				}
        }

        public function view($id = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($id);
				if (empty($data['news_item']))
					{
						show_404();
					}

				$data['title'] = $data['news_item']['title'];
						if ($this->auth->getUser()['nick'])
		{
		$data['nick_l'] = $this->auth->getUser()['nick'];
		} else $data['nick_l'] = "---";

				$this->load->view('templates/header', $data);
				$this->load->view('news/view', $data);
				$this->load->view('templates/footer');
        }
		public function create()
		{
				$this->load->helper('form');
				$this->load->library('form_validation');

				$data['title'] = 'Create a news item';
						if ($this->auth->getUser()['nick'])
		{
		$data['nick_l'] = $this->auth->getUser()['nick'];
		} else $data['nick_l'] = "---";

				$this->form_validation->set_rules('title', 'Title', 'required');
				$this->form_validation->set_rules('text', 'Text', 'required');

				if ($this->form_validation->run() === FALSE)
						{
					$this->load->view('templates/header', $data);
					$this->load->view('news/create');
					$this->load->view('templates/footer');

						}
				else
				{
					$this->news_model->set_news();
					
					$data['title'] = 'Well done';
					
					$this->load->view('templates/header', $data);
					$this->load->view('news/success');
					$this->load->view('templates/footer');
				}
		}
		
		
}