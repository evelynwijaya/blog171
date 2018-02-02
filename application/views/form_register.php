<h1 class="mb-4">Register Account</h1>
<form action="/user/reg_submit" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <label for="m_fname">Name</label>
      <input type="text" class="form-control" id="m_fname" name="nama">
    </div>

  </div>
  <div class="row">
    <div class="col-md-12 form-group" >
      <label for="m_email">Email</label>
      <input type="email" class="form-control" id="m_email" name="email">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 form-group">
      <label for="m_date">Password</label>
      <input type="password" class="form-control" name="pass1">
      <small id="passwordHelpInline" class="text-muted">
        Must be 8-20 characters long.
      </small>
    </div>
    <div class="col-md-6 form-group">
      <label for="m_time">Verikasi Password </label>
      <input type="password" class="form-control"  name="pass2">
    </div>
  </div>



  <div class="row">
    <div class="col-md-12 form-group">
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register Now">
    </div>
  </div>

</form>
