<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="/home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#section-offer" class="nav-link">Offer</a></li>
        <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>


<?php
  if( !isset($this->session->uid) ){
 ?>
        <li class="nav-item"><a href="/user/login" class="nav-link">Login</a>

<?php } ?>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/blog/post">Post Resep</a>
                <a class="dropdown-item" href="/user/profil">Profil</a>
              <a class="dropdown-item" href="/signout">Logout</a>
            </div>
          </div>

        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
