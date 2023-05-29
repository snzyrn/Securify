<!DOCTYPE html>
<html>

<head><title>403 Forbidden</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TechZone</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css file -->
    <link rel='stylesheet' type='text/css' media='screen' href='../style.css'>
    <!-- js file -->
    <script src='../script.js'></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/c52eceab34.js" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <section class="header">


    </section>


    <div id="app">
        <div>403</div>
        <div class="txt">
            Forbidden<span class="blink">_</span>
        </div>
    </div>



   
</body>

</html>



<style>
    /* CSS kodları */
    html,
    body {
        width: 100%;
        height: 100%;
        margin: 0;
    }

    #app {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #000;
        color:#FF0000;
        font-size: 6rem;
        font-family: 'Press Start 2P', cursive;
        text-shadow: 0px 0px 10px #1a4f1a;
    }

    #app .txt {
        font-size: 1.8rem;
    }

    @keyframes blink {
        0% {
            opacity: 0;
        }

        49% {
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    .blink {
        animation-name: blink;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-5px);
        }

        75% {
            transform: translateX(5px);
        }

        100% {
            transform: translateX(0);
        }
    }

    .blink {
        animation-name: blink;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    #app {
        animation-name: shake;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        background-image: url("background.jpg");
        background-size: cover;

    }
</style>
</style>