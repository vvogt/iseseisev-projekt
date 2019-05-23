<?php include 'imagefunctions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="index.js"></script>
    <title>Vahur Vogt</title>
</head>
<body>
    <main>
        <div class="lightBox" onclick="hideLightbox()">
            <div class="picContainer"><img class="selectedPic" src=""></div>
        </div>

        <section class="activePage" id="about">
            <div class="name" id="fName">Vahur</div>
            <div class="name" id="lName">Vogt</div>
        </section>

        <section class="hidden" id="work">
            <div class="gallery">
                <?php renameFiles('work'); ?>
                <?php createThumbs('work'); ?>
                <?php compareAndDelete('thumbnails'); ?>
                <?php showPics('thumbnails'); ?>
            </div>
        </section>

        <section class="hidden" id="contact">
            <div class="contact-form-title">
                <h1>KIRJUTA MULLE</h1>
                <h2>Küsi hinnapakkumist, paku tööd või kirjuta niisama :)</h2>
            </div>
            <div class="contact-form">
                <form action="mail.php" method="POST">
                    <input type="text" name="name" placeholder="Sinu nimi">
                    <input type="text" name="email" placeholder="Sinu e-mail">
                    <textarea name="message"></textarea>
                    <input id="send-button" type="submit" value="SAADA">
                </form>
            </div>
        </section>
    </main>

    <div id="menu">
        <div class="selectBtn active" id="aboutBtn">ABOUT</div>
        <div class="selectBtn" id="workBtn">WORK</div>
        <div class="selectBtn" id="contactBtn">CONTACT</div>
    </div>


</body>
</html>