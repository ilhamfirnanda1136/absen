
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Login Absensi</title>
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="icon" href="<?=base_url()?>/image/cropped-icon.png">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/demo.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/style.css">
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?=base_url()?>image/yukpigi.jpg" style="width: 60%; height: 30%">
            </div>
            <?php if($this->session->has_userdata('gagal')){?>
          <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  <div class="alert-title">Error</div>
                 <?=$this->session->flashdata('gagal')?>
                </div>
              </div>
         <?php
          }
       ?>
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="<?=base_url('auth/process')?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" class="form-control" tabindex="1" required autofocus placeholder="Masukkan Username">
                    <div class="invalid-feedback">
                      Mohon Masukkan Username
                    </div>
                  </div>
                  <div class="form-group">
                  	 <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-control" tabindex="2" required placeholder="Masukkan Password">
                    <div class="invalid-feedback">
                      Mohon Masukkan Password
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="<?=base_url()?>asset/dist/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/popper.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/tooltip.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="<?=base_url()?>asset/dist/js/sa-functions.js"></script>
  <script src="<?=base_url()?>asset/dist/js/scripts.js"></script>
  <script src="<?=base_url()?>asset/dist/js/custom.js"></script>
  <script src="<?=base_url()?>asset/dist/js/demo.js"></script>
</body>
</html>