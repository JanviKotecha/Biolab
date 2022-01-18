<?php  include 'include/secureConfig.php';
   if(isset($_POST['add']))
  {
    $result = mysqli_query($conn, "SELECT * FROM covidtest Where id=".$_GET['id']);
    if (mysqli_num_rows($result)>0) {
    $row=mysqli_fetch_array($result);
    $uid=$row['id'];
    $nm=$row['fname'];
    $lnm=$row['lname'];
    $dob=$row['birthdate'];
    $mob=$row['phn'];
    $eml=$row['eml'];
    
    $filename = $_FILES['file']['name'];

    // destination of the file on the server
    $destination = '../includes/pdf/'.$filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
       echo "<script>alert('Document is not formeted');history.back();</script>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {

            $result = mysqli_query($conn, "SELECT * FROM result Where uid='$_GET[id]'");
            if (mysqli_num_rows($result)>0) {
              $rowr=mysqli_fetch_array($result);
              if($rowr['uid'] == $_GET['id']){
                echo "<script>alert('Result Alrady uploaded');window.location='../includes/pdf/$rowr[file]';</script>";}
              }else{
               $sql = "INSERT INTO result (uid,phon,fname,lname,dob,file) VALUES ('$uid', '$mob', '$nm', '$lnm', '$dob', '$filename')";
                if (mysqli_query($conn, $sql)) {
                   echo "<script>alert('Result Uploaded sucessfully');window.location='user.php';</script>";
                   
                //   session_start();
                //   if(isset($_SESSION["email-id"])){
                //   $email=$_SESSION['email-id'];
                //   $to = $email;
                //   $subject = "This is Youtube join ";
                  
                //   $message = "<b>This is HTML message.</b>";
                //   $message .= "<h1>This is headline.</h1>";
                  
                //   $header = "From:yo@snoopybuzz.com \r\n";
                //   $header .= "Cc:yo@snoopybuzz.com \r\n";
                //   $header .= "MIME-Version: 1.0\r\n";
                //   $header .= "Content-type: text/html\r\n";
                  
                //   $retval = mail ($to,$subject,$message,$header);
                  
                //   if( $retval == true ) {
                //       $mail=$_SESSION['email-id'];
                //       echo "<br><br><center><img src='https://snoopybuzz.com/te.png'></center>";
                //       echo "<center><h1>Your Payment is Successfull</h1></center>";
                //       echo "<center><h3>Thank you for your payment automated payment receipt will be sent to your registered email.</h3></center>";
                //       echo "<center><a href='https://snoopybuzz.com/' style='color: red;'><h2>Back to Home</h2></a></center>";
                //   }else {
                //       echo "<br><br><h1 style='text-align:center'>Somthig wants to be wrong....</h1>";
                //   }
                //     session_destroy();
                // }
                // //if session variables do not exist, this will run instead
                // else{
                //   header('Location:https://snoopybuzz.com/pay2.php');
                // }
                  
    

                }
                else {
                  echo "<script>alert('Somthint wrong');window.location='result_add.php';</script>";
                }
                 
              }
            }
          
        } 
    }  
    }  
  
           
?>