<?php 
	header('Location: lidworden');
	require_once('lib/php/insertHeader.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<?php echoHead('Lid worden');?>


<body>

  	<?php insertHeader('lidworden');?>

    <section id="partner">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Aanmelden Jonghe Honden clinic 2016</h2>
				<p class="lead">Wie wil dat nou niet?</p>
			</div>
		</div>
	</section>
	
	<section id="lidworden" style='background-color: #f2f2f2'>
        <div class="container">
            <div class="center">        
                <h2></h2>
                <p class="lead">
				Studeer je en lijkt rugby je wat? Amsterdame Studenten Rugby Vereniging Ascrum geeft een zesweekse clinic om te proeven en vooral te voelen of rugby iets voor je is. 
				</p>
				<p>
				De clinic start op donderdag 15 September om 19:00. 
				</p>
				<p>
				Het adres is: <b>Bok de Korverweg 6 te Amsterdam</b>, je kan het beste met de fiets komen.
				</p>
				<p>
				Heb je een nog vragen? Dan kan je die het message veld stellen.
				</p>
				<p>
				We hopen je dan te zien!
				</p>
			</div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="lib/php/lidWordenEmail.php">
                    <div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
                            <label>Voornaam *</label>
                            <input type="text" name="naam" id='voornaam' class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Achternaam *</label>
                            <input type="text" name="naam" id='naam' class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Geslacht *</label>
							<select name='geslacht' id='geslacht' class='form-control'>
								<option value='man'>Man</option>
								<option value='vrouw'>Vrouw</option>
                            </select>
							<p id='vrouwen' style='display:none;' ><b>Let op!</b> Als je je als vrouw aanmeldt zul je in contact gebracht worden met onze partner: <a href='http://www.aacrugby.com/site/?page_id=3773' target='blank_'>Het AAC vrouwen rugby team</a>.</p>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id='email' class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefoonnummer *</label>
                            <input type="number" name='telefoonnummer' id='telefoonnummer' class="form-control" required="required">
                        </div>
                                            
                    </div>
                    <div class="col-sm-5">
						<div class="form-group">
                            <label>Opleiding *</label>
                            <input type="text" name='opleiding' id='opleiding' class="form-control" required="required">
                        </div>    
                        <div class="form-group">
                            <label>Opleidingsinstantie *</label>
                            <input type="text" name="opleidingsinstantie" id='opleidingsinstantie' class="form-control" required="required">
                        </div>
						 <div class="form-group">
                            <label>Hoe heb je van ons gehoord? *</label>
                            <select name='event' id='event' class='form-control'>
								<option value='158'>ASC subjesdag 15 Augustus</option>
								<option value='198'>ASC subjesdag 19 Augustus</option>
								<option value='218'>ASC subjesdag 21 Augustus</option>
								<option value='248'>VU Informatiemarkt 24 Augustus</option>
								<option value='258'>HvA Festival 25 Augustus</option>
								<option value='298'>UvA Intree verenigt 29 Augustus</option>
								<option value='308'>UvA Intree spelen 30 Augustus</option>
								<option value='000'>Anders (vermeld dit hieronder a.u.b.)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message </label>
                            <textarea name="bericht" id="bericht" class="form-control" rows="5"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" id='verzenden' name="submit" class="btn btn-primary btn-lg" required="required">Verstuur</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </section>

     <?php insertFooter(); ?>
    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	<script>
		$(document).ready(function(){
			var d = new Date();
			var day = d.getDate();
			var month = d.getMonth() + 1;
			var event = $('#event').val();
			$('#event').val('' + day + month);
			
			$('#geslacht').change(function(){
				if($('#geslacht').val() == 'vrouw'){
					$('#vrouwen').fadeIn();
				}else{
					$('#vrouwen').hide();
				}
			});
				
			
		});
	</script>
</body>
</html>    
	