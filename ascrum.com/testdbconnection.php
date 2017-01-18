<?php
require_once('config.php');	
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
						'$achternaam',
						'$geslacht',
						'$email',
						'$telefoonnummer',
						'$opleiding',
						'$opleidingsinstantie',
						'$event',
						'$message',
						NOW()
					)";
	if($result = mysqli_query($db, $sql)){
		echo 'succes';
	}else{
		echo mysqli_error($db);
	}

?>