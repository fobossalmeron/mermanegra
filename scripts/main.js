(function () {
  'use strict';

  var querySelector = document.querySelector.bind(document);

  var navdrawerContainer = querySelector('.navdrawer-container');
  var body = document.body;
  var appbarElement = querySelector('.app-bar');
  var appbarContainer = querySelector('.app-bar-container');
  var main = querySelector('main');
  var wrapper = querySelector('.wrapper');
  var menuHamb = querySelector('.hamb');

  function closeMenu() {
    body.classList.remove('open');
    appbarElement.classList.remove('open');
    navdrawerContainer.classList.remove('open');
    wrapper.classList.remove('open');
    main.classList.remove('fade');
    menuHamb.classList.remove('open');
  }

  function toggleMenu() {
    body.classList.toggle('open');
    appbarElement.classList.toggle('open');
    navdrawerContainer.classList.toggle('open');
    navdrawerContainer.classList.add('opened');
    wrapper.classList.toggle('open');
    main.classList.toggle('fade');
    menuHamb.classList.toggle('open');
  }

  menuHamb.addEventListener('click', toggleMenu);
  main.addEventListener('click', closeMenu);
  navdrawerContainer.addEventListener('click', function (event) {
    if (event.target.nodeName === 'A' || event.target.nodeName === 'LI') {
      closeMenu();
    }
  });
})();

//Animatehomepage
/*$(document).ready(function(){
  $('.headerwrapper').addClass( 'appear');
});*/

//Shop Visibles
$(window).bind("load", function() {
   $( '.view2, .view3, .view4' ).removeClass( 'visible');
});

// Shop views
$('.option1').click(function(){
	$( '.view1' ).addClass( 'visible');
	$( '.view2, .view3, .view4' ).removeClass( 'visible');
});

$('.option2').click(function(){
	$( '.view2' ).addClass( 'visible');
	$( '.view1, .view3, .view4' ).removeClass( 'visible');
});

$('.option3').click(function(){
	$( '.view3' ).addClass( 'visible');
	$( '.view1, .view2, .view4' ).removeClass( 'visible');
});

$('.option4').click(function(){
	$( '.view4' ).addClass( 'visible');
	$( '.view1, .view2, .view3' ).removeClass( 'visible');
});

//Easyzoom
if ($(window).width() < 620) {
    var $easyzoom = false;
} else {
    var $easyzoom = $('.easyzoom').easyZoom();
    var api = $easyzoom.data('easyZoom');
}

//Maps
function initMap() {
  var retailSpot_180Shop  = new google.maps.LatLng(19.419696,-99.160785);
  var mapOptions_180Shop = {
    zoom: 16,
    center: retailSpot_180Shop,
    scrollwheel: false
  };
  var map_180Shop = new google.maps.Map(document.getElementById("map_180Shop"), mapOptions_180Shop);

  var retailSpot_180ShopMarker = new google.maps.Marker({
    position: retailSpot_180Shop,
    map: map_180Shop,
    title:"180 Shop",
    //icon: image
  });

  var retailSpot_Lonja = new google.maps.LatLng(19.430676, -99.196939);
  var mapOptions_Lonja = {
    zoom: 16,
    center: retailSpot_Lonja,
    scrollwheel: false
  };
  var map_Lonja = new google.maps.Map(document.getElementById("map_Lonja"), mapOptions_Lonja);

  var retailSpot_LonjaMarker = new google.maps.Marker({
      position: retailSpot_Lonja,
      map: map_Lonja,
      title:"ZocoMX",
      //icon: image
  });

//Define image y guarda en .png, widthxheight en medidas, origen el centro y anchor la punta que señala

//  var image = {
//      url: '/images/logo.svg',
//      size: new google.maps.Size(40,33),
//      origin: new google.maps.Point(0,0),
//      anchor: new google.maps.Point(0, 33)
//  };
};

// google.maps.event.addDomListener(window, 'load', initialize);


function changeColor(){
var selectedvalue = $('#colorid').val();
$('#colorid').removeClass("colorbeige colorgrey colorwhite colorgreen colormarbledgrey colorpearlgrey coloroxfordgrey colordenimblue colornavyblue colorbrown colorlila");
$(".selected").removeClass("selected");
switch (selectedvalue) {
  case "Black":
      $('#colorid').toggleClass("colorblack");
      $('.colorblack').toggleClass("selected");
      break;
  case "Beige":
      $('#colorid').toggleClass("colorbeige");
      $('.colorbeige').toggleClass("selected");
      break;
  case "Grey":
      $('#colorid').toggleClass("colorgrey");
      $('.colorgrey').toggleClass("selected");
      break
  case "Denim Darkwash":
      $('#colorid').toggleClass("colordenimblue");
      $('.colordenimblue').toggleClass("selected");
      break
  case "Oxford Grey":
      $('#colorid').toggleClass("coloroxfordgrey");
      $('.coloroxfordgrey').toggleClass("selected");
      break
  case "Navy Blue":
      $('#colorid').toggleClass("colornavyblue");
      $('.colornavyblue').toggleClass("selected");
      break
  case "Pearl Grey":
      $('#colorid').toggleClass("colorpearlgrey");
      $('.colorpearlgrey').toggleClass("selected");
      break
  case "Brown":
      $('#colorid').toggleClass("colorbrown");
      $('.colorbrown').toggleClass("selected");
      break
  case "Marbled Grey":
      $('#colorid').toggleClass("colormarbledgrey");
      $('.colormarbledgrey').toggleClass("selected");
      break
  case "White":
      $('#colorid').toggleClass("colorwhite");
      $('.colorwhite').toggleClass("selected");
      break;
  case "Army Green":
      $('#colorid').toggleClass("colorgreen");
      $('.colorgreen').toggleClass("selected");
      break;
  case "Lila":
      $('#colorid').toggleClass("colorlila");
      $('.colorlila').toggleClass("selected");
      break;
    }
};

function changeSize(){
var selectedvalue = $('#sizeid').val();
$(".selectedsize").removeClass("selectedsize");
switch (selectedvalue) {
  case "1":
      $('.sizeone').toggleClass("selectedsize");
      break;
  case "2":
      $('.sizetwo').toggleClass("selectedsize");
      break;
  case "3":
      $('.sizethree').toggleClass("selectedsize");
      break;
    }
};

function selectItem(dropdown, value){
var select = document.getElementById(dropdown);
  for(var i=0; i < select.options.length; i++)
  {
    if(select.options[i].value == value)
      select.selectedIndex = i;
  }
  if (dropdown == 'colorid'){
    changeColor();
  };
}
