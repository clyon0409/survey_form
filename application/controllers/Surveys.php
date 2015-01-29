<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function process_data()
	{
		if($this->session->userdata('counter'))
		{
			$counter=$this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter++);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
			//$counter=$this->session->userdata('counter');
		}

		echo 'hello from process_data';
		$info['name'] = $this->input->post('name');
		$info['location'] = $this->input->post('location');
		$info['language'] = $this->input->post('language');
		$info['comments'] = $this->input->post('comments');
		//$info['counter'] = $counter;

		$this->session->set_userdata('info', $info);
		$this->session->set_userdata('counter', $counter);
		//$info = $this->session->userdata('info');
		
		//$info = $this->session->userdata('info');
		redirect('/result');
		//$this->load->view('result',$info);
	}

	public function result()
	{
		//redirect('/result');
		echo 'got to result';
		$info = $this->session->userdata('info');
		base_url('/result');
			
		$this->load->view('result',array('info'=>$this->session->userdata('info'), 'counter'=>$this->session->userdata('counter')));
	}
	
	public function go_back()
	{
		redirect(base_url());
		
	}
}

//end of main controller