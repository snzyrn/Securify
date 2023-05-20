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
        <h2><a href="../index.php">SECURIFY</a></h2></h2>
    </div>
</seciton>
<!--Main-->
<div class="main">
    <a href="../index.php" id="goBack-btn"><i class="fa-solid fa-caret-left"></i> Go back to page</a>
    <h3>Reflected XSS Attack Application</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur culpa debitis excepturi explicabo, fuga iste iure labore nam obcaecati quod veritatis. Architecto deserunt iste, minus nobis numquam quo quos!
    </p>
    <div class="web-application">
        <section class="header">
            <h3 id="logo">Test</h3>
            <div class="search-container">
                <form method="GET" action="" name="form">
                    <input type="text" name="name" placeholder="Search...">
                    <button type="submit" name="submit" value="search" <i class="fa-solid fa-search"></i></button>
                </form>
            </div>
            <nav class="icons">
                <a href="#">
                    <i class=" fa-solid fa-house"></i>
                </a>
                <a href="#">
                    <i class=" fa-solid fa-heart"></i>
                </a>
                <a href="#">
                    <i class=" fa-solid fa-basket-shopping"></i>
                </a>
                <a href="#">
                    <i class=" fa-solid fa-user"></i>
                </a>
            </nav>
        </section>

    </div>
</div>
<!--Footer-->
<section class="footer">
    <div class="box-container">
        <div class="logo">
            <i class="fa-solid fa-shield-cat"></i>
            <h2><a href="../index.php">SECURIFY</a></h2></h2>
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
