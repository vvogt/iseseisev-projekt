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
    <title>VVogt portfolio</title>
</head>
<body>
    <main>
        <section class="activePage" id="about">
            <div class="background">
                <div class="bg-layer">
                    <img class="stars" src="ui/t2hed_1.svg" alt="stars">
                    <img class="stars" src="ui/t2hed_1.svg" alt="stars">
                    <img class="stars" src="ui/t2hed_1.svg" alt="stars">
                </div>
                <div class="bg-layer slower">
                    <img class="stars" src="ui/t2hed.svg" alt="stars">
                    <img class="stars" src="ui/t2hed.svg" alt="stars">
                    <img class="stars" src="ui/t2hed.svg" alt="stars">
                </div>
            </div>
            <div id="fullname">
                <div class="name" id="fName">Vahur</div>
                <div class="name" id="lName">Vogt</div>
<!--                 <img src="ui/VV_pea.svg" alt="vahur's head" class="head"> -->
            </div>
        </section>

        <div class="lightBox" onclick="hideLightbox(event)">
            <svg class="arrow" id="L-arrow" width="37px" height="71px" viewBox="0 0 37 71">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polyline id="Path" stroke="#979797" stroke-width="17" transform="translate(19.5, 35.4) rotate(-180) translate(-19.5, -35.4) " points="10 5 29 35.4 10 65.8"></polyline>
                </g>
            </svg>
            <div class="picContainer">
                <img class="selectedPic" src="">
<!--                 <div id="loader" width="60px" height="60px" style="display: none"></div> -->
            </div>
            <svg class="arrow" id="R-arrow" width="37px" height="71px" viewBox="0 0 37 71">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polyline id="Path" stroke="#979797" stroke-width="17" points="8 5 27 35.4 8 65.8"></polyline>
                </g>
            </svg>
            <img id="close-icon" src="ui/x.svg" alt="close-icon">
        </div>

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
                <a href="mailto: vahur.vogt@gmail.com">vahur.vogt@gmail.com</a>
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
        <div class="selectBtn active" id="aboutBtn">MINUST</div>
        <div class="selectBtn" id="workBtn">TÖÖD</div>
        <div class="selectBtn" id="contactBtn">KONTAKT</div>
    </div>


</body>
</html>