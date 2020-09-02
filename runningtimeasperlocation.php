<!DOCTYPE html>
<html>
<head>

</head>
<body onload="show()">
<?php  
    $ip = file_get_contents('https://api.ipify.org'); 
  
$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 

$time_area = $ipdat->geoplugin_timezone;
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
<p id="demo"></p>
</body>
</html>
