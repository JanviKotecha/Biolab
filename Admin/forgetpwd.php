<!DOCTYPE html>
<?php include("include/config.php"); ?>
<html class="h-100" lang="en">
<head>
     <?php include 'include/head.php'; ?>
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
   <?php include 'include/preloader.php'; ?>
    <!--*******************
        Preloader end
    ********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
          <?php include'include/alert_msg.php'; ?>
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center"> <h4>Forget Password</h4></a>
                                <form class="mt-5 mb-5 login-input" method="post" action="forgetpwd_auth.php" >
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email id"  name="email"  required="">
                                  </div>
                                  <div class="form-group">
                                      <input  type="password" placeholder="Password" class="form-control"  name="password" required="">
                                  </div>
                                  <div class="form-group">
                                      <input  type="password" placeholder="Confirm Password" class="form-control"  name="cpassword" required="">
                                  </div>
                                  <input type="submit" name="pwd" class="btn login-form__btn w-100" style="background-color:#0392ce"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <?php include 'include/footerscript.php'; ?>
</body>
</html>




