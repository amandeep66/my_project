<?php
session_start();
if(isset($_GET['id']))
{
	$max=count($_SESSION['product']);
	
	for($i=0;$i<$max;$i++)
		{
			if($_SESSION['product'][$i]['prod_id']==$a)
			{
	?>
    <form method="post" action="">
    <label><?php echo $_SESSION['product'][$i]['prod_value']?></label>
    <input type="text" name="product_qyt" value="<?php $_SESSION['product'][$i]['prod_qty']?>" />
    <input type="submit" name="save" />
    </form>
		
	<?php
}
		}
}
?>