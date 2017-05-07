<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database();
		$this->load->library('grocery_CRUD');
 
    }
    public function index()
    {
        if($this->session->userdata('logged_in'))
	   {
		    $session_data = $this->session->userdata('logged_in');
		    $data['username'] = $session_data['username'];
		    $this->grocery_crud->set_table('tbl_admin');
	        $output = $this->grocery_crud->render();
			
			$this->output($output);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('/', 'refresh');
	   }


    }

    public  function logout()
		 {
		 	session_start(); 
		   $this->session->unset_userdata('logged_in');
		   session_destroy();
		   redirect('/', 'refresh');
		 }

    public function admin()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_admin');
$crud->where("IS_DELETE","1");
		
		$crud->set_field_upload('FOTO_ADMIN','uploadadmin');
$crud->field_type('PASSWORD_ADMIN', 'password');
$crud->display_as('FIRST_NAME_ADMIN','FIRST NAME');
$crud->display_as('LAST_NAME_ADMIN','LAST NAME');
$crud->display_as('USERNAME_ADMIN','USERNAME');
$crud->display_as('PASSWORD_ADMIN','PASSWORD');
$crud->display_as('TGL_LAHIR_ADMIN','BIRTHDAY');
$crud->display_as('ALAMAT_ADMIN','ALAMAT');
$crud->display_as('NO_TELP_ADMIN','NO. TELP');
$crud->display_as('EMAIL_ADMIN','EMAIL');
$crud->display_as('FOTO_ADMIN','PHOTO');
$crud->display_as('IS_DELETE','ACTIVE');
$crud->unset_delete();
        $output = $crud->render();
		
		$this->output($output);
    }
	
	public function bank()
    {
		
        $crud = new grocery_CRUD();
        $crud->set_table('tbl_bank');
		$output = $crud->render();		
		$this->output($output);
    }
	
	
	public function metodepembayaran()
    {
		
        $crud = new grocery_CRUD();
        $crud->set_table('tbl_metode_pembayaran');
		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function provinsi()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_provinsi');
		
		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function kota()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_kota');
        
		$crud->set_relation('ID_PROVINSI','tbl_provinsi','NAMA_PROVINSI');
		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function kecamatan()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_kecamatan');
        
		$crud->set_relation('ID_KOTA','tbl_kota','NAMA_KOTA');
		$output = $crud->render();
		$this->output($output);
    }
	
	
	
	public function merch()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_merch');
       
		$crud->set_field_upload('FOTO_MERCH','uploadmerch');
		$output = $crud->render();
		$this->output($output);
    }
	
	
	
	public function customer()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_customer');
$crud->where("IS_DELETE","1");
        
		$crud->set_field_upload('FOTO_CUST','uploadcustomer');

$crud->columns('FIRST_NAME_CUST','LAST_NAME_CUST','USERNAME_CUST','TGL_LAHIR','NO_TELP_CUST','EMAIL_CUST','POINT_CUST','IS_DELETE');
$crud->fields('FIRST_NAME_CUST','LAST_NAME_CUST','USERNAME_CUST','TGL_LAHIR','NO_TELP_CUST','EMAIL_CUST','POINT_CUST','IS_DELETE');

$crud->field_type('FIRST_NAME_CUST','readonly');
$crud->field_type('LAST_NAME_CUST','readonly');
$crud->field_type('USERNAME_CUST','readonly');
$crud->field_type('TGL_LAHIR','readonly');
$crud->field_type('EMAIL_CUST','readonly');
$crud->field_type('POINT_CUST','readonly');
$crud->field_type('NO_TELP_CUST','readonly');
$crud->field_type('POINT_CUST','readonly');
$crud->field_type('FOTO_CUST','readonly');

$crud->display_as('FIRST_NAME_CUST','FIRST NAME');
$crud->display_as('LAST_NAME_CUST','LAST NAME');
$crud->display_as('USERNAME_CUST','USERNAME');

$crud->display_as('TGL_LAHIR','TGL. LAHIR');
$crud->display_as('NO_TELP_CUST','NO. TELP');
$crud->display_as('EMAIL_CUST','EMAIL');
$crud->display_as('POINT_CUST','POINT');
$crud->display_as('EMAIL_CUST','EMAIL');
$crud->display_as('FOTO_CUST','PHOTO');
$crud->display_as('IS_DELETE','ACTIVE');
		$crud->unset_add();
$crud->unset_delete();
		$output = $crud->render();
		$this->output($output);
    }
	
	
	
	public function jenisproduk()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_jenis_produk');
        
		$output = $crud->render();
		$this->output($output);
    }
	
	public function sizejenisproduk()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_size_jenis');
       
		$crud->set_relation('ID_JENIS_PRODUK','tbl_jenis_produk','NAMA_JENIS_PRODUK');
		$output = $crud->render();
		$this->output($output);
    }
	
	public function kategoriproduk()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_kategori_produk');
       
		$output = $crud->render();
		$this->output($output);
    }
	
	public function produk()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_produk');
       

		$crud->set_field_upload('FOTO_PRODUK_01','uploadproduk');
		$crud->set_field_upload('FOTO_PRODUK_02','uploadproduk');
		$crud->set_relation('ID_KATEGORI_PRODUK','tbl_kategori_produk','NAMA_KATEGORI_PRODUK');
		$crud->set_relation('ID_MERCH','tbl_merch','NAMA_MERCH');
$crud->display_as('ID_MERCH','NAMA MERCH');
		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function sizeproduk()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_size_produk');
		
$crud->set_relation('ID_PRODUK','tbl_produk','NAMA_PRODUK');

		
		$output = $crud->render();
		$this->output($output);
    }
	
	
	
	public function order()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_order');

$crud->columns('ID_ORDER','ID_CUST','WAKTU_ORDER','TOTAL_BIAYA_PRODUK','TOTAL_BIAYA_PENGIRIMAN', 'TOTAL_BIAYA_KESELURUHAN', 'STATUS_ORDER', 'WAKTU_PENGIRIMAN_ORDER');
$crud->fields('ID_ORDER','ID_CUST','WAKTU_ORDER','TOTAL_BIAYA_PRODUK','TOTAL_BIAYA_PENGIRIMAN', 'TOTAL_BIAYA_KESELURUHAN', 'STATUS_ORDER', 'WAKTU_PENGIRIMAN_ORDER');
		$crud->set_relation('ID_CUST','tbl_customer','USERNAME_CUST');
		$crud->unset_add();
$crud->field_type('ID_CUST','readonly');
$crud->field_type('WAKTU_ORDER','readonly');
$crud->field_type('TOTAL_BIAYA_PRODUK','readonly');
$crud->field_type('TOTAL_BIAYA_PENGIRIMAN','readonly');
$crud->field_type('TOTAL_BIAYA_KESELURUHAN','readonly');
$crud->field_type('STATUS_ORDER','enum',array('SENDING','DELIVERED'));
$crud->display_as('ID_CUST','CUSTOMER');
$crud->display_as('TOTAL_BIAYA_PRODUK','BIAYA ORDER');
$crud->display_as('TOTAL_BIAYA_PENGIRIMAN','BIAYA PENGIRIMAN');
$crud->display_as('TOTAL_BIAYA_KESELURUHAN','TOTAL BIAYA');
$crud->display_as('WAKTU_PENGIRIMAN_ORDER','WAKTU PENGIRIMAN');


		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function detailorder()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_detail_order_produk');
		$crud->set_relation('ID_PRODUK','tbl_produk','NAMA_PRODUK');
		$crud->set_relation('ID_ORDER','tbl_order','ID_ORDER');

		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();

$crud->columns('ID_ORDER','ID_PRODUK','NAMA_SIZE_PRODUK','JUMLAH_PRODUK');
$crud->fields('ID_ORDER','ID_PRODUK','NAMA_SIZE_PRODUK','JUMLAH_PRODUK');

$crud->display_as('ID_PRODUK','NAMA PRODUK');
$crud->display_as('NAMA_SIZE_PRODUK','SIZE');

		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function ordershipping()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_order_shipping');
		$crud->set_relation('ID_ORDER','tbl_order','ID_ORDER');
		
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();

$crud->columns('ID_ORDER','NAMA_PENERIMA','NO_TELP_PENERIMA','EMAIL_PENERIMA','PROVINSI','KOTA','KECAMATAN','ALAMAT_PENERIMA','POSTAL_CODE');
$crud->fields('ID_ORDER','NAMA_PENERIMA','NO_TELP_PENERIMA','EMAIL_PENERIMA','PROVINSI','KOTA','KECAMATAN','ALAMAT_PENERIMA','POSTAL_CODE');

$crud->display_as('NO_TELP_PENERIMA','NO. TELP');
$crud->display_as('EMAIL_PENERIMA','EMAIL');
$crud->display_as('ALAMAT_PENERIMA','ALAMAT');
$crud->display_as('POSTAL_CODE','KODE POS');

		$output = $crud->render();
		$this->output($output);
    }
	
	
	public function konfirmasipembayaranorder()
    {
		$crud = new grocery_CRUD();
        $crud->set_table('tbl_konfirmasi_pembayaran');
		$crud->set_relation('ID_ORDER','tbl_order','ID_ORDER');
		$crud->set_relation('ID_BANK','tbl_bank','NAMA_BANK');
		$crud->set_relation('ID_METODE_PEMBAYARAN','tbl_metode_pembayaran','NAMA_METODE_PEMBAYARAN');
		$crud->set_field_upload('BUKTI_PEMBAYARAN','uploadpembayaranorder');
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();
		$output = $crud->render();
		$this->output($output);
    }
	
	public function output($output = null)
	{
		$this->load->view('our_template',$output);
	}

	
}							