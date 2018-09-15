<?php
 require_once("../inc/config.php");
 require_once(ROOT_PATH . 'inc/products.php');

if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	$product = $products[$product_id];
}

if (!isset($product)) {
	header("Location: " . BASE_URL . "shop/");
	exit();
}
?>

<?php
	$pagetitle = $product["name"];
?>

<?php include(ROOT_PATH . 'inc/header.php'); ?>
<?php include(ROOT_PATH . 'inc/nav.php'); ?>

<script>
//Colors in shop
$( document ).ready(function() {
    changeColor();
    changeSize();
  $('#colorid').change(function(){
    changeColor();
  });
  $('#sizeid').change(function(){
    changeSize();
  });
});
</script>

<main>
   <div class="wrapper">

   	<div class="shop-item-image g--half tabla-imagen">

	   	<div class="easyzoom easyzoom--overlay zoomable view1 visible">
			<a href="<?php echo BASE_URL . $product["img"]; ?>">
				<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"];?>" width="100%" height="auto" />
			</a>
		</div>

		<div class="easyzoom easyzoom--overlay zoomable view2 visible">
			<a href="<?php echo BASE_URL . $product["img2"]; ?>">
				<img src="<?php echo BASE_URL . $product["img2"]; ?>" alt="<?php echo $product["name"];?>" width="100%" height="auto" />
			</a>
		</div>

		<div class="easyzoom easyzoom--overlay zoomable view3 visible">
			<a href="<?php echo BASE_URL . $product["img3"]; ?>">
				<img src="<?php echo BASE_URL . $product["img3"]; ?>" alt="<?php echo $product["name"];?>" width="100%" height="auto" />
			</a>
		</div>

		<div class="easyzoom easyzoom--overlay zoomable view4 visible">
			<a href="<?php echo BASE_URL . $product["img4"]; ?>">
				<img src="<?php echo BASE_URL . $product["img4"]; ?>" alt="<?php echo $product["name"];?>" width="100%" height="auto" />
			</a>
		</div>

	</div>

	<div class="shop-item-info g--half g--last tabla-textos">

			<div class="textoitem">
				    <a href="<?php echo BASE_URL; ?>shop/">Shop</a> / <?php echo $product["name"];?>
				    <h1 class="nameshow"><?php echo $product["name"];?></h1>
				    <h2 class="descriptionshow"><?php echo $product["description"];?></h2>
            <a class="viewdetails sizechart" href="<?php echo BASE_URL ?>shop/MermaNegra_SizeChart.pdf">(View our size chart)</a>
				    <h3 class="priceshow"><?php echo $product["price"];?>.00 MXN</h3>

				<?php if ($product["instock"]) { ?>

        <p class="selectiontitle">Size</p>
        <?php if (isset($product["sizeS"]) && $product["sizeS"] == true): ?> <button class="sizebutton sizeone" onclick="selectItem('sizeid', 1);changeSize();">1</button> <?php endif;?>
        <?php if (isset($product["sizeM"]) && $product["sizeM"] == true): ?> <button class="sizebutton sizetwo" onclick="selectItem('sizeid', 2);changeSize();">2</button> <?php endif;?>
        <?php if (isset($product["sizeL"]) && $product["sizeL"] == true): ?> <button class="sizebutton sizethree" onclick="selectItem('sizeid', 3);changeSize();">3</button> <?php endif;?>

        <p class="selectiontitle">Color</p>
          <?php if ($product["color1"] == true): ?> <button class="colorbutton colorblack" onclick="selectItem('colorid', 'Black');">Black</button> <?php endif;?>
          <?php if ($product["color2"] == true): ?> <button class="colorbutton colorbeige" onclick="selectItem('colorid', 'Beige');">Beige</button> <?php endif;?>
          <?php if ($product["color3"] == true): ?> <button class="colorbutton colorgrey" onclick="selectItem('colorid', 'Grey');">Grey</button> <?php endif;?>
          <?php if (isset($product["color4"]) && $product["color4"] == true): ?> <button class="colorbutton colormarbledgrey" onclick="selectItem('colorid', 'Marbled Grey');">Marbled Grey</button> <?php endif;?>
          <?php if (isset($product["color5"]) && $product["color5"] == true): ?> <button class="colorbutton colorwhite" onclick="selectItem('colorid', 'White');">White</button> <?php endif;?>
          <?php if (isset($product["color6"]) && $product["color6"] == true): ?> <button class="colorbutton colorgreen" onclick="selectItem('colorid', 'Army Green');">Army Green</button> <?php endif;?>
          <?php if (isset($product["color7"]) && $product["color7"] == true): ?> <button class="colorbutton colordenimblue" onclick="selectItem('colorid', 'Denim Darkwash');">Denim Darkwash</button> <?php endif;?>
          <?php if (isset($product["color8"]) && $product["color8"] == true): ?> <button class="colorbutton colornavyblue" onclick="selectItem('colorid', 'Navy Blue');">Navy Blue</button> <?php endif;?>
          <?php if (isset($product["color9"]) && $product["color9"] == true): ?> <button class="colorbutton coloroxfordgrey" onclick="selectItem('colorid', 'Oxford Grey');">Oxford Grey</button> <?php endif;?>
          <?php if (isset($product["color10"]) && $product["color10"] == true): ?> <button class="colorbutton colorpearlgrey" onclick="selectItem('colorid', 'Pearl Grey');">Pearl Grey</button> <?php endif;?>
          <?php if (isset($product["color11"]) && $product["color11"] == true): ?> <button class="colorbutton colorbrown" onclick="selectItem('colorid', 'Brown');">Brown</button> <?php endif;?>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">


            <input type="hidden" name="on0" value="Size">
            <select class="dropsize" id="sizeid" name="os0">
              <?php if ($product["sizeS"] == true): ?> <option value="1">1</option> <?php endif;?>
              <?php if ($product["sizeM"] == true): ?> <option value="2">2</option> <?php endif;?>
              <?php if ($product["sizeL"] == true): ?> <option value="3">3</option> <?php endif;?>
            </select>

            <input type="hidden" name="on1" value="Color">
            <select class="dropsize" id="colorid" name="os1">
              <?php if ($product["color1"] == true): ?> <option value="Black">Black</option> <?php endif;?>
              <?php if ($product["color2"] == true): ?> <option value="Beige">Beige</option> <?php endif;?>
              <?php if ($product["color3"] == true): ?> <option value="Grey">Grey</option> <?php endif;?>
              <?php if ($product["color4"] == true): ?> <option value="Marbled Grey">Marbled Grey</option> <?php endif;?>
              <?php if ($product["color5"] == true): ?> <option value="White">White</option> <?php endif;?>
              <?php if ($product["color6"] == true): ?> <option value="Army Green">Army Green</option> <?php endif;?>
              <?php if ($product["color7"] == true): ?> <option value="Denim Darkwash">Denim Darkwash</option> <?php endif;?>
              <?php if ($product["color8"] == true): ?> <option value="Navy Blue">Navy Blue</option> <?php endif;?>
              <?php if ($product["color9"] == true): ?> <option value="Oxford Grey">Oxford Grey</option> <?php endif;?>
              <?php if ($product["color10"] == true): ?> <option value="Pearl Grey">Pearl Grey</option> <?php endif;?>
              <?php if ($product["color11"] == true): ?> <option value="Brown">Brown</option> <?php endif;?>
            </select>

						<input type="hidden" name="item_name" value="<?php echo $product["name"];?>">
						<img class="shoppingcartwhite" src="<?php echo BASE_URL;?>images/shoppingcartwhite.svg"></div>
						<input class="button--primary sendbutton" type="submit" value="Add to Cart" name="submit">
					</form>

				<?php } else { echo '<p class="outofstock">Currently out of stock</p>';}?>


				    <ul class="g--medium--full floated">
			    	<li class="g-medium--half g-wide--1 option1 minify">
			    	<img src="<?php echo BASE_URL . $product["img"]; ?>" alt"<?php echo $product["name"]; ?>">
			    	</li>
			    	<li class="g-medium--half g-wide--1 g-medium--last option2 minify">
			    	<img src="<?php echo BASE_URL . $product["img2"]; ?>" alt"<?php echo $product["name"]; ?>">
			    	</li>
			    	<li class="g-medium--half g-wide--1 option3 minify">
			    	<img src="<?php echo BASE_URL . $product["img3"]; ?>" alt"<?php echo $product["name"]; ?>">
			    	</li>
			    	<li class="g-medium--half g-wide--1 g-medium--last g-wide--last option4 minify">
			    	<img src="<?php echo BASE_URL . $product["img4"]; ?>" alt"<?php echo $product["name"]; ?>">
			    	</li>
		</ul>

			</div>


	</div>

  </div>
</main>
<script src="<?php echo BASE_URL;?>scripts/easyzoom.js"></script>
<?php include(ROOT_PATH . 'inc/footer.php'); ?>
