<?php include ('config/setup.php'); ?>

<!DOCTYPE html>
<html lang="en">
<html>
	<header>
	<title> <?php echo $data['site_title'] .' | '. $data['page_title'] ;?></title>	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include ('config/css.php'); ?>
   <?php include ('config/js.php'); ?>
	
</header>
	
	<body>
	<div id="wrap">	
		
		<?php include (D_TEMPLATE.'/main_nav.php'); ?>
		
		
		<div class="container">
			<?php echo $data['body_formatted']; ?>
            
		</div>
		
	</div><!--End div wrap -->
		
		<?php include (D_TEMPLATE.'/footer.php'); ?>
	</body>
</html>
    
