<?php
 include 'include/config.php'; 

  if(isset($_POST['email']) && !empty($_POST['email']) )
     {
      if(isset($_POST['password']) && !empty($_POST['password']) )
      {
          $email = $_POST['email'];
          $password = $_POST['password'];
          $result = mysqli_query($conn,"SELECT * FROM login WHERE uemail='$email' and upwd='$password' ");
          $_SESSION['admin_info'] = "true";

          if (mysqli_fetch_array($result)>0)
          {
            header("location:user.php");
          }
          else { ?>
            <script>
              alert("Information is Wrong.");
              window.location="index.php";
            </script>
        <?php }      
      } 
    }
?>
