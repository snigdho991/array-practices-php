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
		//Array Search
		/*
			$arr = array('a'=>'Cat','b'=>'Bear','c'=>'Fox','d'=>'Horse');
			
			if(isset($_POST['text'])){
				
				global $txt;
				$txt = $_POST['text'];
				
				$result = array_search($txt, $arr);
					echo "Your Search Item: $txt and Keyword is: $result";
			}	
		*/

		//In_Array
		
			$arr = array('Cat','Bear','Fox','Horse');
			
			if(isset($_POST['text'])){
				$new = $_POST['text'];
					
				if(in_array($new,$arr)){
					echo "$new Exists.";
				} else {
					echo "$new NOT Exist!";
				}
				
			}
		
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
			<input type="submit" value="Submit"/>
		
		</form>
	</section>

<?php include 'footer.php'; ?>