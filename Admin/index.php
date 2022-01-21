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
            <?php include 'include/alert_msg.php'; ?>
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center">
                                    <h4>Biolink Life Sciences</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="loginAuth.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="padding-left:10px;" placeholder="Email id" name="email" required="">
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="password" placeholder="password" class="form-control" style="padding-left:10px;" name="password" required="">
                                        <i class="fa fa-eye pr-1" id="toggleConfirmPassword"> </i>
                                    </div> -->
                                    <div class="form-group d-flex " style="align-items: center; justify-content: center;" s>
                                        <input type="password" id="id_password" class="form-control pl-1" placeholder="password " name="password">
                                        <i class="fa fa-eye pr-1" id="togglePassword"> </i>
                                    </div>
                                    <input type="submit" name="submit" class="btn login-form__btn w-100" style="background-color:#0392ce"></input>
                                    <center><br><br> If Your Forget Password ? <a href="forgetpwd.php" style="color:blue">Click Here</a></center>
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

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const Password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = Password.getAttribute('type') === 'password' ? 'text' : 'password';
        Password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>