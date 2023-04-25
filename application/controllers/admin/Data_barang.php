<?php 
class Data_barang extends CI_Controller{
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
        //Load Library
        $root = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
        $this->load->library('pagination');
        $config['base_url']="$root"."admin/data_barang/index";
        $config['total_rows']=$this->model_barang->totalBarang();
        $config['per_page']=10;
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

        //initialize
        $this->pagination->initialize($config);
        $data['start']=$this->uri->segment(4);;
        $data['barang']=$this->model_barang->tampil_dt($config['per_page'],$data['start']);
        $this->load->view('templates_admin/header');  
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang',$data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi(){
        $nama_brg   =$this->input->POST('nama_brg');
        $keterangan =$this->input->POST('keterangan');
        $harga      =$this->input->POST('harga');
        $stok       =$this->input->POST('stok');
        $gambar     =$_FILES['gambar']['name'];
        if($gambar=''){}else{
            $config ['upload_path']='./uploads/produk';
            $config ['allowed_types']='jpg|gif|png';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Upload, Periksa tipe gambar !!!!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        //pilih kategori
        $kategori='';
        if($harga<=5000){
            $kategori="rp0_rp5";
        }else if($harga>5000 && $harga<=10000){
            $kategori="rp05_rp10";
        }else if($harga>10000 && $harga<=15000){
            $kategori="rp10_rp15";
        }else if($harga>15000 && $harga<=20000){
            $kategori="rp15_rp20";
        }else if($harga>20000 && $harga<=25000){
            $kategori="rp20_rp25";
        }else if($harga>25000 && $harga<=30000){
            $kategori="rp25_rp30";
        }else if($harga>30000 && $harga<=35000){
            $kategori="rp30_rp35";
        }else if($harga>35000 ){
            $kategori="rp35";
        }else{};
        $data=array(
            'nama_brg' =>$nama_brg,
            'keterangan' =>$keterangan,
            'kategori' =>$kategori,
            'harga' =>$harga,
            'stok' =>$stok,
            'gambar' =>$gambar
        );
        $this->model_barang->tambah_barang($data,'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where=array('id_brg'=>$id);
        $data['barang']=$this->model_barang->edit_barang($where,'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang',$data);
        $this->load->view('templates_admin/footer');
       
    }
    public function update(){
        $id=$this->input->post('id_brg');
        $nama_brg=$this->input->post('nama_brg');
        $keterangan=$this->input->post('keterangan');
        $kategori="";
        $harga=$this->input->post('harga');
        $stok=$this->input->post('stok');

        //pilih kategori
        $kategori='';
        if($harga<=5000){
            $kategori="rp0_rp5";
        }else if($harga>5000 && $harga<=10000){
            $kategori="rp05_rp10";
        }else if($harga>10000 && $harga<=15000){
            $kategori="rp10_rp15";
        }else if($harga>15000 && $harga<=20000){
            $kategori="rp15_rp20";
        }else if($harga>20000 && $harga<=25000){
            $kategori="rp20_rp25";
        }else if($harga>25000 && $harga<=30000){
            $kategori="rp25_rp30";
        }else if($harga>30000 && $harga<=35000){
            $kategori="rp30_rp35";
        }else if($harga>35000 ){
            $kategori="rp35";
        }else{};
        
        $data=array(
            'nama_brg'=>$nama_brg,
            'keterangan'=>$keterangan,
            'kategori'=>$kategori,
            'harga'=>$harga,
            'stok'=>$stok
        );
        $where=array(
            'id_brg'=>$id
        );
        $this->model_barang->update_data($where,$data,'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function hapus($id,$gambar)
    {
        $where=array('id_brg'=>$id);
        $path='./uploads/produk/'.$gambar;
        unlink($path);
        $this->model_barang->hapus_data($where,'tb_barang');
        redirect('admin/data_barang/index');
    }
    public function search()
        {
            $keyword=$this->input->post('keyword');
            $data['barang']=$this->model_barang->get_keyword($keyword);
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_barang',$data);
            $this->load->view('templates_admin/footer');
        }
}
 ?>