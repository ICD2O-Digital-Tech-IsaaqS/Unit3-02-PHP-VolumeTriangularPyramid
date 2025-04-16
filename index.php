<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Volume of a Right Triangular Pyramid, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (11)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (11)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (11)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (11)/site.webmanifest">
  <title>Triangular Pyramid Volume</title>

  <!-- Link to external CSS -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

  <h1>Volume of a Right Triangular Pyramid</h1>

  <img src="images/right-triangular-pyramid-volume.png" alt="Triangular Pyramid Diagram" width="300"><br><br>

  <!-- Input form -->
  <form method="post">
    <label for="a">Base of triangle (a):</label>
    <input type="number" step="any" name="a" id="a" required><br><br>

    <label for="b">Height of triangle (b):</label>
    <input type="number" step="any" name="b" id="b" required><br><br>

    <label for="h">Height of pyramid (h):</label>
    <input type="number" step="any" name="h" id="h" required><br><br>

    <button type="submit">Calculate Volume</button>
  </form>

  <!-- Result display -->
  <div id="result">
    <?php
      // If form is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $h = floatval($_POST["h"]);

        $volume = (1/6) * $a * $b * $h;

        echo "Volume: " . round($volume, 2) . " cm³";
      }
    ?>
  </div>

</body>
</html>