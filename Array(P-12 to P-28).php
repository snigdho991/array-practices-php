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
		//Array Keys
		
		/*
		$arr = array('BMW','TOYOTA','AUDI');
		
		if(array_key_exists(1,$arr)){
			echo "Key Exists";
		} else {
			echo "Key Does NOT Exist";
		}
		*/
		
		/*
		$arr = array(
					'ICT' => '55',
					'CSE' => '56',
					'TE' => '60'

		);
		
		$result = array_keys($arr,"55");
		
		print("<pre>");
		print_r($result);
		print("</pre>");
		*/
		
		//Array Map
		/*
		function myfunc($value){
			
			$v = strtoupper($value);
			return $v;
		}
		
		$arr = array(
					'Animal' => 'Cow',
					'Type'   => 'mamal'
		
			);
			
		$result = array_map("myfunc", $arr);
			
		print("<pre>");
		print_r($result);
		print("</pre>");
		*/
		
		//Array Merge
		/*
			$arr_one = array(
					'a' => 'Cow',
					'b'   => 'Goat'
		
			);
			
			$arr_two = array(
					'c' => 'Tiger',
					'b'   => 'Lion'
		
			);
		
			$result = array_merge($arr_one, $arr_two);

			print("<pre>");
			print_r($result);
			print("</pre>");
		*/

		//Array Multisort
		/*
		$arr_one = array('Cat','Bear');
		$arr_two = array('Fox','Horse');
		
		array_multisort($arr_one,SORT_ASC, $arr_two,SORT_DESC);
		
		
		print("<pre>");
		print_r($arr_one);
		print("</pre>");
		
		print("<pre>");
		print_r($arr_two);
		print("</pre>");
		*/
		
		//Array Pad , Push & Pop
		/*
		$arr = array('Cat','Bear','Dog');
		//$result = array_pad($arr,-5,'Dog');
		
		//array_pop($arr);
		array_push($arr,'Tiger');
		
		print("<pre>");
		print_r($arr);
		print("</pre>");
		*/
		
		//Array Product
		/*
		$arr = array(5,5,2);
		echo (array_product($arr));
		*/
		
		//Array Replace & Reverse
		/*
		$arr_one = array('a'=>'Cat', 'b'=>'Bear','c'=>'Fox','b'=>'Horse');
		//$arr_two = array('a'=>'Fox','Horse');
		
		//$result = array_replace($arr_one, $arr_two);
		$result = array_reverse($arr_one, true);
		
		print("<pre>");
		print_r($result);
		print("</pre>");
		*/
		
		//Array Slice
		/*
		$arr_one = array('Cat','Bear','Fox','Horse');
		$result = array_slice($arr_one, 1,3);
		
		print("<pre>");
		print_r($result);
		print("</pre>");
		*/
		
		//Array Sum, Unique, Unshift & Values
		
		$arr = array(
					'a' => '100',
					'b' => '50',
					'c' => '50',
					'd' => '70',
					'e' => '70'
			);
		
		//$result = array_sum($arr);
		//$result = array_unique($arr);
		//array_unshift($arr, "500");
		$result = array_values($arr);
		
		print("<pre>");
		print("<b>");
		print_r($result);
		//print_r($arr);
		print("</b>");
		print("</pre>");
		
		
		
		?>

	</section>

<?php include 'footer.php'; ?>