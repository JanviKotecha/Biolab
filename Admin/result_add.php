 <!DOCTYPE html>

<html>
	<head>
		 <?php include 'include/head.php'; ?>       
	</head>
	<body>
    <?php include'include/preloader.php';?>
    <div id="main-wrapper">
      <?php include'include/nav-header.php';?>
      <?php include'include/top-header.php';?>
      <?php include'include/sidebar.php';?>
      <div class="content-body">
        <div class="row page-titles mx-0">
         <?php include'include/alert_msg.php'; ?>
         
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Result</h4>
                  <div class="basic-form">
                    <form action="result_auth.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data" >
                      <div class="form-row">
                        
                        <div class="form-group col-md-12">
                          <label>File</label>
                          <input name="file" type="file" class="form-control"  placeholder="Select File" required="">
                        </div>
                      </div>
                       
                      <button type="submit" name="add" class="btn btn-dark">Upload Result</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include'include/footer.php';?>
    </div>
    <?php include'include/footerscript.php';?>
  </body>
</html>