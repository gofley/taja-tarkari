<?php include "includes/header.php" ?>
<?php 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ecommerce');
$name = "";
$price = "";
$description = "";
$errors = array();
	// add product	
if (isset($_POST['add_product'])) {
	echo 1;
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['product_name']);
  $description = mysqli_real_escape_string($db, $_POST['product_description']);
  $price = mysqli_real_escape_string($db , $_POST['product_price']);
  $category_id = mysqli_real_escape_string($db , $_POST['category_id']);
  // Finally, register cayegory if there are no errors in the form

  	$query = "INSERT INTO product (product_name, product_description, product_price , category_id) 
  			  VALUES('$name', '$description', '$price' , '$category_id')";
  			  echo $query;
  	mysqli_query($db, $query);
  	echo "<script> alert(`Product Added`)</script>";
  	header("location:add_product.php");
  
}
 ?>
<center>
	<h2>Add Product </h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="input-group">
      <label> Name</label><br>
      <input type="text" name="product_name" value="<?php echo $name; ?>">
    </div><br>
    <div class="input-group">
    </div><br>
      <label> Description</label><br><br>
      <textarea rows="5" cols="50"  name="product_description"><?php echo $description; ?></textarea>
    </div><br>
    <div class="input-group">
      <label> Price</label><br>
         <input type="text" name="product_price" value="<?php echo $price; ?>">
        </div>

<br>    <select name="category_id">
    	<option value="">--Category--</option>
    	<?php 
				$sql = "SELECT * FROM category";
				$result = mysqli_query($db, $sql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
				    ?>

				    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name'] ?></option>
				    <?php
				  }
				} else {
				  echo "0 category";
				}


			 ?>
    </select>
    <br><br>

    <div class="input-group">
      <button type="submit" class="btn" name="add_product">Submit</button>
    </div>
  </form>
</center>
<br><br>


<center>
	<h3>All Products</h3>
	<table >
		<style type="text/css">
			table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
		</style>
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Category</th>
		</thead>
		<tbody>
			<?php 
				$sql = "SELECT * FROM product";
				$result = mysqli_query($db, $sql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
				    ?>

				    <tr>
				    	<td>
				    		<?php echo $row['product_id']; ?>
				    	</td>
				    	<td>
				    		<?php echo $row['product_name'];	 ?>
				    	</td>
				    	<td>
				    		<?php echo $row['product_description'];	 ?>
				    	</td>
				    	<td>
				    		<?php echo $row['product_price'];	 ?>
				    	</td>
				    	<td>
				    		<?php 
				    		$cid = $row['category_id'];
				    			$s = "select category_name from category where category_id = '$cid' LIMIT 1";
				    		
				    			$r = mysqli_query($db, $s);
				    			if (mysqli_num_rows($r) > 0) {
									// output data of each row
				  				while($ro = mysqli_fetch_assoc($r)) {
				  					echo $ro['category_name'];
				  				}
				  			}
				    		 ?>
				    	</td>
				    </tr>
				    <?php
				  }
				} else {
				  echo "0 products";
				}


			 ?>
		</tbody>
	</table>
</center>

<footer>
	
</footer>