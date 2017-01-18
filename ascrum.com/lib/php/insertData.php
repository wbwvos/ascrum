<?php
die();
$link = mysqli_connect("mysql734int.cp.hostnet.nl", "u197102_ascrum", "AscrumGeil2015", "db197102_ascrumdb");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$sql = "SELECT * FROM `TABLE 2`";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)){
	$sql = "INSERT INTO `lid`(	`voornaam`, `voorletters`, `tussenvoegsel`, `achternaam`, `geslacht`, `positie`, `primairTeam`,  `jongehond`, `erelid`, `lastEdit`) 
						VALUES ('{$row['voornaam']}','{$row['voorletters']}','{$row['tussenvoegsel']}','{$row['achternaam']}','{$row['geslacht']}','{$row['positie']}','{$row['primairTeam']}',0,0,NOW())";
	mysqli_query($link, $sql);
}


mysqli_close($link);

?>
