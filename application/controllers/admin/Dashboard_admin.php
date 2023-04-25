<?php 
class Dashboard_admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role_id')!='1'){
            $this->session->set_flashdata('pesan',' <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Anda Belum login
            <button type="button" class="close" data-dismiss="alert" area-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>');
        redirect('auth/login');
        }
    }
    public function index()
    {       
        $data['d1']=$this->model_kategori->rp0_rp5()->num_rows();
        $data['d2']=$this->model_kategori->rp0510()->num_rows();
        $data['d3']=$this->model_kategori->rp1015()->num_rows();
        $data['d4']=$this->model_kategori->rp1520()->num_rows();
        $data['d5']=$this->model_kategori->rp2025()->num_rows();
        $data['d6']=$this->model_kategori->rp2530()->num_rows();
        $data['d7']=$this->model_kategori->rp3035()->num_rows();
        $data['d8']=$this->model_kategori->rp35()->num_rows();
        $this->load->view('templates_admin/header');  
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
}