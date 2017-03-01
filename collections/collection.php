<?php 
 require_once("../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php'); 
 require_once(ROOT_PATH . 'inc/controller.php');

if (isset($_GET["id"])) {
			$collection_id = $_GET["id"];
				for ($sku = 0; $sku < count($collections) + 1; $sku++) {
				    if ($collections[$sku]["name"] == $collection_id){
				    	$collection = $collection_id;
				    }
			}
	}

if (!isset($collection)) {
			header("Location: " . BASE_URL . "collections/");
			exit();
	}
?>

<?php $pagetitle = 'Collection ' . $collection; ?>

<?php include(ROOT_PATH . 'inc/header.php'); ?>
<?php include(ROOT_PATH . 'inc/nav.php'); ?>   
  
<main>
  	<div class="wrapper">   
  		<h3><a href="<?php echo BASE_URL; ?>collections/">Collections</a> / <?php echo $collection;?></h3>

		     <ul class="products">

				<?php foreach($products as $product){
					     		if ($product["collection"] === $collection){
						    			echo get_product($product);
						    	} 
					  } 
				?>

			</ul>
  	</div>
</main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   