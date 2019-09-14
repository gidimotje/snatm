<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saturday Night at the movies and more!</title>

    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" href="assets/styles/hover-min.css">
    <link rel="stylesheet" href="assets/styles/gen.min.css">
</head>
<body>
    <header id="header">
        <nav id="nav">
            <div class="logo"><img src="assets/images/logo-sth.png" alt="Logo"></div>
            <ul class="menu">
                <li><a href="#" class="hvr-underline-from-left home">Home</a></li>
                <li><a href="#" class="hvr-underline-from-left ambiance">Sfeerimpressie</a></li>
                <li><a href="#" class="hvr-underline-from-left order">Bestellen</a></li>
            </ul>
        </nav>
        <div id="hero">
            <h1 class="main-title">Saturday Night at the Movies</h1>
            <h3 class="secondary-title">and more</h3>
            <a href="#" class="cta-btn order hvr-grow">Bestel kaarten</a>
        </div>
    </header>

    <section id="ambiance">
        <h2 class="main-title">Sfeerimpressie</h2>
        <div class="carousel">
            <div><img src="assets/images/ambiance/web-snatm1.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm2.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm3.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm4.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm5.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm6.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm7.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm8.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm9.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm10.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm11.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm12.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm13.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm14.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm15.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm16.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm17.jpg" alt="#" class="img"></div>
            <div><img src="assets/images/ambiance/web-snatm18.jpg" alt="#" class="img"></div>
        </div>
    </section>

    <section id="order">
        <h2 class="main-title">Bestel uw kaarten</h2>
        <div class="text">Na uw aanvraag ontvangt u binnen 24 uur een bevestiging. Heeft u na 24 uur nog niks ontvangen? Neem dan contact met ons op.</div>
        <form action="#" id="orderForm" method="POST">
            <label for="name">Volledige naam:</label>
            <input type="text" class="input-name" name="name">
            <label for="email">E-mailadres:</label>
            <input type="text" class="input-email" name="email">
            <label for="phone">Telefoonnummer:</label>
            <input type="text" class="input-phone" name="phone">
            <label for="address">Adres:</label>
            <input type="text" class="input-address" name="address">
            <div class="flt-lft half-input-container">
                <label for="zip">Postcode</label>
                <input type="text" class="input-zip" name="zip">
            </div>
            <div class="flt-rt half-input-container">
                <label for="city">Plaatsnaam</label>
                <input type="text" class="input-city" name="city">
            </div>
            <label for="tickets">Aantal kaartjes:</label>
            <input type="number" class="input-tickets" name="tickets">
            <div id="response"></div>
            <input type="submit" value="Bestellen" class="submitbtn">
        </form>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/carousel.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/form.js"></script>
</body>
</html>