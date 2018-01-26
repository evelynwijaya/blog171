<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['blog']            = 'blog';            // daftar blog
$route['blog/(any:)']     = 'blog/$1';         // baca blog dengan blog_id $1
$route['blog/post']       = 'blog/post';       // halaman penulisan blog
$route['blog/submit']     = 'blog/submit';     // proses penyimpanan blog

$route['user/signin']     = 'user/signin';     // proses login user
$route['signout']         = 'user/signout';    // proses login user
$route['user/reg']        = 'user/register';   // halaman form registrasi user

$route['user/login']        = 'user/login';   // halaman form login
$route['home']        = 'welcome/home';


$route['user/reg_submit'] = 'user/regsubmit';  // proses registrasi user
$route['user/(any:)']     = 'user/$1';         // halaman profil user dengan user_id $1


$route['default_controller'] = 'welcome';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
