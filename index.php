<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <?php include("include/header.php"); ?>

    <section class="ghost">
        <div class="container">
            <h1 class="ghost-name">Unemployed <span class="name-g">Ghost</span></h1>
            <p class="ghost-about">Honorary Member of the "Abnormally Ugly Feet" Society.</p>
            <img src="img/ghost.jpg" alt="" class="ghost-photo">
        </div>

    </section>


    <section class="about">
        <div class="about-border1">
            <div class="about-border2">
                <div class="about-border3">
                    <div class="about-border4">
                        <div class="about-border5">
                            <div class="about-border6">
                                <h2 class="about-h">About me</h2>
                                <p class="about-p">I am a hereditary ghost. Every member of our family dies from generation to generation. We honor this tradition for many centuries.</p>
                                <p class="about-p">I love tea, travel and winston xstyle. I wear stunning white tunics and wonderful shoes with bare, ugly feet. And one day, they noticed me....</p>
                                <p class="about-p">I'm also a great dancer. I like to throw parties. Really, I'm a fucking Gatsby, but on a much smaller budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="skills">
        <div class="skills-container">
            <h2 class="about-h">Please wait, now you will see my photos...</h2>
            <div class="skills-row">
                <div class="skills-column one"><img class="skills-column-img" src="img/cat.png" alt=""></div>
                <div class="skills-column medi"><img class="skills-column-img" src="img/cat.png" alt=""></div>
                <div class="skills-column medi"><img class="skills-column-img" src="img/cat.png" alt=""></div>
                <div class="skills-column medi"><img class="skills-column-img" src="img/cat.png" alt=""></div>
                <div class="skills-column medi"><img class="skills-column-img" src="img/cat.png" alt=""></div>
            </div>
            
        </div>

    </section>


    <section class="portfolio">
        <div class="portfolio-container">
            <h2 class="about-h">Photo</h2>
            <div class="photo-slider swiper-container">
                <div class="photo-slider_wrapper swiper-wrapper">
                    <div class="photo-slider_slide swiper-slide">
                        <div class="photo-slider_photo"><img src="img/run.jpg" alt=""></div>
                    </div>
                    <div class="photo-slider_slide swiper-slide">
                        <div class="photo-slider_photo"><img src="img/family.jpg" alt=""></div>
                    </div>
                    <div class="photo-slider_slide swiper-slide">
                        <div class="photo-slider_photo"><img src="img/smoke.jpg" alt=""></div>
                    </div>
                    <div class="photo-slider_slide swiper-slide">
                        <div class="photo-slider_photo"><img src="img/dance.jpg" alt=""></div>
                    </div>
                </div>
                
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

    <?php include("include/footer.php"); ?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="java/script.js"></script>
</body>
</html>