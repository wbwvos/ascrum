<?php

	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Je inschrijving is succesvol verstuurd.'
	);

    $naam = @trim(stripslashes($_POST['naam'])); 
	$voornaam = @trim(stripslashes($_POST['voornaam'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $telefoonnummer = @trim(stripslashes($_POST['telefoonnummer'])); 
    $opleiding = @trim(stripslashes($_POST['opleiding'])); 
	$opleidingsinstantie = @trim(stripslashes($_POST['opleidingsinstantie'])); 
	$bericht = @trim(stripslashes($_POST['bericht'])); 
	$geslacht = @trim(stripslashes($_POST['geslacht']));
	$event = @trim(stripslashes($_POST['event']));;
	$email_from = $email;
	
	if($geslacht == 'vrouw'){
		$email_to = 'aacdames@gmail.com, wbwvos@gmail.com';
		$subject = 'AAC nieuw lid (Via Ascrum ledenwerving)';
		$body = 'Wij hebben een geinteresseerde vrouw voor jullie gevonden:' . "\n\n" . 
'Voornaam: ' . $voornaam . "\n\n" . 
'Naam: ' . $naam . "\n\n" . 
'Geslacht: ' . $geslacht . "\n\n" . 
'Email: ' . $email . "\n\n" . 
'Telefoonnummer: ' . $telefoonnummer . "\n\n" . 
'Bericht: ' . $bericht . "\n\n" . 
'Opleiding: ' . $opleiding . "\n\n" . 
'Opleidinginstantie: ' . $opleidingsinstantie . "\n\n" . 
'Hoe ken je ons: ' . $event . "\n\n" . 
'Groet';
	}else{
		$email_to = 'ascrumjonghehonden@hotmail.nl, wbwvos@gmail.com';//replace with your email
		$subject = 'Nieuwe inschrijving Jonghe Honden clinic';
		$body = 'Er is een nieuwe inschrijving voor de Jonghe Honden clinic. Hieronder de gegevens van de geïntereseerde:' . "\n\n" . 
'Voornaam: ' . $voornaam . "\n\n" . 
'Naam: ' . $naam . "\n\n" . 
'Geslacht: ' . $geslacht . "\n\n" . 
'Email: ' . $email . "\n\n" . 
'Telefoonnummer: ' . $telefoonnummer . "\n\n" . 
'Bericht: ' . $bericht . "\n\n" . 
'Opleiding: ' . $opleiding . "\n\n" . 
'Opleidinginstantie: ' . $opleidingsinstantie . "\n\n" . 
'Hoe ken je ons: ' . $event . "\n\n" . 
'Van IJzer';

	}
	
	$db = mysqli_connect("mysql734int.cp.hostnet.nl", "u197102_ascrum", "AscrumGeil2015", "db197102_ascrumdb");
	$sql = "INSERT INTO 
				`inschrijving`
					(
						`voornaam`, 
						`achternaam`, 
						`geslacht`, 
						`email`, 
						`telefoonnummer`, 
						`opleiding`, 
						`opleidingsinstantie`, 
						`event`, 
						`message`, 
						`datumtijd`
					) 
				VALUES 
					(
						'$voornaam',
						'$naam',
						'$geslacht',
						'$email',
						'$telefoonnummer',
						'$opleiding',
						'$opleidingsinstantie',
						'$event',
						'$bericht',
						NOW()
					)";
	$result = mysqli_query($db, $sql);
    
    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;