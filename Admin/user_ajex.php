<?php
  include("../includes/config.php");
  $fnm=$_POST['fnm'];
  $unum=$_POST['unum'];
  if($_POST['fnm']!='' && $_POST['unum']!= '' ) {
    $result = mysqli_query($conn, "SELECT * FROM covidtest WHERE lname='$fnm' AND phn='$unum'");
  } else if($_POST['fnm']!= '') {  
    $result = mysqli_query($conn, "SELECT * FROM covidtest WHERE lname='$fnm'");
  } else if($_POST['unum']!= '' ) {
    $result = mysqli_query($conn, "SELECT * FROM covidtest WHERE phn='$unum'");
  } else {
    $result = mysqli_query($conn, "SELECT * FROM covidtest");
  }
 
  if (mysqli_num_rows($result)>0) {
   while ($row=mysqli_fetch_array($result)) { ?>
    <tr>
      <td><h5><?php echo $row['phn']; ?></h5></td>
      <td><h5><?php echo $row['fname']; ?></h5></td>
      <td><h5><?php echo $row['lname']; ?></h5></td>
      <td><h5><?php echo $row['birthdate']; ?></h5></td>

      <td><a class="btn btn-success" href="user_view.php?id=<?php echo $row['id'];?>" style="color:#fff;border:#0392ce;background-color:#0392ce"><i class="fa fa-eye"> </i> Overview</a></td>
      <?php  $resultf = mysqli_query($conn, "SELECT * FROM result Where uid='$row[id]'");
             if (mysqli_num_rows($resultf)>0) {
              $rowe=mysqli_fetch_array($resultf); ?>
              <td><a  href="../includes/pdf/<?php echo $rowe['file'];?>" class="btn btn-success" style="background-color:#badeba;color:green;    padding: 6px 24px;">View Result</a></td>

            <?php }
            else { ?>
              <td><a  href="result_add.php?id=<?php echo $row['id'];?>" class="btn btn-success" style="background-color:green;color:white">Upload Result</a></td>
          <?php   }

      ?>
      
    </tr>
        <?php } }
          else { ?>
      <tr>
        <td colspan="6"><center><b>No Record Found</b></center></td>
      </tr>
<?php } ?>