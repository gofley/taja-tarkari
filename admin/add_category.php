<?php include "includes/header.php" ?>
<?php 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ecommerce');
$name = "";
$errors = array();
	// add category	
if (isset($_POST['add_category'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['category_name']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $check_query = "SELECT * FROM category WHERE category_name='$name' LIMIT 1";
  $result = mysqli_query($db, $check_query);
  $category = mysqli_fetch_assoc($result);
  
  if ($category) { // if category exists
    if ($category['name'] === $category) {
      array_push($errors, "Category already exists");
    }

  }

  // Finally, register cayegory if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO category (category_name) 
  			  VALUES('$name')";
  			  echo $query;
  	mysqli_query($db, $query);
  	echo "<script> alert(`Category Added`)</script>";
  	header("location:add_category.php");
  }
}
 ?>
<center>
	<h2>Add Catgory</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="input-group">
      <label>Category Name</label><br><br>
      <input type="text" name="category_name" value="<?php echo $name; ?>">
    </div><br><br>
    <div class="input-group">
      <button type="submit" class="btn" name="add_category">Submit</button>
    </div>
  </form>
</center>
<br><br>


<center>
	<h3>All categories</h3>
	<table >
		<style type="text/css">
			table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 3px;
}
		</style>
		<thead>
			<th>Id</th>
			<th>Name</th>
		</thead>
		<tbody>
			<?php 
				$sql = "SELECT * FROM category";
				$result = mysqli_query($db, $sql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) {
				    ?>

				    <tr>
				    	<td>
				    		<?php echo $row['category_id']; ?>
				    	</td>
				    	<td>
				    		<?php echo $row['category_name'];	 ?>
				    	</td>
				    </tr>
				    <?php
				  }
				} else {
				  echo "0 category";
				}


			 ?>
		</tbody>
	</table>
</center>