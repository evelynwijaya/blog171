<?php
  if( isset( $this->session->nama ) ){
    echo $this->session->nama . " (<a href='/signout'>signout</a>)";
  }
?>
<hr>

<form action="/user/signin" method="post">
  Email: <input type="email" name="email" placeholder="Alamat Email Anda"><br>
  Password: <input type="password" name="password" placeholder="Password Anda"><br>
  <input type="submit" value="Sign In">
</form>


<hr>

<a href="/user/reg">Register</a><br>
