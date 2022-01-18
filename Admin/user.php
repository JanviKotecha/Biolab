<!DOCTYPE html>
<?php  include 'include/secureConfig.php';?>
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
          <div class="card">
            <div class="card-body"> 
              
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group row">
                    <label class="col-sm-6 col-form-label" >Confirmation Number</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="unum" id="unum" />
                    </div>
                  </div>
                </div>
                <div class="col-md-5 " >
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label" >Last Name</label>
                    <div class="col-sm-12">
                      <input type="text" name="fnm" id="fnm" class="form-control" placeholder="" />  
                    </div>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="form-group row">
                    <div class="col-sm-6">
                    <button type="submit" name="filter" id="filter"  class="btn btn-success" style="background: #80808069;border: #80808069;padding: 8px 29px;margin-top:38px"><i class="fa fa-search"></i> Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
				  <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    
                  	<div class="text-right"><br/>
                  	</div>
                  	<table class="table table-striped table-bordered" id="datatable" width="100%" cellspacing="0">
                  		<thead>
                      <tr>
                        <th>CONFIRMATION NUMBER</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>DATE OF BIRTH</th>
                        <th>VIEW</th>
                        <th>RESULT</th>
                      </tr>
                    </thead>
                    <tbody id="oreder_table">
                      
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
    <script type="text/javascript">

      function ajax_data() {
        var fnm=$('#fnm').val();
        var unum = $('#unum').val();  
        
        $.ajax({  
            url:"user_ajex.php",  
            method:"POST",  
            data:{fnm:fnm, unum:unum},  
            success:function(data) {
              $('#oreder_table').html(data); 
            }
        });   
      }
      $(document).ready(function(){  
         
        $('#filter').click(function() {  
          ajax_data();
        });
        ajax_data();
      });  
    </script>
    </script>
    <?php include 'include/footer.php'; ?>
		<?php include 'include/footerscript.php'; ?>
	</body>
</html>