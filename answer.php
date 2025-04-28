<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Student discount for the museum, with PHP" />
  <meta name="keywords" content="math, salary, PHP, income" />
  <meta name="author" content="Adrina.Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Student discount for the museum, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Student discount for the museum, with PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/download.jpg" alt="student discount" width="500" />
      </div>

      <div class="page-content-answer">
        <div id="result">
          <?php
          $result = "";

          // Check if the form is submitted via GET
          if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Input data
            $day = $_GET["day"];
            $userAge = intval($_GET["user-age"]);

            // Process + output
            if ($day === "Tuesday" || $day === "Thursday" || ($userAge > 12 && $userAge < 21)) {
              $result = "Since you're $userAge and today is $day, you get a discount for the museum!";
            } else {
              $result = "Since you're $userAge and today is $day, you must pay the regular price.";
            }
          }
          ?>
          <p><?php echo $result; ?></p>
        </div>
      </div>

      <div class="page-content-return">
        <a href="index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>