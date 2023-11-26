<?php
include 'header.php'
?>
		<?php require_once('connect.php'); ?>
		<?php if(isset($_GET['id'])): ?>
			<h1>Update Product</h1>
			<div>
				<?php
					$query = "SELECT * FROM `products` WHERE `id` = {$_GET['id']}" ;
					$queryRun = mysqli_query($connection, $query);
					$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
				?>
				<?php foreach ($productsArray as $value): ?>

					<div class="new_product_panel">
						<form action="update_product.php" method="post">
							<input type="text" name="id" value ="<?= $_GET['id'] ?> "  hidden>
							<input type="text" name="product_title" placeholder="Product Name" required value ="<?= $value['product_title'] ?> "><br>
							<br>
							<input type="text" name="product_description" placeholder="Product Description" required value ="<?= $value['product_description'] ?> "><br><br>

							<input type="number" name="product_price" placeholder="Product Price" required value ="<?= $value['product_price'] ?>"><br><br>

							<input type="text" name="product_image" placeholder="Product Image" required value="<?= $value['product_image'] ?>"><br><br>

							<input type="submit" value="Save">
						</form>
					</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				<div>
					<h1>Something Went Wrong</h1>
				</div>
			<?php endif; ?>
			<?php
include 'footer.php'
?>
