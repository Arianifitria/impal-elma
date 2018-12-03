<?php 
/* 1301160464 */
Class C_produk extends CI_Controller{
	function __construct(){
        parent::__construct();               
        $this->load->helper('url');
		$this->load->model('m_produk');

	}
	
	function index(){
        $data = array(
            'title' => 'Data obat',
            'matakuliah' => $this->m_produk->get_data()
            ); 
                 
        $this->load->view('nav_login');
        $this->load->view('produk', $data);         
        $this->load->view('footer');
    }
}

?>