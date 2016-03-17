<?php 

/**
* 
*/
class Home extends CI_Controller
{
	
	public function index()
	{
		$data = array('title' => 'Home');
		$this->load->view('home', $data );
        $this->load->view('guest/head');

		$result = $this->post->getPost();
		$data = array('consulta' => $result);
		$this->load->view('/guest/content',$data);
		$this->load->view('/guest/footer');

	}
}

 ?>