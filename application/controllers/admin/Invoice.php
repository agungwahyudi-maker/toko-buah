<?php 

class Invoice extends CI_Controller{
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
        $root = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        $this->load->library('pagination');
        $config['base_url']="$root"."admin/invoice/index/";
        $config['total_rows']=$this->model_invoice->totalInvoice();
        $config['per_page']=5;
        $config['num_links']=1;

        //Style pagination
        $config['full_tag_open']='<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']='</ul></nav>';

        $config['first_link']='First';
        $config['first_tag_open']='<li class="page-item">';
        $config['first_tag_close']='</li>';

        $config['last_link']='Last';
        $config['last_tag_open']='<li class="page-item">';
        $config['last_tag_close']='</li>';

        $config['next_link']='&raquo';
        $config['next_tag_open']='<li class="page-item">';
        $config['next_tag_close']='</li>';

        $config['prev_link']='&laquo';
        $config['prev_tag_open']='<li class="page-item">';
        $config['prev_tag_close']='</li>';
        
        $config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']='<a/></li>';
        
        $config['num_tag_open']='<li class="page-item">';
        $config['num_tag_close']='</li>';

        $config['attributes']=array('class'=>'page-link');
        
        $this->pagination->initialize($config);
        $data['start']=$this->uri->segment(4);

        $data['invoice']=$this->model_invoice->tampil_data($config['per_page'],$data['start']);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }
    public function detail($id_invoice)
    {
        $data['invoice']=$this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan']=$this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->model_invoice->ubahStatus($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
    }
} ?>