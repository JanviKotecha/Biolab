<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title></title>
      <?php include('includes/head.php'); ?>  
      <?php include('includes/config.php'); ?>  
      <style>
         input[type=text]{
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         margin-top: 6px;
         margin-bottom: 25px;
         resize: vertical;
         color: black;
         margin-top: 20px;
         }
         input[type=date]{
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         margin-top: 6px;
         margin-bottom: 16px;
         resize: vertical;
         margin-top: 25px;
         color: black;
         }
         input[type=email]{
         color: black;
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         margin-top: 6px;
         margin-bottom: 16px;
         resize: vertical;
         margin-top: 25px;
         }
         input[type=submit] {
         background-color: #0392ce;
         color: white;
         padding: 12px 20px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         width: 90%;
         margin-top: 20px;
         margin-bottom: 20px;
         margin-left: 31px
         }
         .form{
         width: auto;/*
         overflow: hidden;*/
         margin-top: -379px;
         margin-bottom: 0px;
         padding: 0px 0px 100px 0px;
         }s
         .element{
         max-width:1245px;
         /*display: flex;*/
         margin-right: auto;
         margin-left: auto;
         position: relative;
         z-index: 2;
         }
         .appointment-form {
         background: #fff;
         border-radius: 6px;
         padding: 12px 23px;
         box-shadow: 0px 3px 23px 0px rgb(0 71 240 / 13%);
         }
         .appointment-form .appointment-title {
         margin-bottom: 40px;
         position: relative;
         padding: 20px;
         }
         .appointment-form .appointment-title h2 {
         font-size: 35px;
         font-weight: 700;
         margin-bottom: 20px;
         }
         ul, li {
         list-style: none;
         margin: 0;
         padding: 0;
         }
         .single-item {
         padding-left: 45px;
         position: relative;
         }
         .text {
         margin-top: 20px;
         }
         .text p {
         display: block;
         margin-bottom: 12px;
         font-size: 14px;
         color: #777;
         padding-left: 30px;
         position: relative;
         }
         .text p i {
         color: #0392ce;
         font-size: 18px;
         display: inline-block;
         position: absolute;
         left: 0;
         top: 3px;
         }
         .cbio {
         margin-top: 19px;
         color: #fff;
         }
         .cbio p {
         margin: 0;
         line-height: 30px;
         font-weight: 400;
         }
         .cbio p i {
         display: inline-block;
         padding-right: 7px;
         color: #ffffff;
         }
      </style>
   </head>
   <body>
      <!--Start Preloader -->
      <div class="preloader"></div>
      <!--End Preloader -->   
      <?php include('includes/header_top.php'); ?> 
      <!--Start breadcrumb area-->     
      <section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumbs">
                     <br><br>
                     <h1>COVID Test Result</h1>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="left pull-left">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                           <li class="active">COVID Test Result</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End breadcrumb area-->
      <!--Start contact form area-->
      <section class="contact-form-area">
         <div class="container">
            <div class="sec-title">
               <h1>COVID Test Result</h1>
               <span class="border"></span>
            </div>
         </div>
      </section>
      <section class="form">
         <div class="element">
            <div class="row">
               <div class="col-md-12" style="margin-top: 300px;">
                  <div class="col-md-3 fr"> 
                  </div>
                  <div class="col-md-6 fr">
                     <div class="appointment-form " >
                        <div class="row">
                           <div class="appointment-title" style="padding-left: 39px;margin-bottom: 16px;">
                              <h2>Patient Results</h2>
                              <h3>Tell About Yourself</h3>
                           </div>
                        </div>
                        <form action="result_check.php" method="post" >
                           <div class="col-md-12" style="">
                              <div class="col-md-12">
                                 <h4>First Name <b style="color:#9194A0;">*</b></h4>
                                 <input type="text" id="fnm" name="fnm" required>
                                 <h4>Last Name <b style="color:#9194A0;">*</b></h4>
                                 <input type="text" id="lnm" name="lnm" required> 
                                 <h4>Confirmation Number <b style="color:#9194A0;">*</b></h4>
                                 (Your registered contact number) 
                                 <input type="text" id="cnum" name="cnum" required>
                                 <h4>Date Of Birth <b style="color:#9194A0;">*</b></h4>
                                 <input type="date" id="dob" name="dob" required> 
                              </div>
                           </div>
                           <input type="submit" value="View Result" name="submit" style="text-align: center;">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--End contact form area-->  
      <!--Start contact map area-->
      <!--End contact map area-->
      <!--Start footer area-->  
      <?php  include("includes/footer.php"); ?>
      <?php  include("includes/footer_script.php"); ?>
   </body>
</html>