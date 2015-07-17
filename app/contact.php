<html>

<head>
    <meta charset="utf-8">
    <title>Fomento Travels: Our Legacy</title>
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
        <h1>Thank You for contacting us. we will get back to you soon!!</h1>
        <?php
    if ($_POST["submit"]) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Fomento Travel'; 
        $to = 'contact@fomentotravel.com'; 
        $subject = 'Fomento Travel Contact Form';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
// If there are no errors, send the email
//        echo "<p style=' '>"Thank you for contacting us.";
    }
?>
            <footer class="container">
                <hr />
                <nav class="row" style="margin-left: 100px; margin-right: -40px;">
                    <ul>
                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href="#"><h4>About</h4></a>
                        </li>

                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href=""><h4>Terms &amp; conditions</h4></a>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href=""><h4>Privacy policy</h4></a>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-3">
                            <a href="#"><h4>Contact</h4></a>
                        </li>
                    </ul>
                </nav>
            </footer>
    </div>
</body>

</html>
