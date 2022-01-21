<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='stylef.css'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/resources/logo.png" sizes="16x16">
    <style>
      .form-control.error input{
      border:2px solid rgb(228, 29, 22);
      }
      .header1 {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 10;
      background: #fff;
      -webkit-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
      -moz-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
      box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
      }
      .header1 a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px; 
      line-height: 25px;
      border-radius: 4px;
      }
      .header1 a.logo {
      font-size: 25px;
      font-weight: bold;
      }
      .header1 a.active {
      background-color: #0392ce;
      color: white;
      width: 250px;
      }
      .header1 a.activeb {
      background-color: #7a7f82;
      color: white;
      width: 200px;
      }
      .header1-right {
      float: right;
      margin: 10px;
      padding-right: 50px;
      }
      @media screen and (max-width: 500px) {
      .header1 a {
      float: none;
      display: block;
      text-align: left;
      }
      .header1-right {
      float: none;
      }
      }
      small{
      position:absolute;
      margin: 3px;
      visibility: hidden;
      color:red;
      }
    </style>
  </head>
  <body>
    <div class="preloader"></div>
    <div class="header1" >
      <a href="index.php">
      <img src="images/resources/logo.png" alt="Awesome Logo" style="max-width: 35% !important;">
      </a>
      <div class="header1-right">
      </div>
    </div>
    <?php 
      include("includes/config.php");
      if(isset($_POST['submit']))
      {
        $fnm=$_POST['firstname'];
        $lnm=$_POST['lastname'];
        $dof=$_POST['birthday'];
        $eml=$_POST['email'];

        $insert="INSERT INTO user_enter (fname, lname, dob, eml) VALUES('".$fnm."','".$lnm."','".$dof."','".$eml."')";
        $ins=mysqli_query($conn,$insert); 
        
      
      }  
    ?>
    <div class="preloader"></div>
    <br><br><br><br><br><br>
    <center>
      <h2 style="color: #0392ce;">COVID-19 REQUISITION FORM</h2>
    </center>
    <br><br>
    <div class="content">
      <!--content inner-->
      <div class="content__inner">
        <div class="container overflow-hidden">
          <!--multisteps-form-->
          <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
              <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress" id="hidden">
                  <button class="multisteps-form__progress-btn js-active" type="button" >Step 1</button>
                  <button class="multisteps-form__progress-btn" type="button" >Step 2</button>
                  <button class="multisteps-form__progress-btn" type="button" >Step 3</button>
                  <button class="multisteps-form__progress-btn" type="button" >Step 4</button>
                </div>
                <br><br>
              </div>
            </div>
            <!--form panels-->
            <div class="row">
              <div class="col-12 col-lg-8 m-auto">
                <form class="multisteps-form__form" action="form_data.php" method="post"  name="myform" novalidate>
                  <!--single form panel 1 -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                    <h3 class="multisteps-form__title" style="padding-left:18px;">PATIENT INFORMATION</h3>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>First Name <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="fnm" id="fnm" value="<?php echo  isset($_POST['submit']) ?  $fnm : '' ?>">
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Last Name <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="lnm" id="lnm" value="<?php echo  isset($_POST['submit']) ?  $lnm : '' ?>">
                          <small>Error Message</small>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Date Of Birth <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="Date of Birth" onfocus="(this.type='date')" name="dob" id="dob" value="<?php echo  isset($_POST['submit']) ? $dof :'' ?>"/>
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Sex <sup style="color:#9194A0">*</sup> </p>
                          <select class="multisteps-form__select form-control" name="sex" id="sex">
                            <option value="sex"></option>
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                          <small>Error Message</small>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Ethnicity  </p>
                          <select class="multisteps-form__select form-control" name="eth" id="eth">
                            <option value="African American">African American</option>
                            <option value="Asian">Asian</option>
                            <option value="Hispanic or Latino">Hispanic or Latino</option>
                            <option value="Not Specified">Not Specified</option>
                          </select>
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Race  </p>
                          <select class="multisteps-form__select form-control" name="race" id="race" >
                            <option value="American Indian / Alaska Native">American Indian / Alaska Native</option>
                            <option value="Asian">Asian</option>
                            <option value="Black/African American">Black/African American</option>
                            <option value="Native Hawaiian / Other Pacific Islander">Native Hawaiian / Other Pacific Islander &nbsp;</option>
                            <option value="White">White</option>
                            <option value="Unknown">Unknown</option>
                          </select>
                          <small>Error Message</small>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Address <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="address" id="address">
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>City <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="city" id="city">
                          <small>Error Message</small>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>State <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="state" id="state">
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Zip  <sup style="color:#9194A0">*</sup></p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="zip" id="zip" >
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Email <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="email" placeholder="Ex. biolink@gmail.com" name="email" id="email" value="<?php echo  isset($_POST['submit']) ? $eml : ''; ?>" >
                          <small>Error Message</small>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Contact No. <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="tel" placeholder="Ex. 9196789478" name="phn" id="phn" >
                          <small>Error Message</small>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" >Next Step</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel 2 -->
                  <!--single form panel 3 -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                    <h3 class="multisteps-form__title" style="padding-left:18px;">BILL TO</h3>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Bill To  </p>
                          <select class="multisteps-form__select form-control" name="billto">
                            <option value="Insurance">Insurance</option>
                            <option value="Uninsurance">Uninsured</option>
                            <option value="Patient">Patient</option>
                            <option value="Provider or Business">Provider or Business</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Insurance Name  </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder=""  name="insunm" id="insunm" />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Insurance ID  </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder=""  name="insuid" />
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Insurance Group  </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder=""  name="insugrp" />
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>DL / SSN  </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder=""  name="dlssn" />
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev" style="background: white;color: #0392ce;">Previous Step</button>
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next Step</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel 4 -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
                    <h3 class="multisteps-form__title" style="padding-left:18px;">SPECIMEN INFORMATION </h3>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Reason for submission  <sup style="color:#9194A0">*</sup> </p>
                          <select class="multisteps-form__select form-control" name="rfs" id="rfs">
                            <option valude="Reason for submission" >Reason for submission</option>
                            <option value="Diagnostic">Diagnostic</option>
                            <option value="Screening">Screening</option>
                            <option value="Contracted with COVID positive person">Contracted with COVID positive person  &nbsp;</option>
                            <option value="Sickness">Sickness</option>
                            <option value="Travel">Travel</option>
                            <option class="pr-2" value="Possible Exposure to COVID positive person">Possible Exposure to COVID positive person  &nbsp;</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Specimen Type  </p>
                          <select class="multisteps-form__select form-control" name="stype">
                            <option valude="" >Specimen Type </option>
                            <option value="Sterile Container">Sterile Container</option>
                            <option value="Blood Tube (Plasma, Serum or Whole Blood)">Blood Tube (Plasma, Serum or Whole Blood)  &nbsp;</option>
                            <option value="Other (Specify)">Other (Specify)</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                          <p>Specimen Source  </p>
                          <select class="multisteps-form__select form-control" name="speso">
                            <option value="Specimen Source" >Specimen Source </option>
                            <option value="Nasopharyngeal (NP)">Nasopharyngeal (NP)</option>
                            <option value="Oral Saliva">Oral Saliva</option>
                            <option value="Other (Specify)">Other (Specify)</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-6">
                          <p>Test Request  <sup style="color:#9194A0">*</sup> </p>
                          <select class="multisteps-form__select form-control" name="sreq" id="sreq">
                            <option value="Test Request" >Test Request </option>
                            <option value="SARS CoV-2 Molecular Test (RT-PCR)">SARS CoV-2 Molecular Test (RT-PCR)  &nbsp;</option>
                            <option value="SARS CoV-2 Rapid Antigen">SARS CoV-2 Rapid Antigen</option>
                            <option value="SARS CoV-2 RT-PCR plus FLU (*Physican Referral Required)">SARS CoV-2 RT-PCR plus FLU (*Physican Referral Required) &nbsp;</option>
                            <option value="COVID-19 IgG / IgM Rapid Test">COVID-19 IgG / IgM Rapid Test  &nbsp;</option>
                          </select>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev" style="background: white;color: #0392ce;">Previous Step</button>
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" >Next Step</button>
                      </div>
                    </div>
                  </div>
                  <!--single form panel 5 -->
                  <!--single form panel 6 -->
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                    <h3 class="multisteps-form__title" style="padding-left:18px;">PATIENT DECLARATION</h3>
                    <div class="multisteps-form__content">
                      <div class="form-row mt-4">
                        <div class="col">
                          <!-- <input type="Checkbox" name="trm" value="yes" id="trm"  required>
                            <label  style="font-size: 10px;text-align: justify;color: black;
                              ">I agree that Laboratory will furnish to my designated insurance carrier the information on this form necessary for reimbursement. <br><br> I hereby authorize service be performed and assign that benefits be payable to Laboratory.<br><br>  I understand that if any insurer doesn't pay and denies the claim as an uncovered service, I am responsible for payment. I authorize my insurance benefits to be paid directly to the laboratory for services I received. The laboratory is authorized to bill my insurance provider and to receive payment of benefits for the tests. I further authorize the testing laboratory and my physician to release to my insurance provider any medical information necessary to this claim.</label> -->
                          <input type="checkbox" id="trm" name="trm" >
                          <label for="trm" style="font-size: 15px;text-align: justify;color: #0392ce;"> I agree to  the Terms of use and Privacy Policy</label><br>
                          <p style="font-size: 10px;text-align: justify;color: black;"> With this you are accepting that Laboratory will furnish to my designated insurance carrier the information on this form necessary for reimbursement. <br><br> I hereby authorize service be performed and assign that benefits be payable to Laboratory.<br><br>  I understand that if any insurer doesn't pay and denies the claim as an uncovered service, I am responsible for payment. I authorize my insurance benefits to be paid directly to the laboratory for services I received. The laboratory is authorized to bill my insurance provider and to receive payment of benefits for the tests. I further authorize the testing laboratory and my physician to release to my insurance provider any medical information necessary to this claim.</p>
                        </div>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-12 col-sm-6">
                          <p>Patient Full Name  <sup style="color:#9194A0">*</sup> </p>
                          <input class="multisteps-form__input form-control" type="text" placeholder="" name="psig" id="psig"/>
                        </div>
                      </div>
                      <div class="button-row d-flex mt-4">
                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev" style="background: white;color: #0392ce;">Previous Step</button>
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next" style="background-color:green; border:none;" >Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn" style="height: 400px;">
                    <center>
                      <img src="images/icon/ico.png" alt="" style="height: 97px; padding:5px">
                      <div class="multisteps-form__content">
                        <div class="form-row mt-4">
                          <div class="col-12 col-sm-12 mt-4 mt-sm-0">
                            <h1>Success !</h1>
                            <h6>Your form has been submitted.</h6>
                          </div>
                        </div>
                        <div class="button-row d-flex mt-4"> 
                          <button class="btn  ml-auto"  type="submit" title="Send" name="submit" style="background-color:#0392ce; color:white; margin: 0px 296px; margin-top: 74px; border:none;">Go To Home</button>
                    </center>
                    </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <!-- partial -->
    <footer style="">
      <div class="copyright">
        <center>
          <p>For support please call Biolink at <b style="color:#0392ce">919-678-9478</b> or email at <b style="color:#0392ce">info@biolinkonline.com</b></p>
        </center>
      </div>
    </footer>
    <script  src="script.js"></script>
  </body>
</html>