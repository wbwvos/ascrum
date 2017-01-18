<?php

	function getPlayersPerPosition($team, $db){
		$sql = "SELECT id, voornaam, tussenvoegsel, achternaam, positie, primairTeam, secundairTeam FROM lid WHERE primairTeam = '$team' OR secundairTeam = '$team' ORDER BY positie ASC";
		$result = mysqli_query($db, $sql);
		$spelers = [];
		$spelers['1'] = [];
		$spelers['2'] = [];
		$spelers['3'] = [];
		$spelers['4'] = [];
		$spelers['5'] = [];
		$spelers['6'] = [];
		$spelers['7'] = [];
		$spelers['8'] = [];
		$spelers['9'] = [];
		$spelers['10'] = [];
		$spelers['11'] = [];
		$spelers['12'] = [];
		$spelers['13'] = [];
		$spelers['14'] = [];
		$spelers['15'] = [];
		
		while($row = mysqli_fetch_array($result)){
			$spelers[$row['positie']][] = $row;
		}
		return $spelers;
	}
	
	function printPlayersPerPosition($playergroup){
		$players = '';
		foreach($playergroup as $player){
			$players .= $player['voornaam'] .' '. $player['tussenvoegsel'] .' '. $player['achternaam'] . ', ';
		}
		$players = rtrim($players , ', ');
		return $players;
	}

	function printTeamRoster($coaches, $spelers, $captains){
		echo "<h3>Team</h3>
			<table class='table table-striped table-condensed'>
				<thead>
					<th>
						#
					</th>
					<th>
						Positie
					</th>
					<th>
					</th>
				</thead>
				<tbody>";
				$forwards = array(	'1' => 'Loose Head Prop',
									'2' => 'Hooker',
									'3' => 'Tight Head Prop',
									'4' => 'Second Row',
									'5' => 'Second Row',
									'6' => 'Blindside Flanker',
									'7' => 'Openside Flanker',
									'8' => 'Number Eight');
				$backs = array(		'9' => 'Scrum-half',
									'10' => 'Fly-half',
									'11' => 'Left wing',
									'12' => 'Inside Centre',
									'13' => 'Outside Centre',
									'14' => 'Right wing',
									'15' => 'Full back');
				foreach($coaches as $soort => $naam){
					echo "<tr><td></td><td>$soort</td><td>$naam</td></tr>";
				}
				foreach($captains as $soort => $naam){
					echo "<tr><td></td><td>$soort</td><td>$naam</td></tr>";
				}
				echo '<tr><td></td><td><b>Forwards</b></td><td></td></tr>';				
				foreach($forwards as $nr => $positie){
					echo "<tr><td>$nr</td><td>$positie</td><td>" . printPlayersPerPosition($spelers[$nr]) . '</td></tr>';
				}
				echo '<tr><td></td><td><b>Backs</b></td><td></td></tr>';
				foreach($backs as $nr => $positie){
					echo "<tr><td>$nr</td><td>$positie</td><td>" . printPlayersPerPosition($spelers[$nr]) . '</td></tr>';
				}
		echo '</tbody>
			</table>';
	}

?>