<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('blog_model');

  }

  public function index( $blog_ID = '' )  {

    if( $blog_ID == '' ){
      $data['blogs'] = $this->blog_model->blogs();
      $this->load->template( 'blogs', $data );

    } else {
      $data['blog'] = $this->blog_model->blog( $blog_ID );
      $this->load->template( 'baca_blog', $data );

    }

  }

  public function post()  {
    $this->load->template('beranda');

  }

  public function submit()  {
    $this->blog_model->submit();
  redirect('home');
  }

}
