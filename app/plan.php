<html>

<head>
    <meta charset="utf-8">
    <title>Fomento Travel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrapvalidator/dist/css/bootstrapValidator.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
</head>

<body>
    <div class="container center">
        <header class="page">
            <a href="index.html">
                <div>
                    <div>
                        <span class="fomento" style="margin-left: 50px;">Fomento</span><span class="travel">Travel</span>
                    </div>
                </div>
            </a>
        </header>
        <div class="container terms" style="padding-bottom:440px;">
            <h2>Thank You for contacting us. we will get back to you soon!!</h2>
        </div>

        <?php
    if ($_POST["submit"]) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $region = $_POST['region'];
        if (empty($_POST["region"])) {
            $region = "Not entered";
        } else {
            $region = $_POST["region"];
        }
        $ppl = $_POST['ppl'];
        $date = $_POST['date'];
        $night= $_POST['night'];
        $pref= $_POST['preference'];
        $pref = implode(', ', $pref);
        $bud = $_POST['budget'];
        if (empty($_POST["budget"])){
            $bud = "Not entered";
        } else {
            $bud = $_POST["budget"];
        }
        $city = $_POST['city'];
        if (empty($_POST["city"])) {
            $city = "Not entered";
        } else {
            $city = $_POST["city"];
        }
        $trip_type = $_POST['trip'];
        if (empty($_POST["trip"])) {
            $trip_type = "Not entered";
        } else {
            $trip_type = $_POST["trip"];
        }
        $que = $_POST['queries'];
        if (empty($_POST["queries"])) {
            $que = "Not entered";
        } else {
            $que = $_POST["queries"];
        }
        $time = $_POST['time'];
        if (empty($_POST["time"])){
            $time = "Not entered";
        } else {
            $time = $_POST["time"];
        }
        $from = 'Fomento Travel'; 
        $tos = array ('amey@fomentotravel.com'); 
        $subject = 'Plan a trip details';
        $body = "Following are the details from the 'Plan a trip form'\n From: $name\n E-Mail: $email\n Phone number: $phone\n Region of Stay: $region\n No. of people: $ppl\n Date of visit: $date\n No. of nights: $night\n Preference to contact me: $pref\n Budget: $bud\n Origin City: $city\n Trip Type: $trip_type\n Queries: $que\n Preferable time to contact: $time\n";
        foreach ($tos as $to){
        	$headers = "From: " . $name . "<" . $email .">" . "\r\n" .
           "Reply-To: " . $name . "<" . $email .">" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();
            mail($to,$subject,$body,$headers,"-f".$email);
        }
        
// If there are no errors, send the email
//        echo "<p style=' '>"Thank you for contacting us.";
    }
?>
    </div>
    <footer>
        <hr />
        <nav class="row" style="margin-left: 100px; margin-right: -40px;">
            <ul>
                <li class="col-lg-3 col-md-3 col-sm-3">
                    <a href="legacy.html"><h4>About</h4></a>
                </li>

                <li class="col-lg-3 col-md-3 col-sm-3">
                    <a href="terms.html"><h4>Terms &amp; conditions</h4></a>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-3">
                    <a href="policy.html"><h4>Privacy policy</h4></a>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-3">
                    <a href="contact.html"><h4>Contact</h4></a>
                </li>
            </ul>
        </nav>
    </footer>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/bootstrapvalidator/dist/js/bootstrapValidator.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:js({app,.tmp}) scripts/main.js -->
    <script src="scripts/block.js"></script>
    <script src="scripts/modal.js"></script>
</body>

</html>
