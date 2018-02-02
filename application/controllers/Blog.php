<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('blog_model');
      $this->load->model('user_model');
  }


	public function index( $blog_ID )	{
      $data['blog'] = $this->blog_model->blog( $blog_ID );
      $this->load->template( 'detail_blog', $data );

	}

  public function post(){
    if(isset($this->session->uid)){

    $this->load->template('beranda');

  }
    else {
      redirect('user/login');
  }
  }


  public function submit()  {
    $this->blog_model->submit();
  redirect('home');
  }

}
