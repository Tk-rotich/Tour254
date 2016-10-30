<?php 
//setup file
$host = 'localhost';
$database = 'Tourism';
$user_name = 'root';
$password = '';
$conn = mysqli_connect($host, $user_name, $password, $database) OR die ('Could not connect becouse: '.mysqli_connect_error());

#Functions
include ('functions/datapage.php');
include ('functions/template.php');
 
 DEFINE('D_TEMPLATE', 'template');
 
if(isset($_GET['page']))
{
	$page_id = $_GET['page'];
}
else {
	$page_id= 1;
}

# Page setup
$data = data_page($conn, $page_id);

?>