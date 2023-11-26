<?php
 include 'header.php'
?>
    <section class="section">
<?php
    require_once('connect.php'); 
	$query = "SELECT * FROM `products` " ;
	$queryRun = mysqli_query($connection, $query);
	$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
?>
<div class="all_products">
	<?php foreach($productsArray as $product): ?>
		<div class="product_card">
			<img src="<?= $product['product_image'] ?>" width="150px" height="auto" >
			<hr>
			<br>
			<small><?= $product['product_title'] ?></small>
			<br>
			<br>
	<!---	<small><?= $product['product_price'] ?></small>
			<hr>
			<small><?= $product['product_description'] ?></small>  ---->
			<a href="single.php?id=<?= $product['id'] ?>">
		    <button class='button'>Read More</button>
			</a>
		</div>
	<?php endforeach; ?>
</div>

    </section>
 <?php
    include 'footer.php'
?>