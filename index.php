<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Random Number guess, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The Random Number guess, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Random Number guess, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/dice.gif" alt="Dice gif image" width="500" />
      </div>
      <br />
      <div class="page-content-guide">Please enter indgree between 1 to 6:</div>
      <div class="page-content-php">
        <form method="POST" action="">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="number" name="user-age" id="user-age" />
            <label class="mdl-textfield__label" for="user-age">age...</label>
            <span class="mdl-textfield__error">Input is not a number.</span>
          </div>

          <div class="mdl-textfield mdl-js-textfield">
            <select class="mdl-textfield__input" name="day" id="day">
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
              <option value="Saturday">Saturday</option>
              <option value="Sunday">Sunday</option>
            </select>
            <label class="mdl-textfield__label" for="day">day...</label>
          </div>

          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Check
          </button>
        </form>

        <div class="page-content-answer">
          <?php if (!empty($result)) echo "<div id='result'>$result</div>"; ?>
        </div>
</body>

</html>