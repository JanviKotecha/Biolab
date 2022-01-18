<style>

.header {
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

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}



.header a.active {
  background-color: #0392ce;
  color: white;
  width: 250px;
}
.header a.activeb {
  background-color: black;
  color: white;
  width: 200px;
}

.header-right {
  float: right;
  margin: 10px;
  padding-right: 50px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }

 
}
 .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  overflow: hidden;
}

.sticky + .content {
  padding-top: 102px;
}
</style>




<div class="header" id="myHeader">
    <a href="index.php">
       <img src="images/resources/logo.png" alt="Awesome Logo" style="max-width: 35% !important;">
    </a>
  <div class="header-right">

    <a href="form.php" class="btn active" >Covid Test Request Form </a>
    <a href=""></a>
    <a href="result.php" class="btn activeb" style="">View Result</a>
  </div>
</div>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>