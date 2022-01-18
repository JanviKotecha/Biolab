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
                                <a class="text-center"> <h4>Biolink Life Sciences</h4></a>
                                <form class="mt-5 mb-5 login-input" method="post" action="loginAuth.php" >
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email id"  name="email"  required="">
                                  </div>
                                  <div class="form-group">
                                      <input  type="password" placeholder="password" class="form-control"  name="password" required="">
                                  </div>
                                  <input type="submit" name="submit" class="btn login-form__btn w-100" style="background-color:#0392ce"></input>
                                 <center><br><br> If Your Forget Password ?  <a href="forgetpwd.php" style="color:blue">Click Here</a></center>
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




