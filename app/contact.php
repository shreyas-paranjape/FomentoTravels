<html>

<head>
    <meta charset="utf-8">
    <title>Fomento Travel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Fomento Travel'; 
        $tos = array ('amey@fomentotravel.com','nikhil@fomentotravel.com','nitish@fomentotravel.com'); 
        $subject = 'Fomento Travel Contact Form';
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        foreach ($tos as $to){
            mail($to,$subject,$body);
        }
        
// If there are no errors, send the email
//        echo "<p style=' '>"Thank you for contacting us.";
    }
?>
            <footer class="container">
                <hr />
                <nav class="row" style="margin-left: 130px; margin-right: -40px;">
                    <ul>
                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href="legacy.html"><h4>About</h4></a>
                        </li>

                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href="terms.html"><h4 style="margin-left: -30px;">Terms &amp; conditions</h4></a>
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
    </div>
</body>

</html>
