<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct() {
     parent::__construct();

    $this->load->model('user_model');
    $this->load->model('blog_model');

  }

  public function index(){
  }

   public function register(){
     // tampilkan form registrasi user
     $this->load->template('form_register');
   }

   public function login(){
     // tampilkan form registrasi user
     $this->load->template('login');

   }

    public function regsubmit(){
      $this->user_model->register();
      redirect("user/login");
    }

    public function signin(){

    $email = $this->input->post('email');
    $pass = $this->input->post('password');

    if(  $user = $this->user_model->user( $email ) ){

      if( $user['password'] == md5( $pass ) ){
        // password cocok, login berhasil
        // simpan data session untuk mengenali user di setiap halaman
        $this->session->uid = $user['user_ID'];
        $this->session->nama = $user['nama'];

        // kembali ke halaman depan

        redirect('home');

      } else {
        // password tidak cocok
        echo "LOGIN FAILED";
      }
    } else {
      // user tidak ditemukan
      echo "TIDAK TERDAFTAR";
    }

  }
  public function signout(){
    // musnahkan data session untuk lupakan user
    $this->session->sess_destroy();

    // kembali ke halaman depan
    redirect('/');
  }



  // public function profil($nama){
  //   $sql = "SELECT nama FROM users";
  //
  //   $hasil= mysqli_query($db, $sql);
  //     $this->load->template('profil');
  //
  // }

}
