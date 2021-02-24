<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, inintial-scale=1/0" />
    <title>Ipsum Portfolio</title>
    <link rel="stylesheet" href="css.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
</head>

<body>
<?php 
include './components/header.php'?>
    <!--intro-->
    <section class="intro" id="home">
        <h1 class="section__titulli section_titulli--intro">
            Hi,I am <strong>Loren Ipsum</strong>
        </h1>
        <p class="section__subtitulli section__subtitulli--intro">Developer</p>
        <img src="portfoilio5.png"  alt="" class="intro__img"/>

    </section>

   
    <!--my services-->

    <section class="my-services" id="services">
       
        <h3 class="section__titulli section_titulli--services">What I do</h3>
        <div class="services">
            <div class="service">
                <h3>Desing</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div> <!--servisi 1-->
            
            <div class="service">
                <h3>E-Commerce</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> <!--servisi2-->

            <div class="service">
                <h3>UX/UI</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div> <!--servisi3-->

        </div> <!--servisi im-->

        <a href="#work" class="btn">My work</a>

    </section>

    <!--about me-->
    <section class="about-me" id="about">
        <h2 class="section__titulli section__titulli--about ">Who I am</h2>
        <p class="section__subtitulli section__subtitulli--about">Designer & developer based out of NYC</p>

        <div class="about-me__body">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <img src="portfoilio5.png"  alt="" class="about-me__img"/>

    </section>

    <!--my work-->
    <section class="my-work" id="work">
        <h2 class="section__titulli section_titulli--work">My work</h2>
        <p class="section__subtitulli section__subtitulli--work">A selection of my range of work</p>

        <div class="portfolio">

            <!--portfolio foto1-->
            <a href="#" class="portfolio__item">
                <img src="portfoilio1.png" alt="" class="portfolio__img" />
            </a>

            <!--portfolio foto1-->
            <a href="#" class="portfolio__item">
                <img src="pc22.png" alt="" class="portfolio__img" />
            </a>

            <!--portfolio foto1-->
            <a href="#" class="portfolio__item">
                <img src="portfoilio4.png" "
                     alt="" class="portfolio__img" />
            </a>

            <!--portfolio foto1-->
            <a href="#" class="portfolio__item">
                <img src="#" alt="" class="portfolio__img" />
            </a>
        </div>
    </section>


        <?php  include './components/footer.php' ?>
           
    <script src="index.js"></script>

</body>
</html>