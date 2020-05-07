<?php
	session_start();
	$fonts = "arial";
	$bgcolor = "#444";
	//setcookie('visitor', "", time() - 3600);
?>

		<!doctype html>
		<html>
		<head>
		<title>PHP Syntax</title>
		<style>
			body{font-family:<?php echo $fonts;?>}
			.phpcoding{width:900px; margin: 0 auto; background:#ddd;}
			.headeroption, .footeroption{background:<?php echo $bgcolor;?>;color:#fff; text-align:center; padding:15px;}
			.headeroption h2, .footeroption h2{margin: 0px;}
			.maincontent{min-height:500px; padding:20px;}
			
			input[type="submit"]{
				cursor:pointer;
			}
			input[type="text"]{
				width:250px;
			}
		</style>
		</head>
		<body>
		<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamentals [array( ) Function] Training"; ?></h2>
		</section>
	
	<section class="maincontent">
		<hr/>
		PHP array() Function
		<span style="float:right">
			<?php 
			date_default_timezone_set('Asia/Dhaka');
				echo date('l jS \of F Y h:i:s A'); 
			?>
		</span>				
		<hr/>

		<?php
		
		//Array Walks
		
		/*
		function myfunc($team,$name){
			echo "$name comes from $team team<br/>";
		}
		
		$name = array(
					"Neymar" => "Brazil",
					"C. Ronaldo" => "Portugal",
					"Messi" => "Ar-jitena"
				
			);
			
		array_walk($name,"myfunc");
		*/
		
		//arsort, asort , krsort, ksort
		/*
		$arr = array(
					"Neymar" => "28",
					"C. Ronaldo" => "31",
					"Messi" => "33",
					"Embappe" => "19"
				
			);
		
		//arsort($arr);
		//asort($arr);
		//krsort($arr);
		//ksort($arr);
		
		foreach($arr as $name=> $age){
			echo "Name : ".$name.", Age : ".$age."<br/>";
		}
		
		*/
		
		//Array Compact
		
		$name = "Neymar";
		$team = "Brazil";
		$club = "PSG";
		
		$result = compact("name","team","club");
		
		print("<pre>");
		print_r($result);
		print("</pre>");
		
		?>

	</section>

<?php include 'footer.php'; ?>