<?php 
	require_once('lib/php/insertHeader.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<?php echoHead('IJzeren Huisch');?>


<body>

  	<?php insertHeader('ascrum');?>

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Het IJzeren Huisch</h2>
				<p class="lead">A.S.R.V. Ascrum is nog maar een van de weinige studenten rugby verenigingen met een eigen clubhuis: Het IJzeren Huisch. En dit is een groot voordeel. Wij kunnen onze bierprijs laag houden en als we in de winter zin hebben om te bbq'en, dan kunnen we dat gewoon binnen doen. Tenminste, dat was vroeger nog wel eens de gedachte, waar je binnen (als je goed zoekt) de sporen nog van kan zien.<br> 
				<br>
				Verder wordt het IJzeren Huisch na trainingen en wedstrijden altijd gebruikt om bier te drinken. Maar ook onze algemene ledenvergaderingen (die nog wel eens tot zonsopgang willen duren) worden hier gehouden.
				</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/ascrumfoto1.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/ascrumfoto2.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/ascrumfoto3.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div>
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>85%</em></p>
								<p>Joomla</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>95%</em></p>
								<p>HTML</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>80%</em></p>
								<p>CSS</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Wordpress</p>                                     
							</div>
						</div>
					</div>
					
				</div>
	
            </div><!--/.our-skill-->
			</div>
</section>
<!--<section id="about-us">
			
			<div class='container'>
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Het bestuur</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<!--<div class="row clearfix">
					<div class="col-md-4 col-md-offset-1">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Bernard Bekker</h4>
									<h5>Praeses</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Forward</a></li>
										<li class="btn"><a href="#">Hooker</a></li>
										<li class="btn"><a href="#">#2</a></li>
										<li class="btn"><a href="#">Eerste Team</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					
					
					<div class="col-md-4 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Daniel de Rijke</h4>
									<h5>Wedstrijdsecretaris</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Back</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									
								</div>
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>					
				</div>
				<div class="row team-bar hide-medium">
					<hr>
				</div>       

				<div class="row clearfix">   
					<div class="col-md-4">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Guido Reincke</h4>
									<h5>Questor</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Forward</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									
								</div>
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Guillaume Engelen</h4>
									<h5>Bar & Materiaal</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Forward</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									
								</div>
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Niek Sluiter</h4>
									<h5>Commissaris Jonghe Honden</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Forward</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
										<li class="btn"><a href="#">??</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									
								</div>
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section><!--/about-us-->

     <?php insertFooter(); ?>
    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>