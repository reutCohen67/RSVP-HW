
<html>
<head></head>
<body>


<?php include 'arrays.php';

 ?>
 	<?php for($i = 0 ; $i < sizeof($phones) - 1; $i++): ?>
 		<div>
 			<h1><?php echo $phones["Manufacturer"][$i]." ".$phones["model"][$i] ?></h1>
 			<h2>Now for only: <?php echo $phones["price"][$i] ?></h2>
 			<h3>Available colors:
 			<?php foreach ($phones["Color Codes"][$i] as $key => $value): ?> 
 				 <?php echo '<span style="Color:'.$value.'">'.$value.'</span';?>
 				 <span>,</span>

 		<?php endforeach ?>
 		 	</h3>


 		</div>
 		----------------------------------------
 	<?php endfor ?>

</body>

</html>