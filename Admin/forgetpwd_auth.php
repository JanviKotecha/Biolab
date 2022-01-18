<?php
 include 'include/config.php'; 

  if(isset($_POST['pwd'])) {
	  $email = $_POST["email"];
	  $res = mysqli_query($conn,"SELECT * FROM login WHERE id=1"); 
    
        $row = mysqli_fetch_array($res);
        $emailddb = $row['uemail'];
	    
		$password = $_POST["password"];
	    $cpassword = $_POST["cpassword"];
        if($password == $cpassword){
		  if ($email == $emailddb){
		  		$res="UPDATE login SET upwd='$cpassword' WHERE id=1";
                $update=mysqli_query($conn,$res);
                echo "<script>alert('Password Set Successfully');window.location='index.php'</script>";
				
		  } else {
            echo "<script>alert('Email Id Is Wrong');window.location='forgetpwd.php'</script>";
		}
    }else{
        echo "<script>alert('Password Not Match');window.location='forgetpwd.php'</script>";
    }
  }
  
	    
?>