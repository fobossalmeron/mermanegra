<?php 
 require_once("../../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php'); 
 require_once(ROOT_PATH . 'inc/controller.php');
?>

<?php $pagetitle = 'Tienda';?>

<?php include(ROOT_PATH . 'inc/es/header.php'); ?>
<?php include(ROOT_PATH . 'inc/es/nav.php'); ?>  
  
<main class="mainshop">
    <div class="wrapper">
	     <ul class="products">
		     <?php foreach (array_reverse($products) as $product){
						echo get_product_es($product);
		     		}
		     ?>
	     </ul>
    </div>
</main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   
