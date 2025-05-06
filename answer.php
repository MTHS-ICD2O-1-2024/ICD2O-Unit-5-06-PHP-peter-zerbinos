<!DOCTYPE html>
<!-- ICS2O-Unit5-06-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Multiplication with Addition, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Multiplication with Addition, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Multiplication with Addition, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/multiplication_chart.png" alt="Multiplication Chart" />
      </div>
      <br />
      <?php
      $factor = $_GET["factor"];
      $multiplier = $_GET["multiplier"];
      $product = 0;
      while ($multiplier > 0) {
        $product = $product + $factor;
        $multiplier = $multiplier - 1;
      }
      // Display result and original inputs
      echo "Factor: " . $_GET["factor"] . "<br>";
      echo "Multiplier: " . $_GET["multiplier"] . "<br>";
      echo "The product is " . $product . ".";
      ?>
    </main>
  </div>
</body>

</html>