<?php
class C_Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Materi');
		$this->load->helper('url','form');
	}
    public function index()
    {
        $data = array(
            'title' => 'Data member',
            'mmbr' => $this->M_Materi->get_data()
        );
        $this->load->view('materi',$data);
    }

    public function Materi()
    {
        $this->load->view('materi');
    }
}
?>