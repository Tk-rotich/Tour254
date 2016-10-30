<?php 

function nav_main($conn, $page_id)
{
	$q = "SELECT * FROM pages" ;
	$r = mysqli_query($conn, $q);
		
	while ($nav = mysqli_fetch_assoc($r)) 
		{?>
			
		<li<?php if($page_id == $nav['id']){ echo ' class="active" ' ;} ?> ><a href="?page=<?php echo $nav['id']; ?> "> <?php echo $nav['page_title'] ; ?> </a></li>
			
		<?php }
	
}

?>