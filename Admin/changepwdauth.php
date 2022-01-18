<?php
 include 'include/secureConfig.php'; 

  if(isset($_POST['pwd'])) {
	  $oldpassword = $_POST["opwd"];
	  $res = mysqli_query($conn,"SELECT upwd FROM login WHERE id=1"); 
      if(mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
        $oldpassworddb = $row['upwd'];
	    } 
		$oldpassword = $_POST["opwd"];
	  $newpassword = $_POST["npwd"];
		  if ($oldpassword == $oldpassworddb){
		  		$res="UPDATE login SET upwd='$newpassword' WHERE id=1";
          $update=mysqli_query($conn,$res);
					$_SESSION['alert_msg'] .= "<div class='msg_success'>Password change sucessfully.</div>";
		      header("location:changepwd.php");
			    exit;
		  } else {
		$_SESSION['alert_msg'] .= "<div class='msg_error'>Oldpassword Not Match.</div>";
		header("location:changepwd.php");
		exit;
		}
  }
	    
?>
