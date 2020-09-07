<?php
    $username = "Margarita";  
	$fulltimenow = date("d.m.Y H:i:s");
	$hournow = date("H");
	$partofday = "lihtsalt aeg";
	if($hournow < 6) {
		$partofday = "uneaeg";
    }
	if($hournow >= 6 and $hournow < 8){
		$partofday = "hommik";
	}
 if($hournow >= 8 and $hournow < 88){
		$partofday = "oppimine";
	}
	
	//jälgime semestri kulgu
	$semesterstart = new DateTime("2020-08-31");
	$semesterend = new DateTime("2020-12-13");
    $semesterduration = $semesterstart->diff($semesterend);
	$today = new DateTime("now");
	$fromsemesterstart = $semesterstart->diff($today); // saime erinevuse objektina, seda niisama ei saa näitada
	$fromsemesterstartdays = $fromsemesterstart->format("%r%a");
	
	?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>Veebileht</title>

</head>
<body>
  <img src="../IMG/vp_banner.png" alt="Veebiprogrammeerimine kursuse banner">
  <h1><?php echo $username; ?> õppib programmeerima</h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu!</p>
  <p>Ma sain kodutooga hakkama <a href="http://www.tlu.ee">Tallinna Ülikooli</a></p>
  <p>Lehe avamise aeg: <?php echo $fulltimenow .", semestri algusest on möödunud " .$fromsemesterstartdays . " päeva";?>. 
  <?php echo "Parajasti on " .$partofday .".";?></p>
</body>
</html>