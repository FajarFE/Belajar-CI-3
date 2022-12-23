<main role="main" class="container">
<?php $this -> load -> view('layouts/_alert'); ?>
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header">
        Formulir Registrasi
        </div>
        <div class="card-body">
          <form action="input">
            <div class="from-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" required autofocus placeholder="Masukan Nama">
            </div>
            <br>
            <div class="from-group">
                <label for="">Email</label>
                <input type="email" class="form-control" required autofocus placeholder="Masukan Email">
              </div>
              <br>
            <div class="from-group">
              <label for="">Pasword</label>
              <input type="password" class="form-control" required placeholder="Masukan Password">
            </div>
            <br>
            <div class="from-group">
                <label for="">Konfirmasi password</label>
                <input type="password" class="form-control" required placeholder="Masukan Konfirmasi Password">
                <small class="form-text text-danger">Password Harus Sama</small>
              </div>
            <br>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>