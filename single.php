<?php
 include 'header.php'
?>
    <section class="section">
   
	<?php require_once("connect.php");?>
	<?php if(isset($_GET['id'])): ?>
		<?php 
			$query = "SELECT * FROM `products` WHERE `id` = {$_GET['id']} " ;
			$queryRun = mysqli_query($connection, $query);
			$productsArray = mysqli_fetch_all($queryRun, MYSQLI_ASSOC);
		?>
		<main>
			<?php foreach($productsArray as $product): ?>
			<div>
				<div>
					<img src="<?= $product['product_image']?>" width="500px" height="auto">
				</div>
				<div>
					<h3><?= $product['product_title']?></h3>
                    <br>
					<h3><?= $product['product_price']?></h3>
                    <br>
					<p><?= $product['product_description']?></p>
				</div>
			</div>
			<?php endforeach;?>
		</main>
	<?php else: ?>
		<h1>Something Went Wrong</h1>
	<?php endif; ?>

    <div class="img3">
    <img src="img/busket.jpg" class="img4">
    <p class="text">
        Օրդ սկսի՛ր #KFC բասքեթով և ստեղծի՛ր հիանալի տրամադրություն ամբողջ շաբաթվա համար 🍗 
        <br>
❤ Արի՛ #KFC կամ պատվիրի՛ր ռաքում՝ 
<br>
📲 011 505 505
    </p>
    </div>
    </section>
<?php
    include 'footer.php'
?>