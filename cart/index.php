<?php session_start();

if(isset($_POST['submit']))
{
if(is_array($_SESSION['product']))
	{
		$status=false;
	 $max=count($_SESSION['product']);
		for($i=0;$i<$max;$i++)
		{
			if($_SESSION['product'][$i]['prod_id']==$_POST['product_id'])
			{
				$_SESSION['product'][$i]['prod_qty']=$_SESSION['product'][$i]['prod_qty']+$_POST['qty'];
				$status=true;
			}
				
		}
		if($status==false)
			{
				$_SESSION['product'][$max]['prod_id']=$_POST['product_id'];
				$_SESSION['product'][$max]['prod_qty']=$_POST['qty'];
			
			}	
			
		
		}
else
	{
		$_SESSION['product']=array();
		$_SESSION['product'][0]['prod_id']=$_POST['product_id'];
		$_SESSION['product'][0]['prod_qty']=$_POST['qty'];
	}
	echo "<pre>";
	print_r($_SESSION['product']);
}
 ?>
<form method="post" action="">
<table>
<tr>
<th>product id</th>
<th>product qty</th>
<th></th>
<tr>
<tr>
<td>
<input type="text" name="product_id" value="" />
</td>
<td>
<input type="text" name="qty" value="" />
</td>
<td>
<input type="submit" name="submit" />
</td>
</tr>
</table>
</form>

<table>
<tr>
<th>product id</th>
<th>product qty</th>
<th></th>
</tr>
<?php foreach($_SESSION['product'] as $item)
{
?>
<tr>
<td>
<?php echo $item['prod_id'] ?> 
</td>
<td>
<?php echo $item['prod_qty'] ?>
</td>
<td>
<a href="delete.php?id=<?php echo $item['prod_id']?>">delete</a>
</td>
<td>
<a href="edit.php?id=<?php echo $item['prod_id']?>">Update</a>

</tr>
<?php } ?>
</table>



