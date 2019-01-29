<html>
	<head>
    	 <title></title>
    </head>
	<body>

	<?php
        $x = 7;
        $y = 7;
        
        for ($i=1; $i <= $y; $i++){  
            for ($j=1; $j <= $x; $j++) { 
                if ($i == 1 || $i == $y && $i != middle($y)) {
                    echo"<text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='color: #000;'> 		* </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>";
                }else{
                  if ($j== middle($x) || $j == 1 || $j == $x) {
                    echo"<text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='color: #000;'> 		* </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>";
                    } else if ($i == middle($y)) {
                    echo"<text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='color: #000;'> 		* </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>";
                    } else {
                    echo"<text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>
                    	 <text style ='visibility: hidden'> * </text>";
                    }
                } 
            }
            echo"
            	<br>
            	<br>
            	<br>
            ";
        }
    	function middle($j) {
        	return ($j + 1) / 2;
    	}
	?>

	</body>
</html>