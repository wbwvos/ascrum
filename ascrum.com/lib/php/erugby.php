<?php

	function parseScores($team){
		$result = array();
		//echo "Statistics for ascrum $team <br>"; 
		if($team  == '1'){ // 1e team
			$file = "http://www.erugby.nl/pub/rugby/47/2015-2016/Eerste_klasse_Heren/index.htm";
		}
		if($team  == '2'){ // 2e team
			$file = "http://www.erugby.nl/pub/rugby/47/2015-2016/Tweede_klasse_Heren_Noord/index.htm";
		}
		if($team  == '4'){ // AA
			$file = "http://www.erugby.nl/pub/rugby/47/2015-2016/Derde_Klasse_Heren_Noord-West/index.htm";
		}
		if($team  == '3'){ //3e team
			$file = "http://www.erugby.nl/pub/rugby/47/2015-2016/Vierde_Klasse_Heren_Noord-West/index.htm";
		}
		$content = file_get_contents($file);
		$xml = new SimpleXMLElement($content);

		$result['title'] = (string) $xml->head->title;
		$xml->body->table[0]->attributes()->class = 'table table-condensed table-hover';
		$result['leaderboard'] = $xml->body->table[0]->asXML();
		
		$result['games'] = $xml->body->table[1]->asXML();
		$result['comment'] = $xml->body->div->asXML();
		/*foreach( $xml as $person){
			printf("%s %s has got %d children.\n", $person->getName(), $person1['class'], $person->count());
			echo '<br>';
			foreach( $person as $person2){
				printf("-- %s %s has got %d children.\n", $person2->getName(), $person2['class'], $person2->count());
				echo '<br>';
			}
		}*/
		return $result;
	}
?>