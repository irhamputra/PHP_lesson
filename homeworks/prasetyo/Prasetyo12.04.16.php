		<?php 
			echo "Hausaufgabe 12.04.2016";
			
			/* open the text */
			$handle = fopen("prasetyo.txt", "r");
			
			if($handle)
			{print "Gefunden!";}
			else (print "nicht gefunden!");
			
			
			/* Text geschlossen */
			fclose($handle);
		
			echo "Hallo Welt!";
			
			
			/* file_get_contents */
			$dokument = file("prasetyo.txt");
			foreach ($dokument as $key => $value){
				print_r("file():" . $value . "<br>");
			}
			
			$get_content = file_get_contents("prasetyo.txt");
			print("file_get_contents():" . $get_content . "<br>");
		?>