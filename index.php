<?php
if(isset($_POST['newLead'])){
    $to = "aitch.sfs@gmail.com, ohshaban@gmail.com"; // this is your Email address
    $from = "RealtyPerfected <realtyperfected@realtyperfected.com>"; // this is the sender's Email address
    $full_name = $_POST['fullName'];
    $subject = "New Lead: " . $full_name;
    $message = "<html><body>Full Name: " . $full_name . "<br>Email: " . $_POST['email'] . "<br>Phone: " . $_POST['phone'] . "<br><br>Location: " . $_POST['location'] . '<br>HomeType: ' . $_POST['homeType'] . '<br>Budget: ' . $_POST['budget'] . '<br>Time Frame: ' . $_POST['timeFrame'] . '<br>Is Selling: ' . $_POST['isSelling'] . "</body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $from . "\r\n";

    mail($to, $subject, $message, $headers);
    header('Location: thank_you.html');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173633353-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-173633353-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Other CSS and Fonts-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald&display=swap">

    <link rel="icon" href="RealtyPerfectedLogo.png">
    <title>Realty Perfected</title>
  </head>
  <body class="">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="flex-row mb-auto d-flex justify-content-center">
        <a href="/">
          <img style="width: 90px; height: 85px" src="RealtyPerfectedLogo.png" />
        </a>

        <a href="/">
          <div class="inner">
            <h1 style="margin: 0px;"><span style="color: #ca3f46">S&K</span> Real Estate and Investments LLC</h1>
            <h2 style="margin: 0px;"><span style="color: #ca3f46">Realty</span>Perfected</h2>
          </div>
        </a>
      </header>

      <main role="main" class="inner cover">

        <form id="locationForm" class="needs-validation" novalidate>
          <h1 class="cover-heading">Start Your New Home Journey</h1>
          <p class="lead">Sign up with us for your new home buying experience and earn <span style="font-size: x-large; color:#ca3f46">$2,000</span> towards your closing costs.</p>
          <div class="form-group">
            <label>Where are you looking?</label>
            <input type="text" class="form-control form-control-lg" id="locationInput" placeholder="Where are you looking?" required>
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Get Started</button>
        </form>

        <form id="homeTypeForm" class="needs-validation text-center" style="display: none;" novalidate>
          <p style="font-size: xx-large;">What type of home are you looking for?</p>
          <div class="form-group">
            <button id="newConstructionBtn" class="btn btn-lg btn-light m-2" style="width: 300px;">New Construction</button><br>
            <button id="resaleBtn" class="btn btn-lg btn-light m-2" style="width: 300px;">Resale</button>
            <input type="text" class="form-control form-control-lg" id="homeTypeInput" required hidden>
          </div>
        </form>

        <form id="budgetForm" class="needs-validation text-center" style="display: none;" novalidate>
          <p style="font-size: xx-large;">How much are you looking to spend?</p>
          <div class="form-group">
            <button id="338-btn" class="btn btn-light m-1" style="width: 300px;">$250k - $338k</button><br>
            <button id="250-btn" class="btn btn-light m-1" style="width: 300px;">$250k or less</button><br>
            <button id="398-btn" class="btn btn-light m-1" style="width: 300px;">$338k - $398k</button><br>
            <button id="502-btn" class="btn btn-light m-1" style="width: 300px;">$398k - $502k</button><br>
            <button id="600-btn" class="btn btn-light m-1" style="width: 300px;">$502k - $600k</button><br>
            <button id="903-btn" class="btn btn-light m-1" style="width: 300px;">$600k - $903k</button><br>
            <button id="more-btn" class="btn btn-light m-1" style="width: 300px;">$903k or more</button>
            <input type="text" class="form-control form-control-lg" id="budgetInput" required hidden>
          </div>
        </form>

        <form id="timeFrameForm" class="needs-validation text-center" style="display: none;" novalidate>
          <p style="font-size: xx-large;">How soon are you looking to buy?</p>
          <div class="form-group">
            <button id="asap-btn" class="btn btn-light m-1" style="width: 300px;">ASAP</button><br>
            <button id="1-3-btn" class="btn btn-light m-1" style="width: 300px;">1-3 months</button><br>
            <button id="3-6-btn" class="btn btn-light m-1" style="width: 300px;">3-6 months</button><br>
            <button id="6-12-btn" class="btn btn-light m-1" style="width: 300px;">6-12 months</button><br>
            <button id="12-btn" class="btn btn-light m-1" style="width: 300px;">12+ months</button>
            <input type="text" class="form-control form-control-lg" id="timeFrameInput" required hidden>
          </div>
        </form>

        <form id="isSellingForm" class="needs-validation text-center" style="display: none;" novalidate>
          <p style="font-size: xx-large;">Are you also looking to sell a property?</p>
          <div class="form-group">
            <button id="asap-btn" class="btn btn-lg btn-light m-2" style="width: 250px;">Yes</button><br>
            <button id="1-3-btn" class="btn btn-lg btn-light m-2" style="width: 250px;">No</button>
            <input type="text" class="form-control form-control-lg" id="isSellingInput" required hidden>
          </div>
        </form>

        <form id="signUpForm" class="needs-validation" style="display: none;" novalidate>
          <p style="font-size: xx-large;">Sign up with us</p>
          <div class="form-group">
            <label>FULL NAME</label>
            <input type="text" class="form-control form-control-lg" id="nameInput" required>
          </div>
          <div class="form-group">
            <label>EMAIL ADDRESS</label>
            <input type="email" class="form-control form-control-lg" id="emailInput" required>
          </div>
          <div class="form-group">
            <label>PHONE NUMBER</label>
            <input type="tel" class="form-control form-control-lg" id="phoneInput" required>
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Start Your New Home Journey</button>
        </form>

      </main>

      <footer class="mastfoot mt-auto">
       <div class="inner row d-flex flex-wrap align-items-center justify-content-center">
          <img style="width: 75px" src="equal-housing-opportunity-white.png" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <p id="copyright"></p>
        </div>
      </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/axios/dist/axios.min.js"></script>
    <script src="index.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  </body>
</html>
