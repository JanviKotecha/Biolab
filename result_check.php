<?php 
  include('includes/config.php'); 
    if(isset($_POST['submit'])){
      $fnm=$_POST['fnm'];
      $lnm=$_POST['lnm'];
      $num=$_POST['cnum'];
      $dt=$_POST['dob'];

      $result = mysqli_query($conn, "SELECT * FROM result WHERE phon='$num'");
      if (mysqli_num_rows($result)>0) {
        $rowr=mysqli_fetch_array($result);
        if($rowr['fname']!=$fnm){
          echo "<script>alert('First Name is Wrong');window.location='result.php'</script>";
        }else if($rowr['lname']!=$lnm){
          echo "<script>alert('Last Name is Wrong');window.location='result.php'</script>";
        }else if($rowr['phon']!=$num){
          echo "<script>alert('Number Is Wrong');window.location='result.php'</script>";
        }else if($rowr['dob']!=$dt){
          echo "<script>alert(Date Of Birth is Wrong');window.location='result.php'</script>";
        }else if(isset($rowr['file'])){
          echo "<script>window.location='includes/pdf/$rowr[file]'</script>";
        }else{
           echo "<script>alert('Result is comming soon');window.location='result.php'</script>";
        }
      }
      else{
          echo "<script>alert('Information Is Wrong');window.location='result.php'</script>";
      }
    }            
?>