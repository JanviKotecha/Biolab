<!DOCTYPE html>
<?php include("include/secureConfig.php");
$respwd = mysqli_query($conn, "SELECT upwd FROM login");
if (mysqli_num_rows($respwd) > 0) {
  $rowpwd = mysqli_fetch_array($respwd);
}
?>
<html lang="en">

<head>
  <?php include 'include/head.php'; ?>
  <style type="text/css">
    .crd {
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
        <?php include 'include/alert_msg.php'; ?>

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
                              <a class="text-center">
                                <h4>Admin</h4>
                              </a>
                              <form class="mt-5 mb-5 login-input" name="chngpwd" onSubmit="return valid();" method="post" action="changepwdauth.php">

                                <div class="form-group d-flex " style="border-bottom: 1px solid #000000; align-items: center; justify-content: center;">
                                  <input type="password" id="id_old_password" class="form-control pl-1" placeholder="Old Password" name="opwd" id="opwd" minlength="5">
                                  <i class="fa fa-eye pr-1" id="toggleOldPassword" > </i>
                                </div>
                                <div class="form-group d-flex " style="border-bottom: 1px solid #000000; align-items: center; justify-content: center;">
                                  <input type="password" id="id_new_password" class="form-control pl-1" placeholder="New Password " name="npwd" id="npwd" minlength="5">
                                  <i class="fa fa-eye pr-1" id="toggleNewPassword" > </i>
                                </div>
                                <div class="form-group d-flex " style="border-bottom: 1px solid #000000; align-items: center; justify-content: center;" s>
                                  <input type="password" id="id_confirm_password" class="form-control pl-1" placeholder="Confirm Password " name="cpwd" id="cpwd">
                                  <i class="fa fa-eye pr-1" id="toggleConfirmPassword" > </i>
                                </div>
                                <center>
                                  <button class="btn " name="pwd" style="background-color:#0392ce; color:white;">Change Password</button>
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
    function valid() {
      if (document.chngpwd.opwd.value == "") {
        alert("Old Password Filed is Empty.");
        document.chngpwd.opwd.focus();
        return false;
      } else if (document.chngpwd.npwd.value == "") {
        alert("New Password Filed is Empty.");
        document.chngpwd.npwd.focus();
        return false;
      } else if (document.chngpwd.cpwd.value == "") {
        alert("Confirm Password Filed is Empty.");
        document.chngpwd.cpwd.focus();
        return false;
      } else if (document.chngpwd.npwd.value != document.chngpwd.cpwd.value) {
        alert("Password and Confirm Password Field do not match.");
        document.chngpwd.cpwd.focus();
        return false;
      }

      return true;
    }
  </script>
</body>
<script>
  const toggleOldPassword = document.querySelector('#toggleOldPassword');
  const toggleNewPassword = document.querySelector('#toggleNewPassword');
  const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
  const oldPassword = document.querySelector('#id_old_password');
  const NewPassword = document.querySelector('#id_new_password');
  const ConfirmPassword = document.querySelector('#id_confirm_password');

  toggleOldPassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = oldPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    oldPassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
  toggleNewPassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = NewPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    NewPassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
  toggleConfirmPassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = ConfirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    ConfirmPassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
</script>

</html>