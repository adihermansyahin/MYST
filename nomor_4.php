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


<?php
	
	$yang_dihilangkan = array('o');
	$kata = str_replace($yang_dihilangkan, 'a',"Kelompok");

	echo "<h2> REPLACE KATA </h2>";

	echo "$kata";
	echo "<p> <b>Kelompok</b> => menghilangkan o dan diganti dengan a => menjadi <b>$kata</b> </p>";

?>