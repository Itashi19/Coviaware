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
    <ul class="navbar-nav mr-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    
  </div>
</nav>


<section class="corona_update container-fluid">

<div class="mb-3">

<h3 class="text-center mt-5">Covid-19 Updates </h3>

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






function fetch()
{
  $.get("https://api.covid19api.com/summary",
  
  function(data)
  {
    var tbval=document.getElementById('tbval');
    for(var i=1;i<(data['Countries'].length);i++){
      var x=tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
      tbval.rows[i].cells[0].style.background='#db7093';
    tbval.rows[i].cells[0].style.color='#fff';

x.insertCell(1);
    tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]
    ['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background='#9370db	';


      x.insertCell(2);
    tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]
    ['TotalRecovered'];
      tbval.rows[i].cells[2].style.background='#4bb7d8';


      x.insertCell(3);
    tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]
    ['TotalDeaths'];
      tbval.rows[i].cells[3].style.background='#f08080';

       x.insertCell(4);
    tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]
    ['NewConfirmed'];
      tbval.rows[i].cells[4].style.background='#4bb7d8';

       x.insertCell(5);
    tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]
    ['NewRecovered'];
      tbval.rows[i].cells[5].style.background='#9cc850';

       x.insertCell(6);
    tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]
    ['NewDeaths'];
      tbval.rows[i].cells[6].style.background='#f08080';
    }
  }
  );
}


</script>
</body>

</html>

