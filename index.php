<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tsüklid (loops)</title>
</head>
<body>
	<?php
	    $count = 1;

	    while ($count <= 10) {
	        echo $count;
	        $count += 1;
	    }
	?>
	<h2>While loop</h2>
	<?php
		$count = 10;

		while ($count <= 100) {
			echo $count . ", ";
			$count += 1;
		}
	?>
	<br>
	<?php	
		$count2 = 100;

		while ($count2 <= 1000) {
			echo $count2 . ", ";
			$count2 += 100;
		}
	?>
	<h3>Infinite while loop</h3>
	<?php
	/*	
		$count = 1;

	    while ($count) {
	        echo $count;
	    }
	*/
	?>
	<?php
	    $count = 1;
	    $number = 10;

	    while ($count < 10) {
	        while ($number < 0) {
	            echo $number;
	            $number -= 1;
	        }

        	$count += 1;
    }
	?>
	<br>
	<?php
	    $count = 0;

	    while ($count < 15) {
	        if ($count == 5) {
	           /*  echo "<script>alert('Number viie kord');</script>";*/
	        } else {
	            echo $count;
	        }

	        $count += 1;
	    }
	?>
	<h3>Conditional statements in while loop</h3>
		<?php
	    $count = 1;

	    while ($count <= 10) {
	        if ($count == 3) {
	          	/* echo "<script>alert('kolm');</script>";*/} 
	            elseif ($count ==7) {
	           /* echo "<script>alert('seitse');</script>";*/}
	        	else {
	            echo $count;
	        }

	        $count += 1;
	    }
	?>
	<!--While tsükkel
	<?php
	    $count = 1;

		    while ($count <= 10) {
		        echo $count;
		        $count += 1;
		    }
		?>
	-->
	<!--For tsükkel
	<?php
	    for ($count = 1; $count <= 10; $count += 1) {
	        echo $count;
	    }
	?> 
	-->
	<h2>For loop</h2>
</body>
</html>
		