<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Time In Cape Twon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="" type="text/html" href="footer.html">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
<body onload="show()">

<?php  

	$IPaddress = "154.127.59.216";
	
	$details    =   ip_details($IPaddress);
	
	function ip_details($IPaddress) 
	{
		$json       = file_get_contents("http://www.geoplugin.net/json.gp?ip=".$IPaddress);
		$details    = json_decode($json);
		return $details;
	}

$time_area = $details->geoplugin_timezone;

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

<script type="text/javascript">
function show(){
    var timer = new Date().
      toLocaleString('en-US', { timeZone: '<?php echo $time_area; ?>' })
      .split(',')[1]
      .trim();
    document.getElementById("demo").innerHTML = timer
    setTimeout("show()",1000);
}
</script>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Time.ind.in</a>
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
    <h2>Time in <?php echo $details->geoplugin_city; echo ",\t"; echo $details->geoplugin_region; echo ",\t"; echo $details->geoplugin_countryName;?></h2>
		<h1 id="demo"></h1>
		<h3><?php echo $va1;?></h3>
			<div class="container features">
			<a href="Losangeles.php" class="btn btn-light btn-md" role="button" >Los Angeles <br><?php echo $date1->format("g : i : s A"); ?></a>
			<a href="Newyork.php" class="btn btn-light btn-md" role="button" >New York <br><?php echo $date2->format("g : i : s A"); ?></a>
			<a href="London.php" class="btn btn-light btn-md" role="button" >London <br><?php echo $date3->format("g : i : s A"); ?></a>
			<a href="Paris.php" class="btn btn-light btn-md" role="button" >Paris <br><?php echo $date4->format("g : i : s A"); ?></a>
			<a href="Moscow.php" class="btn btn-light btn-md" role="button" >Moscow <br><?php echo $date5->format("g : i : s A"); ?></a>
			<a href="Beijing.php" class="btn btn-light btn-md" role="button" >Beijing <br><?php echo $date6->format("g : i : s A"); ?></a>
			<a href="Tokyo.php" class="btn btn-light btn-md" role="button" >Tokyo <br><?php echo $date7->format("g : i : s A"); ?></a>
		</div>
	</div>
	</header>
	 <div class="container features">
    <div class="row">
      <div class="example col-md-1">
        <a href="Istanbul.php" class="btn btn-light btn-md" role="button" >Istanbul</a>
        <a href="Singapore.php" class="btn btn-light btn-md" role="button" >Singapore</a>
        <a href="Dubai.php" class="btn btn-light btn-md" role="button" >Dubai</a>
        <a href="Toronto.php" class="btn btn-light btn-md" role="button" >Toronto</a>
      </div>
    <div class="example col-md-1">
        <a href="Sydeny.php" class="btn btn-light btn-md" role="button" >Sydeny</a>
        <a href="Tehran.php" class="btn btn-light btn-md" role="button" >Tehran</a>
        <a href="Madrid.php" class="btn btn-light btn-md" role="button" >Madrid</a>
        <a href="Hongkong.php" class="btn btn-light btn-md" role="button" >HongKong</a>&nbsp;
      </div>
      <div class="example col-md-1">
        <a href="Capetown.php" class="btn btn-light btn-md" role="button" >CapeTown</a>
        <a href="Rome.php" class="btn btn-light btn-md" role="button" >Rome</a>
        <a href="Prague.php" class="btn btn-light btn-md" role="button" >Prague</a>
        <a href="Dhaka.php" class="btn btn-light btn-md" role="button" >Dhaka</a>
      </div>
      <div class="example col-md-1">
        <a href="Mumbai.php" class="btn btn-light btn-md" role="button" >Mumbai</a>
        <a href="Karachi.php" class="btn btn-light btn-md" role="button" >Karachi</a>
        <a href="Jodhpur.php" class="btn btn-light btn-md" role="button" >Jodhpur</a>
        <a href="Kerala.php" class="btn btn-light btn-md" role="button" >Kerala</a>
      </div>
      <div class="example col-md-1">
        <a href="Chicago.php" class="btn btn-light btn-md" role="button" >Chicago</a>
        <a href="Bangkok.php" class="btn btn-light btn-md" role="button" >Bangkok</a>
        <a href="Baghdad.php" class="btn btn-light btn-md" role="button" >Baghdad</a>
        <a href="Boston.php" class="btn btn-light btn-md" role="button" >Boston</a>
      </div>
      <div class="example col-md-1">
        <a href="Auckland.php" class="btn btn-light btn-md" role="button" >Auckland</a>
        <a href="Athens.php" class="btn btn-light btn-md" role="button" >Athens</a>
        <a href="Frankfurt.php" class="btn btn-light btn-md" role="button" >Frankfurt</a>
        <a href="Vienna.php" class="btn btn-light btn-md" role="button" >Vienna</a>
      </div>
      <div class="example col-md-1">
        <a href="Milan.php" class="btn btn-light btn-md" role="button" >Milan</a>
        <a href="Barcelona.php" class="btn btn-light btn-md" role="button" >Barcelona</a>
        <a href="Delhi.php" class="btn btn-light btn-md" role="button" >Delhi</a>
        <a href="AbuDhabi.php" class="btn btn-light btn-md" role="button" >AbuDhabi</a>
      </div>
      <div class="example col-md-1">
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
      </div>
      <div class="example col-md-1">
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
      </div>
      <div class="example col-md-1">
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
      </div>
      <div class="example col-md-1">
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
        <a href="#" class="btn btn-light btn-md" role="button" >Tokyo</a>
      </div>
    </div> 
  </div>  
<footer class="page-footer font-small mdb-color pt-4">
<div class="container text-center text-md-left">
		<table>
		  <tr>
			<td>
			  <p class="text-uppercase mb-4 font-weight-bold">Advertise&nbsp</p>
			</td>
			<td>
			  <p class="text-uppercase mb-4 font-weight-bold">&nbsp Terms of use &nbsp</p>
			</td>
			<td>
			  <p class="text-uppercase mb-4 font-weight-bold">&nbsp Privacy policy</p>
			</td>
		  </tr>
		</table>
		
	<p>Time.ind.in displays exact, official atomic clock time for any time zone (more than 7 million locations) in 52 languages.
		Automated access is prohibited. Support for cookies and JavaScript is required.
		Copyright © 2009-2020 Time.ind.in . All rights reserved.</p>
</div>
	
	<div class="container text-center text-md-left">

    <div class="row text-center text-md-left mt-3 pb-3">

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <p>
          <a href="#">What Time is it?</a>
        </p>
        <p>
          <a href="#">क्या समय हुआ है?</a>
        </p>
        <p>
          <a href="#">Che ore sono?</a>
        </p>
        <p>
          <a href="#">¿Que hora es?</a>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <p>
          <a href="#">Vad är klockan?</a>
        </p>
        <p>
          <a href="#">کیا وقت ہوا ہے؟</a>
        </p>
        <p>
          <a href="#">現在是幾奌？</a>
        </p>
        <p>
          <a href="#">今何時ですか？</a>
        </p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <p>
          <a href="#">ক 'টা বাজে?</a>
        </p>
        <p>
          <a href="#">Hoe laat is het?</a>
        </p>
        <p>
          <a href="#">કેટલા વાગ્યા?</a>
        </p>
        <p>
          <a href="#">ساعت چند است؟</a>
        </p>
      </div>
    </div>
    <hr>
	<p>Time.ind.in automatically displays the time in your time zone by using your IP address to detect your location.  Your IP address is <a href="#"><?php echo $IPaddress ?></a>. Your detected location is <a href="#"><?php echo $details->geoplugin_city; echo ",\t"; echo $details->geoplugin_region; echo ",\t"; echo $details->geoplugin_countryName;?></a></p>
	</div>
  <div class="container text-center text-md-left">

    <div class="row text-center text-md-left mt-3 pb-3">

      <hr class="w-100 clearfix d-md-none">

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
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
          <i class="fas fa-home mr-3"></i> INDIA</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@time.ind.in</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91 999999999</p>
        <p>
          <i class="fas fa-print mr-3"></i> +91 999999999</p>
      </div>
    </div>
    <hr>
	
    <div class="row d-flex align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="text-center text-md-left">© 2020 Copyright:
          <a href="#">
            <strong> Time.ind.in</strong>
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