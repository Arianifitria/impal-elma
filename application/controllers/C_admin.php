<?php 
/* 1301160464 */
Class C_Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_admin');
	}
	
	function index(){
		$data = array(
			'mmbr' => $this->m_obat->getmhs()
		);
		$this->load->view('admin',$data);
	}
	
	public function update() {
        $data = $this->input->post(null,TRUE);
        $edit = $this->m_admin->updatee($data);
        if($edit){
            redirect('C_Admin/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

	public function check(){
        $data = $this->input->post(null,TRUE);
        $login_data = $this->m_admin->check_user($data);
        if($login_data){
            $this->session->set_userdata('user',$login_data->username);
            redirect('C_Home/index1');
        } else {
            $this->session->set_flashdata('message','Gagal Login');
            redirect('C_Akun/index');
        }
    }
	
	public function del(){
		$data = $this->input->post(null,TRUE);
		$this->m_obat->delete($data['idobat']);
		redirect('C_admin/index');
	}
	
}

?>