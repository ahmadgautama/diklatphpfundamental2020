<html> 
	<body> 
		<?php 
			$d = date("D"); 
			switch ($d){
 				case "Mon": echo "Today is Monday";
 					break; 
				case "Tue": echo "Today is Tuesday"; 
					break; 
				default:
						echo "Wonder which day is this ?";
					break;						
			} 
		?> 
	</body>
 </html>