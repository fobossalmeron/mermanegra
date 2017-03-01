<?php 
 require_once("../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php'); 
 require_once(ROOT_PATH . 'inc/controller.php');
?>

<?php
	$pagetitle = 'Collections';
	
?>
<?php include(ROOT_PATH . 'inc/header.php'); ?>
<?php include(ROOT_PATH . 'inc/nav.php'); ?>     
  
<main>
  	<div class="wrapper">   
	    <h2> Collections: </h2>
		<ul class="collectionlist">
			<?php foreach (array_reverse($collections) as $collection){
					echo get_collection($collection);
				}
			?>
		</ul>
  	</div>
</main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   