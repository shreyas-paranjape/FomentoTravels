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

        <?php
    $file = fopen("id-counter.txt", "r") or exit("Unable to open file!");
    $line=0;
    while (!feof($file)) {
    $line = fgets($file);
    ++$line;
    }
    fclose($file);
    $filew=fopen("id-counter.txt", "w") or exit("Unable to open file!");
    fwrite($filew,$line);
    fclose($filew);
    $keys=array('username','email','phone','region','ppl','date','preference','budget','city','interest','queries','time');
    $csv_line = array();
    foreach($keys as $key){
    	$find = "/\r\n/";
	$replace = " ";
    	$string= preg_replace($find, $replace, $_GET[$key]);
        array_push($csv_line,'' . $string);
    }
    $fname = 'form-data.tsv';
    $csv_line = $line. "	" . implode("	",$csv_line);
    $csv_line = $csv_line . "\r\n";
    $fcon = fopen($fname,'a');
    $fcontent = $csv_line;
    fwrite($fcon,$csv_line);
    fclose($fcon);
    echo "Your application has been submitted. We will contact you as soon as possible if we find you fit for our Scholarship program. Thank you for Applying.";
      
    

?>
            <br>
            <br>
            <h1>Click here to return to the home page
								<a href="index.html">
									<img src="" alt="fomentologo"/>
								</a>
							</h1>
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
