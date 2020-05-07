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
		//Array Change Key
		/*
			$name = array(
				'Jamal' => '34',
				'Kasem' => '35',
				'Rahim' => '36',
				'Abdul' => '38'
			);
				print("<pre>");
				print_r(array_change_key_case($name, CASE_UPPER));
				print("</pre>");
		*/
		//Array Column
		/*
			$name = array(
						array(
							'ID'         => '34',
							'First_Name' => 'Rahim',
							'Last_Name'  => 'Abdul'
					),
					
						array(
							'ID'         => '38',
							'First_Name' => 'Snigdho',
							'Last_Name'  => 'Majumder'
					),
					
						array(
							'ID'         => '42',
							'First_Name' => 'Karim',
							'Last_Name'  => 'Sarker'
					)
				);
				
			$print = array_column($name, 'First_Name', 'Last_Name');
		
			print("<pre>");
			print_r($print);
			print("</pre>");
		
		*/
		
		//Array Combine & Count
		/*	
			$name = array('Jamal','Jamal','Karim','Abdul','Karim','Karim','Karim','Abdul','Abdul');
			$dept = array('ICT','ICT','ICT','CSE','BBA','BBA','BBA','CSE','CSE','CSE','ICT');
			
			//$com = array_combine($name, $dept);
			
			print("<pre>");
			//print_r($com);
			print_r(array_count_values($dept));
			
			print("</pre>");
		*/
		
		//Array Difference & Intersect(!Important)
			
			$array_one = array(
				'a' => 'Jamal',
				'b' => 'Kasem',
				'c' => 'Rahim',
				'd' => 'Abdul'
			
			);
			
			$array_two = array(
				'a' => 'Jamal',
				'd' => 'Kasem',
				'c' => 'Rahim'
			
			);
			
			$array_three = array(
				'a' => 'Kasem',
				'd' => 'Abdul',
				'c' => 'Rahim'
			
			);
			
			//$new = array_diff($array_one,$array_two,$array_three);
			//$new = array_diff_assoc($array_one,$array_two,$array_three);
			//$new = array_diff_key($array_one,$array_two,$array_three);
			//$new = array_intersect($array_one, $array_two, $array_three);
			//$new = array_intersect_assoc($array_one, $array_two, $array_three);
			$new = array_intersect_key($array_one, $array_two, $array_three);
			
			print("<pre>");
			print_r($new);
			print("</pre>");
		

		?>

	</section>

<?php include 'footer.php'; ?>