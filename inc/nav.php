<body>
   <div class="headerwrapper <?php if ($pagetitle == 'Merma Negra') {echo "homebar";} ?>">
    <header class="app-bar <?php if ($pagetitle == 'Merma Negra') {echo "homebar";} ?>">

      <div class="app-bar-container">
         <?php include(ROOT_PATH . 'inc/menuicon2.php'); ?>
         <h1 class="logo">Merma Negra</h1>
         <?php if ($pagetitle == 'Merma Negra'): ?>
          <div class="langmob">
            <a href="<?php echo BASE_URL?>es/">Es</a> | <b>En</b> 
          </div>
          <?php endif; ?>
    </main>
      </div>
    </header> 

    <nav class="navdrawer-container">
      <a href="<?php echo BASE_URL;?>">
      <img class="logoimgmov" src="<?php echo BASE_URL;?>images/logo.svg">
      </a>
      <ul>
      	<li><a class="<?php if ($pagetitle == 'About') {echo "active";} ?>" href="<?php echo BASE_URL;?>about/">About</a></li>
        <li><a class="<?php if ($pagetitle == 'Shop') {echo "active";} ?>" href="<?php echo BASE_URL;?>shop/">Shop</a></li>
        <li><a class="<?php if ($pagetitle == 'Collections') {echo "active";} ?>" href="<?php echo BASE_URL;?>collections/">Collections</a></li>
        <li><a class="<?php if ($pagetitle == 'Retail Spots') {echo "active";} ?>" href="<?php echo BASE_URL;?>retailspots/">Retail Spots</a></li>
        <li><a class="<?php if ($pagetitle == 'Contact') {echo "active";} ?>" href="<?php echo BASE_URL;?>contact/">Contact</a></li>
      </ul>
      <a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=P3N5TMTUR6YXJ&amp;display=1">
      <img class="shoppingcart" src="<?php echo BASE_URL;?>images/shoppingcart.svg">
      </a>
    </nav>
   </div>