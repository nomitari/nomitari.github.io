<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'admin@nomitari.com';
    $email_subject = "Portfolio Contact";
    $email_body = "From $name:\n".
                  "$message".

    $to = "admin@nomitari.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
           
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nomi Tari</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Xanh+Mono&display=swap&family=Heebo:wght@200;500&family=Work+Sans:wght@100;200;400&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="img/crown.png" rel="shortcut icon" type="image/x-icon"/>
        <link href="img/crown.png" rel="apple-touch-icon"/>

    </head>
    <body id="contact-body">
        <nav class="navbar navbar-expand-lg sticky-top" style="margin-bottom: 1em;">
            <a class="navbar-brand" id="brand" href="/">
                <img src="img/brand.png" alt="brand"/>
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link selected" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" id="contact-page">
            <div class="contact-grid">
                <div id="blurb">
                    <figure>
                        <img src="img/me.png">
                    </figure>
                </div>
                <div id="contact-info">
                    <div>
                        <button id="email-button">Contact Me</button>
                    </div>
                    <div>
                        <a class="icon-link" href="https://www.linkedin.com/in/nomi-tari-35a584165/" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                        <a class="icon-link" href="https://github.com/nomitari" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="modal-container" id="modal">
            <span class="close" id="close-btn">&times</span>
            <div class="">
                <form name="email-form" method="post" action="contact.php" id="form" class="topBefore">
                    <input id="name" type="text" placeholder="NAME" name="name">
                    <input id="email" type="text" placeholder="E-MAIL" name="email">
                    <textarea id="message" type="text" placeholder="MESSAGE" name="message"></textarea>
                    <input id="submit" type="submit" value="SEND">
                </form>
            </div>
        </div>

        <footer class="footer">
            <div class="small" style="color: grey;">Copyright © 2021 Nomi Tari. All rights reserved.</div>
        </footer>

        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="index.js" type="text/javascript"></script>
    </body>
</html>






