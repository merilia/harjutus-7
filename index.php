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
	<?php
      for ($count = 1; $count <= 20; $count += 1) {
        if ($count % 2 == 0) {
            echo "Number $count on paarisarv.";
            echo "<br>";
          } 
          elseif ($count % 2 == 1) {
            echo "Number $count on paaritu arv.";
            echo "<br>";
          } 
          $count % 2;
        }
       $animals = array("elephant", "dog", "cat", "fox");

       foreach ($animals as $animal) {
        	echo $animal;
    }
	?> 
	<h2>Foreach loop</h2>
  	<?php
  		$students = array("Marko", "Fränk", "Merili", "Merili", "Triinu", "Veronika", "Silja", "Kristi", "Markus", "Cärolin", "Heiko", "Ingrid", "Syret", "Mihkel", "Eve", "Anneli", "Ants", "Risto", "Marge", "Aile");
  		$nr = 1;
  		foreach ($students as $student) {
        	echo "$nr.  Õpilase nimi on: $student ";
        	$nr++;
    	}
    	 $companies = array("Razer", "Roccat", "Asus", "Beats", "Apple");
	      echo "<ul>";
	      foreach ($companies as $company) {
		  echo "<li>".$company."</li>";
      }
      	  echo "</ul>";
    	$subjects = array("Serveripoolsete veebirakenduste programmeerimine", "Veebikujundus", "Sisuhaldussüsteemide kasutamine", "3D alused", "Veebiarendus");
              $number = 1;
              echo "<tr>";
              foreach ($subjects as $subject) { 
              echo "<td>".$number.". ".$subject."</td><br>";
              $number += 1;
      }
     	  echo "</tr>";
  	?>
  	<br>
    <?php
       $contact = array(
            "first_name" => "Merili", 
            "last_name" => "Asu", 
            "e-mail" => "merili.asu@khk.ee",
            "age" => 21
    );
         	echo "<table class='contact-table'><tbody>";
              foreach ($contact as $attribute => $value) {
              $attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
          	echo "<tr><td class='first-column'>".$attribute_formatted."</td> "."<td>".$value."</td></tr>"; 
      };
        	echo "</tbody></table>";
  	?>
</body>
</html>
		