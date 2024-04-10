<?php
  $Celsius = $_POST['celsius'];
  $Fahrenheit = ($Celsius * 9/5) + 32;
?>
<h3>Result:</h3>
This temperature in fahrenheit is: <?php echo$Fahrenheit?><sup>o</sup>F