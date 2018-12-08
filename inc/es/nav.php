<body>
   <div class="headerwrapper <?php if ($pagetitle == 'Mermanegra') {echo "homebar";} ?>">
    <header class="app-bar <?php if ($pagetitle == 'Mermanegra') {echo "homebar";} ?>"> 

      <div class="app-bar-container">
         <?php include(ROOT_PATH . 'inc/menuicon2.php'); ?>
         <h1 class="logo">Mermanegra</h1>
         <?php if ($pagetitle == 'Mermanegra'): ?>
          <div class="langmob">
            <b>Es</b> | <a href="<?php echo BASE_URL?>">En</a>
          </div>
          <?php endif; ?>
    </main>
      </div>
    </header> 

    <nav class="navdrawer-container">
      <a href="<?php echo BASE_URL;?>es/"> 
      <img class="logoimgmov" src="<?php echo BASE_URL;?>images/logo.svg">
      </a>
      <ul>
        <li><a class="<?php if ($pagetitle == 'Acerca de') {echo "active";} ?>" href="<?php echo BASE_URL;?>es/acercade/">Acerca de</a></li>
        <li><a class="<?php if ($pagetitle == 'Tienda') {echo "active";} ?>" href="<?php echo BASE_URL;?>es/tienda/">Tienda</a></li>
        <li><a class="<?php if ($pagetitle == 'Colecciones') {echo "active";} ?>" href="<?php echo BASE_URL;?>es/colecciones/">Colecciones</a></li>
        <li><a class="<?php if ($pagetitle == 'Puntos de Venta') {echo "active";} ?>" href="<?php echo BASE_URL;?>es/puntosdeventa/">Puntos de Venta</a></li>
        <li><a class="<?php if ($pagetitle == 'Contacto') {echo "active";} ?>" href="<?php echo BASE_URL;?>es/contacto/">Contacto</a></li>
      </ul>
      <a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=P3N5TMTUR6YXJ&amp;display=1">
      <img class="shoppingcart" src="<?php echo BASE_URL;?>images/shoppingcart.svg">
      </a>
    </nav>
   </div>