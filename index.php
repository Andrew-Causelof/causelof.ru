<?php include './include/header.php';?>
<?php 
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $portfollioArray = include './include/portfolio.php';
   // var_dump($portfollioArray);
?>

    <div  class="loader">
        <div class="inner"></div>
    </div>
    

    <div id="slides">

        <div class="overlay"></div>

        <div class="slides-container">
          <img src="img/slider_1.jpg" alt="">
          <img src="img/slider_2.jpg" alt="">
          <img src="img/slider_3.jpg" alt="">
        </div>

        <div class="titleMessage">
            <div class="heading">
                <p class="main">ANDREW CAUSELOF</p>
                <p class="sub typed"></p>
            </div>
        </div>
<!--
        <nav class="slides-navigation">
            <a href="#" class="next"></a>
            <a href="#" class="prev"></a>
        </nav>
-->
    </div>

    <nav id="navigation" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#about">About</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#skills">Skills <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Mail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>

          </ul>
        </div>
      </nav>
    
    <div id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img class="aboutImage" src="img/about.png" alt="">
                </div>
                <div class="col-md-7">
                    <h4>Few words about myself</h4>
                    <p>I am an enthusiastic, creative and highly motivated Product Designer with an artistic nature keen eye for detail. I am experienced in the full design process from getting 
                        the initial customer specification and understanding the technical aspects of the job to draw up the design and presenting the finished prototype or product to the customers.
                         I am accustomed to working under pressure, and I am a natural problem solver with the ability to come up with innovative solutions to produce the most appealing product in the market.</p>
                    <p>During  Master’s degree I wrote ton of codes and lately  worked as software developer (mainly C++ and VB). After few years of coding in aerospace company I got product manager  position and didn’t code till 2018y. </p>

                </div>
            </div>
        </div>
    </div>

    <div id="skills" class="skillsSection section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Programming Skills</h2>
                    <p>A representation of my professional skills</p>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="skill">
                        <span class="chart" data-percent="45">
                            <span class="percent">45</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>PHP</h4>
                        <p>Use and Study</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="15">
                            <span class="percent">15</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>Ruby</h4>
                        <p>Study</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="60">
                            <span class="percent">60</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>JavaScript</h4>
                        <p>Use</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="10">
                            <span class="percent">10</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>MySQL</h4>
                        <p>Study</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="55">
                            <span class="percent">55</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>HTML-CSS</h4>
                        <p>Use</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="20">
                            <span class="percent">20</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>WebGl</h4>
                        <p>Use and Study</p>
                    </div>

                    <div class="skill">
                        <span class="chart" data-percent="60">
                            <span class="percent">60</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>Fusion 360</h4>
                        <p>CAD tool</p>
                    </div>
                    <div class="skill">
                        <span class="chart" data-percent="40">
                            <span class="percent">40</span>
                            <canvas height='152' width="152"></canvas>
                        </span>
                        <h4>Blender 3D</h4>
                        <p>3D creation suite</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div id="stats" class="statsSection section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon"> 
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">70</h2>
                                <h3>Clients</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon"> 
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">5</h2>
                                <h3>Years Experience</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon"> 
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">50</h2>
                                <h3> Designs</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="squareItem">
                        <div class="squareInnerContainer">
                            <div class="squareIcon"> 
                                <i class="fa fa-check-square"></i>
                            </div>
                            <div class="squareContent">
                                <h2 class="counter">2</h2>
                                <h3>Apps</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="contact" class="contactSection section">
        
        <div class="col-md-12 text-center">

            <p class="subHeading"></p>
            <h2>Drop me a line anytime</h2>
            <a href="mailTo:causelof@yandex.ru" class="contactButton">GET IN TOUCH</a>


        </div>


    </div>

    <div id="portfolio" class="section">
        <div class="container">
            <div class="row">
                <div class="filter">
                    <ul id="filters">
                        <li> <a href="#" data-filter="*"><span> Show All</span> </a></li>
                        <li> <a href="#" data-filter=".webSites" class="current">Websites </a></li>
                        <li> <a href="#" data-filter=".PHP" >Designs </a></li>
                        <li> <a href="#" data-filter=".webGl" >WebGl-Three.js </a></li>
                        <li> <a href="#" data-filter=".shortJSapps" >short JS apps </a></li>
                    </ul>
                </div>

                <div class="itemsContainer">
                    <ul class="items">      
                       <?php foreach ($portfollioArray as $card): ?>
                            <li class="<?=$card['class']?> col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div class="item">                               
                                    <img src="<?=$card['thumbnail']?>" >                               
                                    <div class="icons">
                                        <a href="<?=$card['layout']?>" title="View image" class="openButton" data-fancybox data-caption="<?=$card['data']?>"> 
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="<?=$card['link']?>" target="_blank" class="projectLink">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                    <div class="imageOverlay"></div>
                                </div>  
                             </li>                               
                         <?php endforeach;?>                       
                    </ul>
                </div>
               
            </div>
        </div>
    </div>



 <?php include './include/footer.php';  ?>


