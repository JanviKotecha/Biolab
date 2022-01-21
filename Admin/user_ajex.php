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
    <tr class="table-light"> 
      <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['phn']; ?></h5></td>
      <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['fname']; ?></h5></td>
      <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['lname']; ?></h5></td>
      <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['birthdate']; ?></h5></td>

      <td ><a class="btn btn-success"  href="user_view.php?id=<?php echo $row['id'];?>" style="color:#fff; border:#0392ce; background-color:#0392ce; display: flex; flex-direction: column;  align-items: center; "  ><i class="fa fa-eye"> </i></a></td>
      <?php  $resultf = mysqli_query($conn, "SELECT * FROM result Where uid='$row[id]'");
             if (mysqli_num_rows($resultf)>0) {
              $rowe=mysqli_fetch_array($resultf); ?>
              <td style="display: flex; flex-direction: column; justify-content: center; align-items: center;"><a  href="../includes/pdf/<?php echo $rowe['file'];?>" class="btn btn-success" style="background-color:#badeba; border: none; color:green;    padding: 6px 24px;">View Result</a></td>

            <?php }
            else { ?>
              <td  style="display: flex; flex-direction: column; justify-content: center; align-items: center;"><a  href="result_add.php?id=<?php echo $row['id'];?>" class="btn btn-success" style="background-color:green;border: none;  color:white">Upload Result</a></td>
          <?php   }

      ?>
      
    </tr>
        <?php } }
          else { ?>
      <tr>
        <td colspan="6"><center><b>No Record Found</b></center></td>
      </tr>
<?php } ?>