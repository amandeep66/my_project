<?php
session_start();



if(isset($_GET['id']))
{
	
	$a=$_GET['id'];
	$max=count($_SESSION['product']);
	
	for($i=0;$i<$max;$i++)
		{
			if($_SESSION['product'][$i]['prod_id']==$a)
			{
				unset($_SESSION['product'][$i]);
				break;
				
			}
			
			
		}
		$_SESSION['product']=array_values($_SESSION['product']);
		
	
	
	
}
header('location:index.php');

?>