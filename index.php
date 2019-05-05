<?php include 'show.php';?>

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
    <section class="activePage" id="about">
        <div class="name" id="fName">Vahur</div>
        <div class="name" id="lName">Vogt</div>
    </section>
    <section class="hidden" id="work">
        <div class="gallery">
            <?php showPics('work'); ?>
        </div>
    </section>
    <div id="menu">
        <div class="selectBtn active" id="aboutBtn">ABOUT</div>
        <div class="selectBtn" id="workBtn">WORK</div>
        <div class="selectBtn" id="other">CONTACT</div>
    </div>


</body>
</html>