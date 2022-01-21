<!DOCTYPE html>
<?php  include 'include/secureConfig.php';
  
?>


<html>
	<head>
		 <?php include 'include/head.php'; ?>       
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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                 <?php $result = mysqli_query($conn, "SELECT * FROM covidtest Where id=".$_GET['id']);
                    if (mysqli_num_rows($result)>0) {
                    $row=mysqli_fetch_array($result) ?>
                  <p  style="text-align:center; font-size: 18px;  height:50px; display:flex; flex-direction:column; justify-content:center;"><b style="color:black;">PATIENT INFORMATION</b></p>
                  <div class="row">
                   
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label pl-3 " style=" padding-bottom:0.5px !important; color:black">First Name</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['fname']; ?>"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Last Name</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['lname']; ?>" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Contact No.</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['phn']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Date of Birth</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['birthdate']; ?>"   />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Sex</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['sex']; ?>"   />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Ethnicity</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['ethnicity']; ?>"   />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Race</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['race']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Address</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['addr']; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">City</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['city']; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">State</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['state']; ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Email</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['eml']; ?>">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <hr/>
                  <p style="text-align:center; font-size:18px; height:50px; display:flex; flex-direction:column; justify-content:center;"><b style="color:black;">BILL TO</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Bill To</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['insurance']; ?>"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Insurance Name</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['insuname']; ?>" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Insurance ID</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['insuid']; ?>"   />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Insurance Group</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['insugroup']; ?>"   />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">DL / SSN</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly  value="<?php echo $row['dlssn']; ?>">
                        </div>
                      </div>
                    </div> 
                  </div><hr>



                 

                  <p style="text-align:center;font-size:18px; height:50px; display:flex; flex-direction:column; justify-content:center;"><b style="color:black;">SPECIMEN INFORMATION</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Reson For Submission</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['resonsub']; ?>"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Specimen Type</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['spetype']; ?>" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Specimen Source</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['spesource']; ?>"   />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Test Request</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['testrequest']; ?>"   />
                        </div>
                      </div>
                    </div>
                  </div><hr>

                  <p style="text-align:center;font-size:18px;  height:50px; display:flex; flex-direction:column; justify-content:center;"><b style="color:black;">PATIENT DECLARATION</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-6 col-form-label  pl-3 " style="padding-bottom:0.5px !important; color:black">Patient Signature</label>
                        <div class="col-sm-11">
                          <input type="text" class="form-control" readonly value="<?php echo $row['signature']; ?>"  />
                        </div>
                      </div>
                    </div>
                  </div>
                 

                  
                <?php } ?>
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