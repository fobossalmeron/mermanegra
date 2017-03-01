<?php
	
require_once("../../inc/config.php");
$pagetitle = 'Thank you for your order!';	

?>

<?php include(ROOT_PATH . 'inc/es/header.php'); ?>

  <?php include(ROOT_PATH . 'inc/es/nav.php'); ?>   
  
     <main>
     <div class="wrapper">
     <h2> Gracias! </h2>
     <p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="http://www.paypal.com/mx">www.paypal.com/mx</a> to view details of this transaction.</p>
     <p>Want to continue shopping? Go back to the <a href="<?php echo BASE_URL; ?>shop.php"> Shop page</a>.</p>
     </div>
    </main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>   




