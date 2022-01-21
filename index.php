<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <?php include('includes/head.php'); ?>  
    <style>
      input[type=text]{
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      color: black;
      margin-top: 11px;
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
      margin-top: 11px;
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
      margin-top: 11px;
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
      margin-left: 25px;
      }
      .form{
      width: auto;/*
      overflow: hidden;*/
      margin-top: -379px;
      margin-bottom: 0px;
      padding: 0px 0px 75px 0px;
      }
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
    <section class="brand-area" style="background-image:url(images/back/bac.png);padding-top: 400px;"> </section>
    <section class="form">
      <div class="element">
        <div class="row">
          <div class="col-md-12" style="margin-top: 200px;">
            <div class="col-md-6 fr">
              <div class="appointment-form " >
                <div class="row">
                  <div class="appointment-title" style="padding-left: 39px;margin-bottom: 16px;">
                    <h2>One Step Ahead Of COVID</h2>
                    <h3>(RT-PCR)</h3>
                  </div>
                </div>
                <form action="form.php" method="post" >
                  <div class="col-md-12" style="">
                    <div class="col-md-6">
                      <h4>First Name <b style="color:#9194A0">*</b></h4>
                      <input type="text" id="fname" name="firstname" required><br><br>
            
                      <h4>Date of Birth <b style="color:#9194A0">*</b></h4>
                      <input type="date" id="birthday" name="birthday" required>
                    </div>
                    <div class="col-md-6">
                      <h4>Last Name <b style="color:#9194A0">*</b></h4>
                      <input type="text" id="lname" name="lastname" required><br><br>
                    </div>
                    <div class="col-md-6">
                      <h4>Email Id <b style="color:#9194A0">*</b></h4>
                      <input type="email" id="email" name="email" placeholder="Ex: biolink@gmail.com" required>
                    </div>
                  </div>
                  <input type="submit" value="GET STARTED" name="submit" style="text-align: center;">
                </form>
              </div>
            </div>
            <div class="col-md-6 word" style="margin-top:190px;">
              <div class="tp">
                <br>
                <h2 style="font-size: 32px;line-height: 36px; font-weight: 400; margin: 0 0 25px;">COVID-19 TESTING</h2>
                <p style="margin: 0 0 10px;">
                  Biolink Lifescience is a highly advanced facility that is dedicated to COVID-19 testing.
                </p>
                <p style="margin: 0 0 10px;">Biolink Lifescience have been established under the supervision of experienced scientific executives and technical leaders. We detect the virus by analyzing different COVID -19 tests. 
                </p>
                <p><i class="fas fa-angle-double-right" style="color:gray;  "></i> RT-PCR, RT-PCR plus FLU, Rapid Antigen,</p>
                <p><i class="fas fa-angle-double-right" style="color:gray;"></i> Antibody, Molecular ID</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Start Medical Departments area-->
    <section class="medical-departments-area" style="padding-top: 0px;">
      <div class="container">
        <div class="sec-title">
          <h1>COVID-19 Testing Option</h1>
          <span class="border"></span>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="medical-departments-carousel">
              <!--Start single item-->
              <div class="single-item text-justify" style="height: 450px;">
                <div class="iocn-holder">
                  <span class="">
                    <center>
                      <h3 class="h">Rapid RT-PCR</h3>
                    </center>
                  </span>
                </div>
                <div class="text-holder"  style="height:90%">
                  <p  style="height:80%">About 1 in 3 people with COVID-19 do not have symptoms but can still infect others. This tests help to detect covid -19 earlier, If people test positive and self-isolate, it helps stop the virus spreading.
                    <br><br>Required for travel, must be tested within 72 hours of final flight departing the U.S.A.
                  </p>
                  <center style="height:20%">
                    <h6>
                      <hr>
                      Results in 48 hrs
                    </h6>
                  </center>
                </div>
              </div>
              <div class="single-item text-justify" style="height: 450px;">
                <div class="iocn-holder">
                  <span class="">
                    <center>
                      <h3 class="h">Molecular RT-PCR</h3>
                    </center>
                  </span>
                </div>
                <div class="text-holder"  style="height:90%">
                  <p>About 1 in 3 people with COVID-19 do not have symptoms but can still infect others. This tests help to detect covid -19 earlier, If people test positive and self-isolate, it helps stop the virus spreading.
                    <br><br>Required for travel, must be tested within 72 hours of final flight departing the U.S.A.
                  </p>
                  <center  style="height:80%">
                    <h6 style="height:20%">
                      <hr>
                      Results in 48 hrs
                    </h6>
                  </center>
                </div>
              </div>
              <div class="single-item text-justify" style="height: 450px;">
                <div class="iocn-holder">
                  <span class="">
                    <center>
                      <h3 class="h">Rapid Antigen</h3>
                    </center>
                  </span>
                </div>
                <div class="text-holder"  style="height:90%">
                  <p  style="height:80%">With this quick test you can immediately determine whether you are infected with the coronavirus. The test is done with a nose swab.</p>
                  <!-- <br><br><br><br><br> -->
                  <center style="height:20%">
                    <h6>
                      <hr>
                      Results in 48 hrs
                    </h6>
                  </center>
                  <br><br>
                </div>
              </div>
              <div class="single-item text-justify" style="height: 450px;">
                <div class="iocn-holder">
                  <span class="">
                    <center>
                      <h3 class="h">Rapid Antibody</h3>
                    </center>
                  </span>
                </div>
                <div class="text-holder"  style="height:90%">
                  <p  style="height:80%">An antibody test is a blood test to check if you have previously been infected with a virus. The test detects your body’s response to the virus or vaccination. This test can also be used by individuals who may not have developed any symptoms of COVID-19, but are interested in whether they have previously been infected.</p>
                  <center style="height:20%">
                    <h6>
                      <hr>
                      Results in 48 hrs
                    </h6>
                  </center>
                  <br><br>
                </div>
              </div>
              <div class="single-item text-justify" style="height: 450px;">
                <div class="iocn-holder">
                  <span class="">
                    <center>
                      <h3 h3 class="h">Molecular RT-PCR <br>Plus Flu</h3>
                    </center>
                  </span>
                </div>
                <div class="text-holder" style="height:90%">
                  <p style="height:80%">Covid-19 + Flu test panel to help patients and healthcare providers to differentiate between the two illnesses which have similar symptoms.</p>
                  <!-- <br><br><br><br> -->
                  <center style="height:20%">
                    <h6>
                      <hr>
                      Results in 48 hrs
                    </h6>
                  </center>
                  <br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Medical Departments area--> 
    <!--Start brand area-->
    <section class="brand-area" style="background-color:#0392ce;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-holder">
              <div class="sec-title">
                <h1>Biolink Lifescience provide absolute Covid -19 testing options</h1>
                <h3 style="color: #fff;">(RT-PCR, RT-PCR plus FLU, Rapid RT-PCR, Rapid Antibody, Antigen)</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-holser">
              <div class="cbio">
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>Symptomatic or Asymptomatic COVID-19 Testing </p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>Group Testing for Business COVID-19 Testing</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i> Community Organizations COVID-19 Testing</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>Back to School or College COVID-19 Testing</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>International Travel COVID-19 Testing (RT-PCR in 24 to 72 hrs)</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>Covid-19 + Flu Testing</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="text-holser">
              <div class="cbio">
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>Detects All Covid-19 trains</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i> Meets Most Pre-Travel Requirements</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>COVID-19 Rapid RT-PCR Swab Test in 1 hr</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>COVID-19 RT-PCR Swab Test in 12 to 48 hrs</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>COVID-19 FDA approved Antigen Swab Test In 10 Mins</p>
                <p><i class="fas fa-angle-double-right" style="color:white;"></i>COVID-19 Antibody Test In 10 Mins</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
        </div>
      </div>
      </div>    
    </section>
    <!--End brand area-->
    <!--Start latest blog area-->  
    <section class="latest-blog-area">
      <div class="container">
        <div class="sec-title">
          <h1>COVID-19 Resources</h1>
          <span class="border"></span>
        </div>
        <div class="row">
          <!--Start single blog item-->
          <div class="col-md-4">
            <div class="single-blog-item">
              <div class="img-holder">
                <img src="images/blog/latest-blog-1.jpg" alt="Awesome Image">
                <div class="overlay-style-one">
                  <div class="box">
                    <div class="content">
                      <a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/testing.html" target='_blank'><span class="flaticon-plus-symbol" ></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-holder">
                <ul class="meta-info">
                  <li>
                    <h3>COVID-19 Testing & News</h3>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End single blog item-->
          <!--Start single blog item-->
          <div class="col-md-4">
            <div class="single-blog-item">
              <div class="img-holder">
                <img src="images/blog/latest-blog-2.jpg" alt="Awesome Image">
                <div class="overlay-style-one">
                  <div class="box">
                    <div class="content">
                      <a href="form.php" target="_blank"><span class="flaticon-plus-symbol"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-holder">
                <ul class="meta-info">
                  <li>
                    <h3>COVID-19 RT-PCR</h3>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End single blog item-->
          <!--Start single blog item-->
          <div class="col-md-4">
            <div class="single-blog-item">
              <div class="img-holder">
                <img src="images/blog/latest-blog-3.jpg" alt="Awesome Image">
                <div class="overlay-style-one">
                  <div class="box">
                    <div class="content">
                      <a href="form.html" target="_blank"><span class="flaticon-plus-symbol"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-holder">
                <ul class="meta-info">
                  <li>
                    <h3>COVID-19 Test Results</h3>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End single blog item-->
        </div>
      </div>
    </section>
    <!--End latest blog area-->
    <section class="contact-form-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="container-fluid">
              <div class="google-map-inner">
                <iframe id="contact-google-map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d25881.502648314025!2d-78.805478!3d35.819867!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1642074145308!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="quick-contact">
              <div class="title">
                <h2>Quick Contact</h2>
                <p>If you have any questions simply use the following contact details.</p>
              </div>
              <ul class="contact-info">
                <li>
                  <div class="icon-holder">
                    <span class="flaticon-pin"></span>
                  </div>
                  <div class="text-holder">
                    <h5><span>Address : </span>250 Quade dr.,<br> Cary, NC-27513</h5>
                  </div>
                </li>
                <li>
                  <div class="icon-holder">
                    <span class="flaticon-interface"></span>
                  </div>
                  <div class="text-holder">
                    <h5><span>Email : </span> info@biolinkonline.com</h5>
                  </div>
                </li>
                <li>
                <div class="icon-holder">
                    <span class="flaticon-technology-1"></span>
                  </div>
                  <div class="text-holder">
                    <h5><span>Phone : </span> 919-678-9478</h5>
                  </div>
                  
                </li>
              </ul>
              <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Start footer area-->  
    <?php  include('includes/footer.php'); ?>
    <!--End footer area-->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>
    <?php include('includes/footer_script.php'); ?>
  </body>
</html>