<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <title>Calculating Celsius to Fahrenheit</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>

    <?php
      echo "<h1>Calculating Celsius to Fahrenheit</h1>";
      echo "<br>";
    ?>
    <form action="./results.php" method="post" target="results">
      <label for="lblCelsius">Celsius:</label>
      <input type="number" id="celsius" placeholder="Enter the temperature (calsius)" name="celsius"><br><br>
      <input type="submit" value="Calculate Temperature in Fahrenheit">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        This temperature in fahrenheit is:
      </iframe>
  </body>
</html>
