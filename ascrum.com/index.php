<?php 
	require_once('lib/php/insertHeader.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<?php echoHead('Home');?>

<body class="homepage">

	<?php insertHeader('home');?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <!--<div class="item active" style="background-image: url(images/ascrumfoto1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
							<div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style='text-shadow: 2px 2px 2px #000;'>Ascrum is looking for a new players!</h1>
                                    <h2 class="animation animated-item-2" style='text-shadow: 2px 2px 2px #000;'>We need players from all levels, come and join our team! We play in the highest division in the Netherlands.</h2>
                                    <a class="btn-slide animation animated-item-3" href="lidworden.php" target='_blank' >Read more!</a>
                                </div>
                            </div>
                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>-->

                        <!--</div>
                    </div>
                </div><!--/.item-->

                <div class="item active" style="background-image: url(images/ascrumfoto1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style='text-shadow: 2px 2px 2px #000;'>Kom ook rugbyen bij Ascrum!</h1>
                                    <h2 class="animation animated-item-2" style='text-shadow: 2px 2px 2px #000;'>We zijn weer gepromoveerd naar de ereklasse, om ons daar staande te houden hebben we iedereen nodig van elk niveau! Wil je meetrainen? Laat het ons weten!</h2>
                                    <a class="btn-slide animation animated-item-3" href="lidworden.php">Meer informatie</a>
                                </div>
                            </div>

                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div><!--/.item-->                
				<div class="item" style="background-image: url(images/ascrumfoto2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style='text-shadow: 2px 2px 2px #000;'>Amsterdam student rugby club ASCRUM back to the Premier League</h1>
                                    <h2 class="animation animated-item-2" style='text-shadow: 2px 2px 2px #000;'>Ascrum is preparing for a return to the Premier League. We tested the waters
in the '14/'15 season and now we mean business. Ascrum is the biggest
student rugby club in the Netherlands with 5 teams and over 120 active
players.</h2>
                                    <a class="btn-slide animation animated-item-3" href="lidworden.php">Want to play? Let us know!</a>
                                </div>
                            </div>

                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/ascrumfoto3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style='text-shadow: 2px 2px 2px #000;'>Welkom</h1>
                                    <h2 class="animation animated-item-2" style='text-shadow: 2px 2px 2px #000;'>Bij A.S.R.V. Ascrum</h2>
                                    <a class="btn-slide animation animated-item-3" href="overascrum.php">Meer informatie</a>
                                </div>
                            </div>
                            <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <!--<section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Retina ready</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Easy to customize</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section><!--/#feature-->

    <!--<section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a> </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Business theme </a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section><!--/#recent-works-->

    <!--<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Service</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">SEO Marketing</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div>
        </div>
    </section><!--/#services-->
 <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Touring teams, welcome!</h2>
                <p class="lead">Our club is always open to touring teams from all over the world. Interested in playing a match against us? Let us know! </p>
            </div>    	
			<div class='col-md-2'>
			<a href="http://www.hansbrinker.nl/" target="_blank"><img class="img-responsive wow fadeInDown" src="images/partners/partner-HB.png"></a>
			</div>  			
			<div class='col-md-8'>
			<p>The Hans Brinker Budget Hotel is a well-known budget hotel in the centre of Amsterdam. Located between two canals, it’s just a 2-minute walk from the exciting nightlife on the Leidseplein.
This budget hotel is perfect for students and groups. The hotel has single and twin rooms and shared dorms for up to 8 guest. Each room is equipped with a private bathroom and lockers for personal belonging. Breakfast and dinner are served in the spacious common area. There is also a bar and a underground club which is open every night till late. </p>
<p>Free WiFi access is available.</p>

<p>Stay with your team in the Hans Brinker Budget Hotel and get a special price by sending an e-mail to: groups@hans-brinker.com</p>
<p>For more information visit: <a href='http://www.hans-brinker.com' target='_blank' style='color:white'><b>www.hans-brinker.com</b></a></p>
			</div>
			<div class='col-md-2'>
			<a href="http://www.hansbrinker.nl/" target="_blank"><img class="img-responsive wow fadeInDown" src="images/partners/partner-HB.png"></a>
			</div>  
        </div><!--/.container-->
    </section><!--/#partner-->
	
	
   <section id="middle">
        <div class="container">
            <div class="row">
                <!--<div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>-->

                <div class="col-lg-12 wow fadeInDown">
                    <div class="accordion">
						<div class='center'>
							<h2>Nieuws</h2>
						</div>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" >
                                  Amsterdam student rugby club ASCRUM back to the Premier League
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="col-sm-3">
                                            <img class="img-responsive" src="images/ascrumlogo.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>12 Maart 2016</h4>
                                            <p class="lead"> </p>
											<p>
											Ascrum is preparing for a return to the Premier League. We tested the waters
in the ‘14/’15 season and now we mean business. Ascrum is the biggest
student rugby club in the Netherlands with 5 teams and over 120 active
players. The first team is on a flawless winning streak in the first division, and the second team
are competing at the top of the second. The third team is in contention to win the fourth division.
Furthermore, we have a Jonghe Honden team to educate new players in the game and a
veterans team.</p>
<h4> Never touched an egg in your life? </h4>
<p>
Every September, 60 fresh faced students appear on our pitch to play rugby. These aspirant
players are for the most part inexperienced in the game and are trained in our Jonghe Honden
team. The basics of rugby are introduced by players of the first and second team. The Jonghe
Honden compete against other student rugby teams in an honorary competition between the
biggest student cities in the Netherlands. Promising players are quickly invited to join to train and
play for the third team on a Sunday.
</p>
<h4> Comfortable around men and chasing eggs? </h4>
<p>
We are always looking for experienced players to help push our teams forward. These players
can circumvent our Jonghe Honden team and join the second or first team. Aside from our
ambition to compete at the top of the Premier League and, or our second team, to build towards
playing in the first division, we value our heritage as a student club. Hard work on the pitch is
rewarded with a beer in the bar, followed up with a sidestep into town.
</p>
<h4> Extra’s </h4>
<p>
Every year, Ascrum send talented young players to train for a month at the Western Province
Rugby Institute in South Africa. Furthermore, in the autumn we organise a training camp at the
Olympic training centre in Papendal for which 2 professional trainers from the Western Province
Rugby Club are flown in to give training and whiteboard sessions. The club also has access to a
gym and professional physiotherapy.
</p>
<p>
Are you interested in joining A.S.R.V. ASCRUM? If so, feel free to contact us at
<a href="mailto:tsascrum@gmail.com">tcascrum@gmail.com</a> or call us at +31 (0)6 1364 5542.
</p>

<p> Van IJzer </p>
											
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Wedstrijdverslag Ascrum 3 - Waterland 2
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
							  <div class="media accordion-inner">
                                        <div class="col-sm-3">
                                            <img class="img-responsive" src="images/ascrumlogo.jpg">
                                        </div>
                                        <div class='col-sm-9'>
                                            <h4>4 Oktober 2015</h4>
											<p>De wedstrijd had voor Ascrum een moeizaam begin: de rucks werden te vaak verloren, 

gerommel met half-half balletjes en de tackles waren niet al te sterk. Waterland kwam dan 

ook de eerste helft voor door wat gerommel achterin bij Ascrum. Gelukkig pakten wij het 

meteen op en begonnen een stuk feller, en vooral geconcentreerder te spelen. De rucks 

werden eindelijk gewonnen, de support van de voorwaartsen werd ook steeds sterker en 

het balletje werd goed rondgespeeld. We kwamen al snel na de try tegen op gelijke score en 

vanaf toen ging het alleen maar beter voor Ascrum. Het spel werd steeds meer gedomineerd 

door ons en er werden ook steeds meer try’s gedrukt. Uiteindelijk gingen wij de rust in met 

een ruime voorsprong. De tweede helft was eigenlijk bijna geen wedstrijd meer: de eerste 

15 minuten liet Waterland nog wat weerstand zien, echter na nog een paar try’s van Ascrum 

liep de score erg hoog op en dit ontmoedigde Waterland: de verdediging van Waterland was 

halverwege de tweede helft één groot gat en wij liepen er met te veel gemak doorheen. De 

grote eindscore van 86-5 voor Ascrum was dan ook voor een groot deel te danken aan de 

neergeslagen Waterland in de tweede helft.</p>
											
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div> 
						  
						  <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Seizoensverslag 2014-2015
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
							  <div class="media accordion-inner">
                                        <div class="col-sm-3">
                                            <img class="img-responsive" src="images/ascrumlogo.jpg">
                                        </div>
                                        <div class='col-sm-9'>
                                            <h4>Het seizoensverslag 2014-2015 van de ASRV Ascrum is beschikbaar!</h4>
											<p class='lead'>
											Waarde lezer,
											</p>
											<p>
											Voor u ligt het seizoensverslag 2014-2015 van A.S.R.V. ASCRUM. Een seizoen met verdeeld succes.
											De degradatie van Ascrum 1 springt natuurlijk in het oog, maar ook de 2 gepromoveerde teams. 
											ASRV Ascrum is de enige studenten-rugbyvereniging die een 2e team zal hebben in de 2e klasse. 
											Dit betekent dat er een betere doorstroming zal komen tussen de teams binnen de ASRV. 
											Ook door het kampioenschap en de promotie van de Amsterdam Academicals (ASRV Ascrum 4). 
											Hierdoor komen onze vier teams  uit in vier opeenvolgende competities. 

											</p>
											<a class="btn btn-primary btn-sm" href="seizoensverslag.php">Lees verder...</a> 
											
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
<!--
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#middle-->

    <!--<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab2.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/tab1.png">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class="tab-pane fade" id="tab5">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> 
                            </div> 
                        </div>    
                    </div>              
                </div>

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
                            <div class="media-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>

            </div>
        </div>
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Onze Sponsoren</h2>
                <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="http://www.santt.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner-Sant.png"></a></li>
                    <li> <a href="http://www.fysiocentrumamsterdam.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner-FCA.png"></a></li>
                    <li> <a href="http://www.brouwerijhetij.nl/splash-page-nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner-IJ.png"></a></li>
                    <li> <a href="http://www.niveamen.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner-nivea.png"></a></li>
					<li> <a href="http://www.hansbrinker.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner-HB.png"></a></li>
					<li> <a href="http://www.usc.uva.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1800ms" src="images/partners/partner-uscsport.png"></a></li>
					<li> <a href="http://powerplaypeople.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2100ms" src="images/partners/partner-Powerplay.png"></a></li>
					<li> <a href="http://www.studentensportamsterdam.nl/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="2400ms" src="images/partners/partner-SSA.png"></a></li>
				</ul>   			
        </div><!--/.container-->
    </section><!--/#partner-->

    <!--<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section><!--/#conatcat-info-->

    <!--<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

   <?php insertFooter(); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>