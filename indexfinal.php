<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Time As Per Your IP Address</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="" type="text/html" href="footer.html">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	
	
	
  </head>
  //it throws error show function not defined
<body onload="show()">
<?php  
    $ip = file_get_contents('https://api.ipify.org'); 
  
$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 

$time_area = $ipdat->geoplugin_timezone;


$date = new DateTime("now", new DateTimeZone($time_area) );
$va1 =  $date->format("l, F j, Y");

$var2 = $date->format("g : i : s A");

$date2 = new DateTime("now", new DateTimeZone('America/New_York') );


$date1 = new DateTime("now", new DateTimeZone('America/Los_Angeles') );


$date3 = new DateTime("now", new DateTimeZone('Europe/London') );


$date4 = new DateTime("now", new DateTimeZone('Europe/Paris') );


$date5 = new DateTime("now", new DateTimeZone('Europe/Moscow') );


$date6 = new DateTime("now", new DateTimeZone('Asia/Shanghai') );


$date7 = new DateTime("now", new DateTimeZone('Asia/Tokyo') );

?> 
//this is the code for running clock 
<script type="text/javascript">
function show(){
    var timer = new Date().
      toLocaleString('en-US', { timeZone: '<?php echo $time_area; ?>' })
      .split(',')[1]
      .trim();
    document.getElementById("demo").innerHTML = timer
    setTimeout("show()",1000);

</script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.html">Time Locator</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</nav>
	<header class="page-header header container-fluid">
		<div class="overlay"></div>
		<div class="description">
		<h1>Your Time:</h1>
		<h2><?php echo $ipdat->geoplugin_city; echo "\t"; echo $ipdat->geoplugin_regionName; echo "\t"; echo $ipdat->geoplugin_countryName;?></h2>
		<p id="demo"></p>
			<h3><?php echo $va1;?></h3>
			<div class="container features">
			<button type="button" class="btn btn-light">Los Angeles <br>11:51</button>
			<button type="button" class="btn btn-light">New York <br>14:51</button>
			<button type="button" class="btn btn-light">London <br>19:53</button>
			<button type="button" class="btn btn-light">Paris <br>20:53</button>
			<button type="button" class="btn btn-light">Moscow <br>21:53</button>
			<button type="button" class="btn btn-light">Beijing <br>02:54</button>
			<button type="button" class="btn btn-light">Tokyo <br>03:54</button>
		</div>
	</div>
	</header>
	 <div class="container features">
		<div class="row">
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
			</div>
			<div class="example col-md-1">
				<button type="button" class="btn btn-light btn-sm" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
				<button type="button" class="btn btn-light btn-md" >Tokyo</button>
				<button type="button" class="btn btn-light btn-lg" >Tokyo</button>
			</div>
		</div> 
	</div> 
<footer class="page-footer font-small mdb-color pt-4">

  <div class="container text-center text-md-left">

    <div class="row text-center text-md-left mt-3 pb-3">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Link 1</h6>
        <p>
          <a href="#">Exact time now</a>
        </p>
        <p>
          <a href="#">Time here&there</a>
        </p>
        <p>
          <a href="#">Time zones</a>
        </p>
        <p>
          <a href="#">Just time</a>
        </p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Link 2</h6>
        <p>
          <a href="#">Calender</a>
        </p>
        <p>
          <a href="#">TimeZone News</a>
        </p>
        <p>
          <a href="#">FAQ</a>
        </p>
        <p>
          <a href="#">About</a>
        </p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> 22-B, IT TOWER, JAIPUR, RAJASTHAN</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@tecklearn.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91 7845129631</p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 856791323</p>
      </div>
    </div>
    <hr>
    <div class="row d-flex align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">
            <strong> www.tecklearn.com</strong>
          </a>
        </p>
      </div>
      <div class="col-md-5 col-lg-4 ml-lg-0">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
	$('.header').height($(window).height());
})
</script>
</body>
</html>
