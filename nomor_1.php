<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type ='text/css'>
	*{
		padding: 20px;
		line-height: 35pt;
		font-family: Montserrat;
		font-size: 15pt;
	}
	h2{
		font-size: 25pt;
		text-transform: uppercase;
		letter-spacing: 1pt;
	}
	</style>
</head>
<body>
		<h2> Return type Biodata </h2>

		<?php
	
		$variable = array("name" => "Adi Hermansyah",
						  "address" => "Malang", 
						  "hobbies" => array("Design", "Games"), 
						  "is_married" => false,
						  "school" => "Voc. PGRI 03 Malang",
						  "skills" => array("Web Design" => array('HTML', 'CSS'), "Back-end" => array('PHP', 'MySQL')) 
						 );
		
			echo json_encode($variable);

?>
</body>
</html>