<?php
include "config.php";

if (isset($_POST["post-comment"])) {
    $name = $_POST["name"];
    $comment = $_POST["message"];

    $checkQuery = "SELECT * FROM comment WHERE name = '$name' AND comment = '$comment'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows == 0) {
        $insertQuery = "INSERT INTO comment (name, comment) VALUES ('$name', '$comment')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    // Sayfayı yenilemeden önce POST verilerini temizle
    unset($_POST["name"]);
    unset($_POST["message"]);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

$sql = "SELECT * FROM comment";
$result = $conn->query($sql);
?>

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
        <h2><a href="../../index.php">SECURIFY</a></h2></h2>
    </div>
</seciton>
<!--Main-->
<div class="main">
    <a href="../index.php" id="goBack-btn"><i class="fa-solid fa-caret-left"></i> Go back to page</a>
    <h3>Stored XSS Attack Application</h3>
    <p id="exp">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur culpa debitis excepturi explicabo, fuga iste iure labore nam obcaecati quod veritatis. Architecto deserunt iste, minus nobis numquam quo quos!
    </p>
    <div class="product-card">
        <div class="product-img">
            <img id="img-1" src="img/product.jpeg" alt="">
        </div>
        <div class="product-details">
            <h4>Apple iMac M1 Çip 8GB 256GB SSD macOS Retina 24" FHD All In One Bilgisayar MGPH3TU/A Yeşil</h4>
            <p id="price">40.199,00 TL</p>
            <p id="about">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias atque autem porro quam repellat tempore. Accusantium dolorem laudantium sit!
            </p>
            <div class="colors">
                <p>Colors: </p>
                <box id="box-1"></box>
                <box id="box-2"></box>
                <box id="box-3"></box>
                <box id="box-4"></box>
            </div>
        </div>
    </div>
    <div class="comment-section">
        <div class="content">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='comment'>";
                    echo "<div class='comment-icon'><i class='fas fa-comment'></i></div>";
                    echo "<div class='comment-details'>";
                    echo "<p class='user-name'>" . $row['name'] . "</p>";
                    echo "<p class='comment-text'>" . $row['comment'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <div class="comment-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <input type="text" class="name" name="name" placeholder="Name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
                <textarea name="message" id="comment-text" cols="30" rows="10" placeholder="Comment"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
                <br>
                <button type="submit" id="comment-btn" name="post-comment">Post Comment</button>
            </form>
        </div>
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
