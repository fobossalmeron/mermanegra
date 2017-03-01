<?php 
 require_once("../../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php'); 
 require_once(ROOT_PATH . 'inc/controller.php');
?>

<?php
	$pagetitle = 'Colecciones';
	
?>
<?php include(ROOT_PATH . 'inc/es/header.php'); ?>
<?php include(ROOT_PATH . 'inc/es/nav.php'); ?>     
  
<main>
  	<div class="wrapper">   
	    <h2> Colecciones: </h2>
		<ul class="collectionlist">
			<?php foreach (array_reverse($collections) as $collection){
					echo get_collection_es($collection);
				}
			?>
		</ul>
  	</div>
</main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   