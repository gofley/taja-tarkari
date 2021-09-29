
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

		
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="" href="#home">Home</a>
  <a href="add_category.php">Category</a>
  <a href="add_product.php">Product</a>
  <a href="manage_order.php">Orders</a>
  <a href="index.php?logout='1'" style="color: red; float: right;">Logout</a> 
</div>
<br>


<!-- admin panel(Assable by admin only) -->

<h1>TajaTarkari Admin</h1>