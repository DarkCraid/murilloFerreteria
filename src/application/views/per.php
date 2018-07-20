<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Permutacion</title>
</head>
<body>
	<h1>permutaciones</h1>

	<?php 
		$arr1 = array('a1','a2','a3','a4');
		$arr2 = array('b1','b2');
		$arr3 = array('c1','c2','c3');
		$result = array();

		for ($i=0; $i < count($arr1); $i++) { 
			for ($a=0; $a < count($arr2); $a++) { 
				for ($b=0; $b < count($arr3); $b++) { 
				array_push($result,$arr1[$i]." - ".$arr2[$a]." - ".$arr3[$b]."\n");
				}
			}
		}
		print_r($result);
	?>
</body>
</html>