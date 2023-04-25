<?php  
class Kategori extends CI_Controller{
    public function rp05()
    {
        $data['rp05']=$this->model_kategori->rp0_rp5()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp05',$data);
        $this->load->view('templates/footer');
    }
    public function rp0510()
    {
        $data['rp0510']=$this->model_kategori->rp0510()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp0510',$data);
        $this->load->view('templates/footer');
    }
    public function rp1015()
    {
        $data['rp1015']=$this->model_kategori->rp1015()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp1015',$data);
        $this->load->view('templates/footer');
    }
    public function rp1520()
    {
        $data['rp1520']=$this->model_kategori->rp1520()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp1520', $data);
        $this->load->view('templates/footer');
    }
    public function rp2025()
    {
        $data['rp2025']=$this->model_kategori->rp2025()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp2025',$data);
        $this->load->view('templates/footer');
    }
    public function rp2530()
    {
        $data['rp2530']=$this->model_kategori->rp2530()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp2530',$data);
        $this->load->view('templates/footer');
    }
    public function rp3035()
    {
        
        $data['rp3035']=$this->model_kategori->rp3035()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp3035',$data);
        $this->load->view('templates/footer');
    }
    public function rp35()
    {
        $data['rp35']=$this->model_kategori->rp35()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('rp35',$data);
        $this->load->view('templates/footer');
    }
}
?>