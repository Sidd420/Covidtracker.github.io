<!DOCTYPE html>
<html lang="en">
<head>
    <title>Covid tracker</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19 tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#previd">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="images/image-1.png" width="200" height="200">
          </div> 
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
              <h1> Let's Stay Safe & Fight Together Against Cor<span class="rot">
             <img src="images/image-2.jpg" width="65" height="65"></span> na Virus</h1>
            </div>
        </div>

    </div>
</div>
<section class="covid_update">
  <div class="mb-3 mt-5">
    <h3 class= "text-uppercase text-center">Covid-19 Updates</h3>
  </div>
  <div class="d-flex justify-content-around align-items-center">
    <div>
      <h1 class="count">1,524,299</h1>
      <p>Passengers screened at airport</p>
    </div>
    <div>
      <h1 class="count">512</h1>
      <p>Active COVID-19 cases</p>
    </div>
    <div>
      <h1 class="count">40</h1>
      <p>Cured cases</p>
    </div>
    <div>
      <h1 class="count">9</h1>
      <p>Death cases</p>
    </div>
  </div>
</section>
<div class="container-fluid sub_section pt-5 pb-5"id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-2">
      <img src="images/image-3.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19(Corona-virus)</h2>
      <p>A coronavirus is a kind of common virus that causes an infection in your nose, sinuses, or upper throat. Most coronaviruses aren't dangerous.</p>
      <p>The novel coronavirus has impacted people in various ways. From taking a toll on respiratory health and other vital organs, the SARs-COV-2 virus has also affected people's fingers and toes. While it may not seem very dangerous, it can lead to discomfort and pain. Currently termed as 'COVID toes', while rare, it is said to be more prone in younger patients. </p>
    </div>
  </div>
</div>
<div class="container-fluid  pt-5 pb-5"id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Corona virus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-5.jpg"class="img-fluid" width="180" height="180">
        <figcaption>Cough</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-6.jpg"class="img-fluid" width="180" height="180">
        <figcaption>Fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-7.jpg"class="img-fluid" width="180" height="180">
        <figcaption>Runny nose</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-8.jpg"class="img-fluid" width="180" height="180">
        <figcaption>Sore throat</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-9.jpg"class="img-fluid" width="180" height="180">
        <figcaption>Tired ness</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-10.jpg"class="img-fluid" width="100" height="100">
        <figcaption>Difficulty in Breathing</figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid pt-5 pb-5"id="previd">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Corona Virus</h1>
  </div>
<div class="container">
  <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-11.jpg"class="img-fluid" width="110" height="110">
        <figcaption>Wash Your Hand</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-12.jpg"class="img-fluid" width="150" height="150">
        <figcaption>Use Mask</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-13.jpg"class="img-fluid" width="250" height="250">
        <figcaption>Social Distancing</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12">   
        <figure class="text-center">
        <img src="images/image-14.jpg"class="img-fluid" width="100" height="100">
        <figcaption>Use Hand Sanitizer/Hand Wash</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-15.jpg"class="img-fluid" width="210" height="210">
        <figcaption>Consult With Doctor</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center">
        <img src="images/image-16.jpg"class="img-fluid" width="190" height="190">
        <figcaption>Stay Home</figcaption>
        </figure>
        </div>
    </div>
  </div>
</div>
<div class="container-fluid pt-5 pb-5"id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us Asap</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
      <form action="" method="POST">
      <div class="form-group">
    <label >User name</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"name="email" placeholder="name@example.com" required autocomplete="off" >
  </div>
  <div class="form-group">
    <label>Mobile No</label>
    <input type="number" maxlength="10" class="form-control"name="mobile" placeholder="mobile" required autocomplete="off" >
  </div>
  <div class="form-group">
    <label >Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input " id="customcheckbox1" name="coronasym[]" value="cold">
      <label class="custom-control-label" for="customcheckbox1">Cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input " id="customcheckbox2" name="coronasym[]" value="fever">
      <label for="customcheckbox2" class="custom-control-label">Fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input " id="customcheckbox3" name="coronasym[]" value="sore throat">
      <label for="customcheckbox3" class="custom-control-label">Sore throat</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input " id="customcheckbox4" name="coronasym[]" value="runny nose">
      <label for="customcheckbox4" class="custom-control-label">runny nose</label>
    </div>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Feelings</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

      </div>
    </div>
  </div>
  
  <footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
      <p> Developed by Siddhanta Pal</p>
    </div>
  </footer>

    
</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

  $chk="";
  if(is_array($symp)|| is_object($symp)){
    foreach($symp as $chk1){
      $chk .= $chk1.",";
    }
  }
  $insertquery= "insert into coronacase(username,email,mobile,symp,messege) values('$username','$email','$mobile','$chk','$msg')";
  $query=mysqli_query($con,$insertquery);

  if($query){
    ?>
    <script>
        alert("inserted Successfully");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("inserted Not Successful");
    </script>
    <?php
}

}





?>