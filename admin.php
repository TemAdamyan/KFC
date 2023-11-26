<?php
include 'header.php'
?>
<section>
<br> <br> <br> <br> <br>
<hr>
<?php require_once("connect.php"); ?>
	<h1>Admin Panel</h1>
    <br>
		<div class="new_product_panel">
			<form action="add_product.php" method="post">
				<input type="text" name="product_title" placeholder="Product Name" required><br>
<br>
				<input type="text" name="product_description" placeholder="Product Description" required><br><br>

				<input type="number" name="product_price" placeholder="Product Price" required><br><br>

				<input type="text" name="product_image" placeholder="Product Image" required><br><br>

				<input type="submit" value="Save">
			</form>
		</div>
		<div class="show_exist_products">
			<table class="addtable">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Image</th>
						<th>Update</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT * FROM `products`";
						$queryRun = mysqli_query($connection, $query);
						$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
						foreach ($productsArray as $value) {
							echo "<tr>";
							echo "<td>" . $value['id'] . "</td><td>" . $value['product_title'] . "</td><td>" . $value['product_description'] . "</td><td>" . $value['product_price'] . "</td><td><img src='" . $value['product_image'] . "' width='150px' height='150px' ></td>";
									echo "<td> <a href='productUpdate.php?id=" . $value['id'] . "' >Update / </a><a href='delete.php?id=". $value['id'] ."'>Delete</a></td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>

<hr>
<br>
<br>
<br>
<br>
<br>
	</section>

    <?php
include 'footer.php'
?>