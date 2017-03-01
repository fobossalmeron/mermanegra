<?php 
 require_once("../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php'); 
 require_once(ROOT_PATH . 'inc/controller.php');
?>

<?php $pagetitle = 'Shop';?>

<?php include(ROOT_PATH . 'inc/header.php'); ?>
<?php include(ROOT_PATH . 'inc/nav.php'); ?>  
  
<main class="mainshop">
    <div class="wrapper">
	     <ul class="products">
		     <?php foreach (array_reverse($products) as $product){
						echo get_product($product);
		     		}
		     ?>
	     </ul>
    </div>
</main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   
