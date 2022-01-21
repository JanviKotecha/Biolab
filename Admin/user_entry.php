<!DOCTYPE html>
<?php  include 'include/secureConfig.php';
if(isset($_GET['id'])){
  $res = mysqli_query($conn, "SELECT * FROM user_enter WHERE id=".$_GET['id']);
  if(mysqli_num_rows($res)>0){
    mysqli_query($conn, "DELETE FROM user_enter WHERE id=".$_GET['id']);
     $result=mysqli_fetch_array($res);
      $_SESSION['alert_msg'] .= "<div class='msg_success'>Information Sucessfully Deleted. </div>";
    header("location:user_entry.php");
    exit;
  } else {
    header("location:user_entry.php");
  }
}?>
<html>
	<head>
		 <?php include 'include/head.php'; ?>   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">      
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
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    
                  	<div class="text-right"><br/>
                  	</div>
                  	<table class="table  table-bordered" id="datatable" width="100%" cellspacing="0">
                  		<thead>
                      <tr  class="table-secondary">
                        <th style="font-weight:400;">FIRST NAME</th>
                        <th style="font-weight:400;">LAST NAME</th>
                        <th style="font-weight:400;">DATE OF BIRTH</th>
                        <th style="font-weight:400;">EMAIL</th>
                        <th style="font-weight:400; text-align: center;">DELETE</th>
                      </tr>
                    </thead>
                    <tbody id="oreder_table" >
                      <?php $result = mysqli_query($conn, "SELECT * FROM user_enter");
                       if (mysqli_num_rows($result)>0) {
                        while ($row=mysqli_fetch_array($result)) { ?>
                          <tr class="table-light"> 
                            <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['fname']; ?></h5></td>
                            <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['lname']; ?></h5></td>
                            <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['dob']; ?></h5></td>
                            <td><h5 style="font-weight:400; margin-bottom: 0;"><?php echo $row['eml']; ?></h5></td>
                            <td ><a class="btn btn-danger"  href="user_entry.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure');"  style="color:#fff; border:#0392ce; display: flex; flex-direction: column;  align-items: center; "  ><i class="fa fa-trash"> </i></a></td>
                          </tr>
                          <?php } }
                            else { ?>
                            <tr>
                              <td colspan="6"><center><b>No Record Found</b></center></td>
                            </tr>
                          <?php } ?>
                    </tbody>
                   	</table>
          				</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'include/footer.php'; ?>
		<?php include 'include/footerscript.php'; ?>
	</body>
</html>