<?php
	function insertHeader($active, $sub){
		include_once("analyticstracking.php");
		?>
		
		
		<header id="header">
        <!--
		<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index">A.S.R.V. ASCRUM</a> <!-- <img src="images/logo.png" alt="logo"> -->
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if($active == 'home'){echo "class='active'";}?>><a href="index">Home</a></li>
						<li class="dropdown <?php if($active == 'ascrum'){echo "active";}?>">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Ascrum <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="overascrum">Over Ascrum</a></li>
                                <li><a href="ijzerenhuisch">IJzeren Huisch</a></li>
                                <li><a href="index#partner">Sponsors</a></li>
                                <li><a href="http://www.pitchero.com/clubs/friendsofascrum/">Friends of Ascrum</a></li>
                            </ul>
                        </li>
						<li class="dropdown <?php if($active == 'teams'){echo "active";}?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teams <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ascrum1">Ascrum 1<sup>e</sup> XV</a></li>
                                <li><a href="ascrum2">Ascrum 2<sup>e</sup> XV</a></li>
                                <li><a href="ascrum3">Ascrum 3<sup>e</sup> XV</a></li>
                                <li><a href="ascrum4">Ascrum AA (4<sup>e</sup> XV)</a></li>
								<li><a href="ascrum5">Jonghe Honden</a></li>
								<li><a href='seizoensverslag'>Seizoensverslag 14-15</a></li>
                            </ul>
                        </li>
						<!--<li <?php if($active == 'training'){echo "class='active'";}?>><a href='training'>Training</a></li>-->
						<li class="dropdown <?php if($active == 'training'){echo "active";}?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="training">Training</a></li>
								<li><a href='zuidafrika'>Zuid-Afrika Trip</a></li>
                            </ul>
                        </li>
						<li <?php if($active == 'lidworden'){echo "class='active'";}?>><a href='lidworden'>Lid worden</a></li>
						<li <?php if($active == 'contact'){echo "class='active'";}?>><a href='contact'>Contact</a></li>
                        <!--<li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>-->						
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	<?php
	}
	
	function insertFooter(){
		?>
		<footer id="footer" style='border-top: 5px solid #c52d2f'  class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 A.S.R.V Ascrum
                </div>
				<!--<div class="col-sm-4">
				<big><a href="#"><i class="fa fa-facebook"></i></a></big>
				</div>-->
				<!--<div class="col-sm-4">
                    <ul class="pull-right">
						<li><a href="https://www.facebook.com/ascrumrugby?fref=ts" target="_blank"><img src="images/icon/social-facebook.png"></a>
						<li><a href="https://twitter.com/ascrum" target="_blank"><img src="images/icon/social-twitter.png"></a>
                    </ul>
                </div>-->
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index">Home</a></li>
                        <li><a href="contact">Contact</a></li>
						<li><a href="#">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
	<?php
		
	}
	
	function echoHead($title){
		?>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A.S.R.V. Ascrum Studentenrugby Amsterdam. De vereniging heeft 4 teams die uitkomen in de eerste, tweede, derde en vierde klasse.">
    <meta name="author" content="Wolf Vos & Tim Trago">
    <title> <?php echo $title;?> | A.S.R.V. ASCRUM Rugby</title>
		
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	</head><!--/head-->
		<?php
	}
?>