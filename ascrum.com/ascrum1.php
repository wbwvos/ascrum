<?php 
	require_once('lib/php/insertHeader.php'); 
	require_once('lib/php/erugby.php');
	require_once('lib/php/lib.php');
	require_once('config.php');	
	$spelers = getPlayersPerPosition('1', $db);
?>

<!DOCTYPE html>
<html lang="en">
<?php echoHead('1e XV');?>


<body>

  	<?php insertHeader('teams');?>

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Ascrum 1<sup>e</sup> XV</h2>
				<!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
			</div>
			
			<!-- about us slider -->
			<div>
					<img src="images/ascrumteamfoto1.png" class="img-responsive" alt="">
			</div><!--/#about-slider-->
			<?php $result = parseScores('1');?>
			<h3>Leaderboard</h3>
			<b><?php echo $result['title'];?></b>
			<?php echo $result['leaderboard']; ?>
			<i><?php echo $result['comment'];?></i>		
			<!-- Namen en Positie -->
			<?php
				$coaches = array('Coach' => 'Sven Bulens', 'Backs Coach' => 'Paul van Helden');
				$captains = array('Captain' => 'Luc de Kock', 'Co-captain' => 'Robbert Becker');
				printTeamRoster($coaches, $spelers, $captains);
			?>
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