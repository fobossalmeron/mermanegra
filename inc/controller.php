<?php

function get_product($product){

	$output="";

	$output = $output . '<li class="g-medium--half g-wide--1 ';
	if ($product["instock"] == false) {
	$output = $output .	"dimmed";
	}
	$output = $output . '">';
	$output = $output . '<a href="' . BASE_URL . 'shop/' . $product["sku"] . '/">';
	$output = $output . '<div class="listview">';
	$output = $output . '<img class="blind" src="' . BASE_URL . $product["img2"] . '" alt="' . $product["name"] . ' 1">';
	$output = $output . '<img class="sight" src="' . BASE_URL . $product["img"] . '" alt="' . $product["name"] . ' 2">';
	$output = $output . '</div>';
	$output = $output . "</a>";
	$output = $output . '<p class="productname">';
	$output = $output . $product["name"];
	$output = $output . "</p>";
	$output = $output . '<p class="pricename">' . $product["price"] . '.00 MXN</p>';
	$output = $output . '<a href="' . BASE_URL . 'shop/' . $product["sku"] . '/">';
	$output = $output . '<p class="viewdetails">View Details</p>';
	$output = $output . "</a>";
	$output = $output . "</li>";

	return $output;
}

function get_product_es($product){

	$output="";

	$output = $output . '<li class="g-medium--half g-wide--1 ';
	if ($product["instock"] == false) {
	$output = $output .	"dimmed";
	}
	$output = $output . '">';
	$output = $output . '<a href="' . BASE_URL . 'es/tienda/' . $product["sku"] . '/">';
	$output = $output . '<div class="listview">';
	$output = $output . '<img class="blind" src="' . BASE_URL . $product["img2"] . '" alt="' . $product["name_es"] . ' 1">';
	$output = $output . '<img class="sight" src="' . BASE_URL . $product["img"] . '" alt="' . $product["name_es"] . ' 2">';
	$output = $output . '</div>';
	$output = $output . "</a>";
	$output = $output . '<p class="productname">';
	$output = $output . $product["name_es"];
	$output = $output . "</p>";
	$output = $output . '<p class="pricename">' . $product["price"] . '.00 MXN</p>';
	$output = $output . '<a href="' . BASE_URL . 'es/tienda/' . $product["sku"] . '/">';
	$output = $output . '<p class="viewdetails">Ver Detalles</p>';
	$output = $output . "</a>";
	$output = $output . "</li>";

	return $output;
}

function get_collection($collection){

	$output="";

	$output = $output . '<div class="g-medium--full g-wide--full collectionoption">';
	$output = $output . '<a href="' . BASE_URL . 'collections/' . $collection["name"] . '/">';
	$output = $output . '<li class="g-medium--half g-wide--1 g-medium--last">';
	$output = $output . '<div class="listview">';
	$output = $output . '<img class="blind" src="' . BASE_URL . $collection["img2"] . '" alt="' . $collection["name"] . ' 1">';
	$output = $output . '<img class="sight" src="' . BASE_URL . $collection["img"] . '" alt="' . $collection["name"] . ' 2">';
	$output = $output . '</div>';
	$output = $output . '</li>';
	$output = $output . '</a>';
	$output = $output . '<div class="g-medium--half g-medium--last collectiontext">';
	$output = $output . '<h3 class="collectionname">' . $collection["name"] . '</h3>';
	if (array_key_exists('subname', $collection)){
	$output = $output . '<h3 class="collectionsubname">' . $collection["subname"] . '</h3>';
	}
	$output = $output . '<p>' . $collection["description"] . '</p>';
	if (array_key_exists('catalog', $collection)){
	$output = $output . '<a href="' . BASE_URL . $collection["catalog"] . '">See the catalog.</a>';
	}
	$output = $output . '</div>';
	$output = $output . '</div>';

	return $output;
}

function get_collection_es($collection){

	$output="";

	$output = $output . '<div class="g-medium--full g-wide--full collectionoption">';
	$output = $output . '<a href="' . BASE_URL . 'es/colecciones/' . $collection["name_es"] . '/">';
	$output = $output . '<li class="g-medium--half g-wide--1 g-medium--last">';
	$output = $output . '<div class="listview">';
	$output = $output . '<img class="blind" src="' . BASE_URL . $collection["img2"] . '" alt="' . $collection["name_es"] . ' 1">';
	$output = $output . '<img class="sight" src="' . BASE_URL . $collection["img"] . '" alt="' . $collection["name_es"] . ' 2">';
	$output = $output . '</div>';
	$output = $output . '</li>';
	$output = $output . '</a>';
	$output = $output . '<div class="g-medium--half g-medium--last collectiontext">';
	$output = $output . '<h3 class="collectionname">' . $collection["name_es"] . '</h3>';
	if (array_key_exists('subname_es', $collection)){
	$output = $output . '<h3 class="collectionsubname">' . $collection["subname_es"] . '</h3>';
	}
	$output = $output . '<p>' . $collection["description_es"] . '</p>';
	if (array_key_exists('catalog', $collection)){
	$output = $output . '<a href="' . BASE_URL . $collection["catalog"] . '">Ver catálogo.</a>';
	}
	$output = $output . '</div>';
	$output = $output . '</div>';

	return $output;
}
