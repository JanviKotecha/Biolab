<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha512-XVz1P4Cymt04puwm5OITPm5gylyyj5vkahvf64T8xlt/ybeTpz4oHqJVIeDtDoF5kSrXMOUmdYewE4JS/4RWAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

</body>
</html>
<?php 
 include 'includes/config.php'; 
	
	if(isset($_POST['submit'])) {
	   
	  
		$r1=$_POST['fnm'];
		$r2=$_POST['lnm'];
		$r3=$_POST['dob'];
		$r4=$_POST['sex'];
		$r5=$_POST['eth'];
		$r6=$_POST['race'];
		$r7=$_POST['address'];
		$r8=$_POST['email'];
		$r9=$_POST['city'];
		$r10=$_POST['state'];
		$r11=$_POST['zip'];
		$r12=$_POST['phn'];
		
		$r21=$_POST['billto'];
		$r22=$_POST['insunm'];
		$r23=$_POST['insuid'];
		$r24=$_POST['insugrp'];
		$r25=$_POST['dlssn'];
		$r26=$_POST['rfs'];
		$r27=$_POST['stype'];
		$r28=$_POST['speso'];
		$r29=$_POST['sreq'];
		
		$r32=$_POST['psig'];
		

		$insert="INSERT INTO covidtest (fname, lname, birthdate, sex, ethnicity, race, addr, eml, city, state, zip, phn, insurance, insuname, insuid, insugroup, dlssn, resonsub, spetype, spesource, testrequest, signature) VALUES('".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$r6."','".$r7."','".$r8."','".$r9."','".$r10."','".$r11."','".$r12."','".$r21."','".$r22."','".$r23."','".$r24."','".$r25."','".$r26."','".$r27."','".$r28."','".$r29."','".$r32."')";
        $ins=mysqli_query($conn,$insert); 
        ?>

   			<script type="text/javascript">
   			
   				window.location="index.php";
   				
   			</script>

      <?php  }   ?>
