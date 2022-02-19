<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <?php include 'link/links.php'; ?>
     <?php include 'css/style.php'; ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVIAWARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
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
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="worldupdate.php">WorldUpdate</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="https://rzp.io/l/fnw2WCCA9">Donate</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact US</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src="images/corona.png" width="300" height="300">
</div>


</div>

<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
<h1> Let's Stay Safe And Fight Together Against Corona Virus  </h1>

</div>


</div>
</div>

</div>



<!--*******************corona latest updates*********** -->

<!--
<section class="corona_update container-fluid">

<div class="mb-3">

<h3 class="text-center">Covid-19 Updates </h3>

</div>

<div class="table-responsive">
<table class=" table table-bordered table-striped text-center" id="tbval">


<tr>
<th>Country</th>
<th>TotalConfirmed</th>
<th>TotalRecovered</th>
<th>TotalDeaths</th>
<th>NewConfirmed</th>
<th>NewRecovered</th>
<th>NewDeaths</th>


</tr>
</table>
</div>

</div>
</section>

-->

<!-- about section -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
<div class="section-header text-center mb-5 mt-4">
    <h1>About Covid-19 </h1>
</div>
    <div class="row pt-5 ">

    <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
<img src="images/aboutcorona.jpg" class="img-fluid">

</div>


<div class="col-lg-6 col-md-6 col-12">
<h2>What is Covid-19??    </h2>
<p>  Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness.
   Anyone can get sick with COVID-19 and become seriously ill or die at any age. 

</div>


</div>

</div>
</div>



<!--Corona Symptoms-->
<div class="container-fluid  pt-5 pb-5 " id="sympid">
<div class="section-header text-center mb-5 mt-4">
    <h1>Covid-19 Symptoms </h1>

</div>

<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/cough.png" class="img-fluid" width="120" height="120">
<figcaption> Cough </figcaption>
</figure>


</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/fever.png" class="img-fluid" width="120" height="120">
<figcaption> Fever </figcaption>
</figure>


</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/breathing.png" class="img-fluid" width="120" height="120">
<figcaption> Difficulty in Breath </figcaption>
</figure>


</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/cold.png" class="img-fluid" width="120" height="120">
<figcaption> Cold </figcaption>
</figure>


</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/fatigue.png" class="img-fluid" width="120" height="120">
<figcaption> Fatigue </figcaption>
</figure>


</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center"> 
   <img src="images/anxiety.png" class="img-fluid" width="120" height="120">
<figcaption> Headache </figcaption>
</figure>


</div>

</div>

</div>

</div>



<!--Preventions-->

<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
<div class="section-header text-center mb-5 mt-4">
    
    <h1>Prevention against COVID-19 </h1>

</div>



<div class="container">
    <div class="row">
<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure > 
   <img src="images/wash.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub.
</p>
</div>

</div>
</div>






<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure class="text-center"> 
   <img src="images/mask.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>Wear masks and keep sanitizer with yourself while going out of your home.
</p>
</div>

</div>
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure class="text-center"> 
   <img src="images/nose.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>Cover your nose and mouth with a disposbale tissue or flexed elbow when you cough or sneeze.
</p>
</div>

</div>
</div>



<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure class="text-center"> 
   <img src="images/distance.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>Avoid close contact with people who are unwell (atleast 1 meter).
</p>
</div>

</div>
</div>



<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure class="text-center"> 
   <img src="images/quarantine.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>Stay home and self-isolated from others in the house if you feel unwell.


</p>
</div>

</div>
</div>




<div class="col-lg-4 col-md-4 col-12 mt-5">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">

<figure class="text-center"> 
   <img src="images/medical.png" class="img-fluid" 
   width="90" height="90">
</figure>


</div>
<div class="col-lg8 col-md-8 col-12">
<p>If you feel fever, cough or any other symptoms then seek medical care earliest.
</p>
</div>

</div>
</div>



</div>
</div>
</div>


<!--contact us-->
<div class="container-fluid  pt-5 pb-5 " id="contactid">
<div class="section-header text-center mb-5 mt-4">
    
    <h1>Contact US</h1>

</div>

<div class="container">
    <div class="row">
    <div class="col-lg-8  offset-lg-2 col-12"> 
<form action="" method="POST">
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control"
     name="username" placeholder="name" autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" 
    name= "email" placeholder="name@example.com"   autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label >Mobile Number</label>
    <input type="number"  class="form-control"
     name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe how u are feeling</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
    


</div>
</div>
</div>
</div>


<!--topcursor-->
<!--
<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div> -->

<!----footer-->

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
<p> Copyright by Itashi 2022</p>
</div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</footer>

<script type="text/javascript">


mybutton=document.getElementById("myBtn");
window.onscroll=function(){
    scrollFunction()
};

function scrollFunction()
{
    if(document.body.scrollTop>100 || document.documentElement.scrllTop>100)
    {
        mybutton.style.display="block";
    }
    else{
         mybutton.style.display="none";
    }
}

/*function topFunction()
{
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
}*/

/*

</script>
</body>

</html>



<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$msg=$_POST['msg'];

$insertquery= "insert into coronacase(username,email,mobile,message) 
values('{$username}','{$email}','{$mobile}','{$msg}')";

$query=mysqli_query($con,$insertquery);

if($query)
{
    ?>
    <script>
        alert("Submission successful");
        </script>
        <?php
}
else{
     ?>
    <script>
        alert("No insertion");
        </script>
        <?php
        }


      }








?>