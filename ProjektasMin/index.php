<?php
require __DIR__ . '/app/app.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/db68ea48f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link rel="stylesheet" href="style/main.css">

    <title>Unicorn</title>
</head>

<body>
    <!-- Nav & Hero -->
    <header class="bg-image">
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#intro">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Hello</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#intro">Introduction</a></li>
                            <li><a class="dropdown-item" href="#article">Articles</a></li>
                            <li><a class="dropdown-item" href="#clients">Clients</a></li>
                            <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                            <li><a class="dropdown-item" href="#team">Team members</a></li>
                            <li><a class="dropdown-item" href="#facts">Facts</a></li>
                            <li><a class="dropdown-item" href="#blog">Blog</a></li>
                            <li><a class="dropdown-item" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Hero -->
        <section class="hero">
            <div class="hero-inner">
                <h1>Storyteller</h1>
                <hr class="section-divider">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quibusdam molestias rerum temporibus error unde hic deserunt aut itaque magnam ipsam iusto,
                    fuga dolores, vitae labore incidunt odit accusantium impedit.
                </p>
                <button class="btn-hero" type="button">read the rest</button>
            </div>
        </section>
    </header>
    <!-- Intro -->
    <section id="intro" class="introduction">
        <div class="introduction__intro">
            <img src="images/icons/brocoli.png" alt="brocoli">
            <h2>Who & Why</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quis accusamus. Aliquid neque dolorum magni qui eaque nam, quas recusandae minima aspernatur possimus rerum a
                voluptatibus quam cupiditate repellat hic corporis? Ad hic expedita sequi iure et? Temporibus facilis molestiae autem accusantium labore possimus quisquam omnis eaque odit,
                dolorem, ullam cum vitae totam? Cum nemo culpa beatae aperiam consequuntur voluptatibus quibusdam fugit saepe quas aliquid accusantium consectetur est facilis veniam,
                molestias quia perferendis minima. Vitae, temporibus aliquam vero id dolorum dignissimos adipisci eum quod sequi labore odit aspernatur dicta repellendus! Esse a consectetur
                expedita aperiam molestias placeat non recusandae reprehenderit!
            </p>
        </div>
    </section>
    <!-- Services -->
    <section class="service">
        <div class="service-inner">
            <div class="service-inner__time">
                <img src="images/icons/clock.png" alt="Clock">
                <h3>An Wow Feature</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora placeat illo voluptatem cupiditate eos veritatis ipsum incidunt ratione. Explicabo, laborum?</p>
            </div>
            <div class="service-inner__vector">
                <img src="images/icons/vector.png" alt="Vector">
                <h3>An Wow Feature</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora placeat illo voluptatem cupiditate eos veritatis ipsum incidunt ratione. Explicabo, laborum?</p>
            </div>
            <div class="service-inner__tractor">
                <img src="images/icons/truck.png" alt="Truck">
                <h3>An Wow Feature</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora placeat illo voluptatem cupiditate eos veritatis ipsum incidunt ratione. Explicabo, laborum?</p>
            </div>
        </div>
    </section>
    <!-- Article Slider -->
    <section id="article" class="articles text-center">
        <div class="articles-title">
            <h3>Featured Articles</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At natus, id laborum, consequatur suscipit reprehenderit dolorum, placeat iure adipisci obcaecati quae labore inventore
                reiciendis iusto quo! Officiis dolore necessitatibus et.</p>
        </div>
        <div class="articles-container position-relative">
            <div class="articles-slider">
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner articles-slider__slide-inner--first">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>A million ways to die in a wild wild wild west</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/1.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Jimmy Jefferson</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, qui.</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/2.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Gail Guitierrez</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta laudantium omnis deserunt sed, delectus dolore?</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/3.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Mason Jhonston</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>A million ways to die in a wild wild wild west</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/1.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Jimmy Jefferson</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, qui.</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/2.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Gail Guitierrez</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-slider__slide">
                    <div class="articles-slider__slide-inner">
                        <div class="articles-slider__slide-content">
                            <h3 class="topic">Comic</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta laudantium omnis deserunt sed, delectus dolore?</p>
                            <div class="articles-slider__slide-author">
                                <div class="articles-slider__slide-image">
                                    <img src="images/authors/3.jpg" alt="jimmy">
                                </div>
                                <div class="articles-slider__slide-text">
                                    <p>Mason Jhonston</p>
                                    <p>21/08/2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="articles-slider-controls">
                <div class="articles-slider-controls__prev"></div>
                <div class="articles-slider-controls__next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </section>
    <!-- Clients Slider -->
    <section id="clients" class="clients">
        <div class="clients-title">
            <h3>Clients</h3>
        </div>
        <div class="clients-container position-relative">
            <div class="clients-slider">
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterbike.png" alt="bike">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterrubic.png" alt="rubic">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterarrow.png" alt="arrow">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterPc.png" alt="pc">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsternuclear.png" alt="nuclear">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipstermustache.png" alt="mustache">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterbike.png" alt="bike">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterrubic.png" alt="rubic">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterarrow.png" alt="arrow">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsterPc.png" alt="pc">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipsternuclear.png" alt="nuclear">
                </div>
                <div class="clients-slider__slide">
                    <img src="images/Sponsors/hipstermustache.png" alt="mustache">
                </div>
            </div>
            <div class="clients-slider-controls">
                <div class="clients-slider-controls__prev"></div>
                <div class="clients-slider-controls__next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio text-center">
        <div class="portfolio__title">
            <h2>Portfolio & Screenshots</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, quasi adipisci eius suscipit debitis, odit libero modi corporis nemo assumenda ex consequatur sed reiciendis quibusdam provident minima fugit eligendi magni.</p>
        </div>
        <!-- Portfolio slides menu -->
        <div class="portfolio__menu">
            <button class="art">Art</button>
            <button class="mystery">Mystery</button>
            <button class="illusion">Illusion</button>
            <button class="travel">Travel</button>
            <button class="painting">Paintings</button>
        </div>
        <!-- Portfolio Sliders -->
        <div class="portfolio-slide">
            <div class="portfolio-slider">
                <!-- Art -->
                <div class="portfolio-slider__art">
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__art--image">
                        <img src="images/art/6.jpg" alt="image6">
                    </div>
                </div>
                <!-- Mystery -->
                <div class="portfolio-slider__mystery hide">
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__mystery--image">
                        <img src="images/mystery/6.jpg" alt="image6">
                    </div>
                </div>
                <!-- Illusion -->
                <div class="portfolio-slider__illusion hide">
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__illusion--image">
                        <img src="images/illusion/6.jpg" alt="image6">
                    </div>
                </div>
                <!-- Travel -->
                <div class="portfolio-slider__travel hide">
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__travel--image">
                        <img src="images/travel/6.jpg" alt="image6">
                    </div>
                </div>
                <!-- Paintings -->
                <div class="portfolio-slider__painting hide">
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/6.jpg" alt="image6">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/1.jpg" alt="image1">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/2.jpg" alt="image2">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/3.jpg" alt="image3">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/4.jpg" alt="image4">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/5.jpg" alt="image5">
                    </div>
                    <div class="portfolio-slider__painting--image">
                        <img src="images/painting/6.jpg" alt="image6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Quote -->
    <section class="quotes text-center">
        <div class="quotes-inner">
            <img src="images/icons/commas.png" alt="commas">
            <p>Happines cannot be traveled to, owned,earned, or worn. It is spiritual experiance of living every minute with love, grace & gratitude.</p>
            <p><i>Denis Waitley</i></p>
        </div>
    </section>
    <!-- Team members -->
    <section id="team" class="team-members">
        <div class="team-members__title text-center">
            <h2>Team Members</h2>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur esse inventore aut velit magni ea. Recusandae atque consectetur
                consequuntur pariatur sit officiis ipsum earum expedita minus eligendi modi, doloribus aliquam.
            </p>
        </div>
        <div class="team-members__inner">
            <div class="team-members__inner--member">
                <div class="team-members__inner--member--image">
                    <img src="images/Creators/james.png" alt="James">
                </div>
                <div class="team-members__inner--member--description">
                    <h3>James Philly</h3>
                    <p>Lead Developer</p>
                </div>
            </div>
            <div class="team-members__inner--member">
                <div class="team-members__inner--member--image">
                    <img src="images/Creators/cactus.png" alt="Cactus">
                </div>
                <div class="team-members__inner--member--description">
                    <h3>Cactus Jack</h3>
                    <p>3D Model Designer</p>
                </div>
            </div>
            <div class="team-members__inner--member">
                <div class="team-members__inner--member--image">
                    <img src="images/Creators/jack.png" alt="Jack">
                </div>
                <div class="team-members__inner--member--description">
                    <h3>Jack Sparrow</h3>
                    <p>Master of all trade</p>
                </div>
            </div>
            <div class="team-members__inner--member">
                <div class="team-members__inner--member--image">
                    <img src="images/Creators/yaga.png" alt="Yaga">
                </div>
                <div class="team-members__inner--member--description">
                    <h3>Yaga Squarehead</h3>
                    <p>Manages Money</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Facts -->
    <section id="facts" class="facts">
        <div class="facts-title">
            <h2>Facts & Numbers</h2>
        </div>
        <div class="facts-inner position-relative">
            <div class="facts-inner__stats">
                <h3>110</h3>
                <hr class="section-divider">
                <p>successful projects</p>
            </div>
            <div class="facts-inner__stats">
                <h3>25</h3>
                <hr class="section-divider">
                <p>awesome clients</p>
            </div>
            <div class="facts-inner__stats">
                <h3>30</h3>
                <hr class="section-divider">
                <p>open source plugins</p>
            </div>
            <div class="facts-inner__stats">
                <h3>13</h3>
                <hr class="section-divider">
                <p>open source themes</p>
            </div>
        </div>
    </section>
    <!-- BLOG -->
    <section id="blog" class="blog">
        <!-- Blog Inner w/o slides -->
        <div class="blog__inner">
            <div class="blog__inner__content">
                <div class="blog__inner__content--description">
                    <p>Travel / 21st March, 2014</p>
                    <h3>A New Product Is Coming</h3>
                    <p>The office assistant was the boss's man,spineless,and with no understanding.What about if he reported sick? But that would be extremely strained and suspicious as in fifteen
                        years of service Gregor had never.
                    </p>
                </div>
                <div class="blog__inner__content--image1">
                    <img src="images/blog/camera.jpg" alt="camera">
                </div>
            </div>
            <div class="blog__inner__content">
                <div class="blog__inner__content--image2">
                    <img src="images/blog/controller.jpg" alt="controller">
                </div>
                <div class="blog__inner__content--description">
                    <p>Travel / 21st March, 2014</p>
                    <h3>Jimmy's New Xbox Controller</h3>
                    <p>The office assistant was the boss's man,spineless,and with no understanding.What about if he reported sick? But that would be extremely strained and suspicious as in fifteen
                        years of service Gregor had never.
                    </p>
                </div>
            </div>
            <div class="blog__inner__content">
                <div class="blog__inner__content--description">
                    <p>Travel / 21st March, 2014</p>
                    <h3>A New Product Is Coming</h3>
                    <p>The office assistant was the boss's man,spineless,and with no understanding.What about if he reported sick? But that would be extremely strained and suspicious as in fifteen
                        years of service Gregor had never.
                    </p>
                </div>
                <div class="blog__inner__content--image3">
                    <img src="images/blog/tea.jpg" alt="tea">
                </div>
            </div>
        </div>
        <!-- Blog Slider -->
        <div class="blog-slide position-relative">
            <div class="blog-slider">
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
                <div class="blog-slider__slide">
                    <div class="blog-slider__slide--description">
                        <h3>Another Day In Paradise</h3>
                        <p>Travel / 21st March, 2014</p>
                    </div>
                </div>
            </div>
            <div class="blog-slider-controls">
                <div class="blog-slider-controls__prev"></div>
                <div class="blog-slider-controls__next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </section>
    <!-- Tweets -->
    <section class="tweets">
        <div class="tweets-inner">
            <i class="fab fa-twitter"></i>
            <img src="images/authors/2.jpg" alt="Gail">
            <p>Happines cannot be traveled to, owned,earned, or worn. It is spiritual experiance of living every minute with love, grace & gratitude.</p>
            <p>@loveless</p>
        </div>
    </section>
    <!-- Footer Contact // Socials // Copyrights -->
    <section id="contact" class="footer">
        <div class="footer-inner">
            <!-- Footer Contact -->
            <form class="footer-inner__contact" id="contact" action="index.php" method="post">
                <div class="footer-inner__contact--text">
                    <h3>UNICORN</h3>
                    <p>One mornign when Gregor Samsa woke up from troubled dreams,he found himself transformed in his bed into vermin.He lay on his</p>
                </div>
                <div class="footer-inner__contact--user">
                    <input type="email" id="email" name="email" placeholder="EMAIL" required>
                    <input type="text" id="subject" name="subject" placeholder="SUBJECT" required>
                </div>
                <div class="footer-inner__contact--message">
                    <textarea id="message" rows="1" name="message" placeholder="MESSAGE" required></textarea>
                </div>
                <div class="footer-inner__contact--submit">
                    <button name="submit" type="submit" id="contact-submit">SEND</button>
                </div>
            </form>
            <!--Footer Media  -->
            <div class="footer-inner__media">
                <div class="footer-inner__media--links">
                    <h3>Links</h3>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Menu</a>
                    <a href="#">Restaurant</a>
                    <a href="#">Work Hours</a>
                    <a href="#">Call Hours</a>
                </div>
                <div class="footer-inner__media--friends">
                    <h3>Friends</h3>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Menu</a>
                    <a href="#">Restaurant</a>
                </div>
                <div class="footer-inner__media--socials">
                    <h3>Socials</h3>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Github</a>
                    <a href="#">Pinterest</a>
                    <a href="#">Google Plus</a>
                    <a href="#">Dribble</a>
                    <a href="#">Flicker</a>
                    <a href="#">Others</a>
                </div>
            </div>
        </div>
        <!-- Footer Policy -->
        <div class="footer-policy">
            <div class="footer-policy__copyrights">
                <p>One morning,when Gregor Samsa woke from trouble dreams,he found</p>
                <p>&copy <?php echo date('Y'); ?> Your Awesome Company</p>
            </div>
            <div class="footer-policy__policies">
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact</a>
                <a href="#">Job</a>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/manojq.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/main.js"></script>

</body>

</html>