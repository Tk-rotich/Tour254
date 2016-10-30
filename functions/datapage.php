<?php

function data_page($conn, $page_id)
{
	$sql = "SELECT * FROM pages WHERE id = $page_id ";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result);
	
	$data['body_nohtml'] = strip_tags($data['body']);
	
	if($data['body']== $data['body_nohtml'])
	{
		$data['body_formatted'] = '<p>'.$data['body'].'</p>' ;
	}
	
	else
	{
		$data['body_formatted'] = $data['body'];
	}
	return $data;
}
 ?>