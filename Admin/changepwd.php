<!DOCTYPE html>
<?php include("include/secureConfig.php");
 $respwd = mysqli_query($conn,"SELECT upwd FROM login"); 
    if(mysqli_num_rows($respwd) > 0) {
     $rowpwd = mysqli_fetch_array($respwd); 
   }
 ?>
<html lang="en">
  <head>
    <?php include'include/head.php'; ?>
    <style type="text/css">
      .crd{
      box-shadow: 0 0 0 0 rgb(90 113 208 / 11%), 0 4px 16px 0 rgb(167 175 183 / 33%);
      border: solid 1px #dde4eb;
      border-radius: 0px;
    }
    </style>
  </head>
  <body>
    <?php include 'include/preloader.php'; ?>
    <div id="main-wrapper">
      <?php include 'include/nav-header.php'; ?>
      <?php include 'include/top-header.php'; ?>
      <?php include 'include/sidebar.php'; ?>
      <div class="content-body">
        <div class="row page-titles mx-0">
          <?php include'include/alert_msg.php'; ?>
          
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-xl-12">
              <div class="card">
                <div class="card-body">
                  <div class="login-form-bg h-100">
                    <div class="container h-100">
                      <div class="row justify-content-center h-100">
                        <div class="col-xl-6">
                          <div class="form-input-content">
                            <div class="crd">
                              <div class="card-body pt-5">
                                <a class="text-center"> <h4>Admin</h4></a>
                                <form class="mt-5 mb-5 login-input" name="chngpwd" onSubmit="return valid();" method="post" action="changepwdauth.php" >
                                  <div class="form-group">
                                    <input type="password"class="form-control" style="border-bottom: 1px solid #000000;" placeholder="Old Password" name="opwd" id="opwd" minlength="5" >
                                  </div>
                                  <div class="form-group">
                                    <input type="password"class="form-control" style="border-bottom: 1px solid #000000;" placeholder="New Passowrd " name="npwd" id="npwd" minlength="5" >
                                  </div>
                                  <div class="form-group">
                                    <input type="password"class="form-control" style="border-bottom: 1px solid #000000;" placeholder="Confirm Password " name="cpwd" id="cpwd">
                                  </div>
                                  <center>
                                  <button class="btn btn-primary" name="pwd" style="background-color:#0392ce">Change Password</button>
                                  </center>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footerscript.php'; ?>
    <script>
       

      function valid()
    {
    if(document.chngpwd.opwd.value=="")
    {
    alert("Old Password Filed is Empty.");
    document.chngpwd.opwd.focus();
    return false;
    }
    else if(document.chngpwd.npwd.value=="")
    {
    alert("New Password Filed is Empty.");
    document.chngpwd.npwd.focus();
    return false;
    }
    else if(document.chngpwd.cpwd.value=="")
    {
    alert("Confirm Password Filed is Empty.");
    document.chngpwd.cpwd.focus();
    return false;
    }
    else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
    {
    alert("Password and Confirm Password Field do not match.");
    document.chngpwd.cpwd.focus();
    return false;
    }
    
    return true;
    }
    </script>
  </body>
</html>