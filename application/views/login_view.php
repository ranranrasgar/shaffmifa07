<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - Shaff Mufa 07</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <!-- <h1><i class="fa fa-book"></i>Paguyuban</h1> -->
        <section class="login_content">
        <div class="login-logo">
          <a href="<?= base_url(); ?>">
            <span class="logo-mini">
              <img src="<?= base_url(); ?>assets/img/logo.png" class="img-circle" alt="Brand" width="200" height="200">
            </span>
          </a>
        </div>

        <form method="post" action="<?php echo base_url() ?>login/dologin">
            <h1>Login User</h1>
            <?php
            $announce = $this->session->flashdata('announce');
            if (!empty($announce)) {
              echo '
                    <div class="alert alert-danger">
                    ' . $announce . ' 
                    </div>
                  ';
            }
            ?>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Username" />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" />
            </div>
            <div>
              <input type="submit" name="login" class="btn btn-default submit pull-right" value="Login" />
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <div class="clearfix"></div>
              <br />

              <div>

                <p>Copyright © <?php echo date('Y') ?> All Rights Reserved. Rhansoft Company. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>