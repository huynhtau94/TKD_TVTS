$(document).ready(function(){$(".search-bar").on('click',function(){$(".search-box").toggle("fade")});$("[data-toggle='tooltip']").tooltip();if($(".bxslider").length){$('.bxslider').bxSlider({mode:'fade'});}
if($(".bxslider2").length){$('.bxslider2').bxSlider({pagerCustom:'#bx-pager',mode:'fade'});}
if($(".gallery").length){$("a[rel^='prettyPhoto']").prettyPhoto();}

if($("#owl-carousel").length){var owl=$("#owl-carousel");owl.owlCarousel({items:4,itemsDesktop:[1000,3],itemsDesktopSmall:[900,3],itemsTablet:[600,2],itemsMobile:[480,1]});$(".next").on('click',function(){owl.trigger('owl.next');})
$(".prev").on('click',function(){owl.trigger('owl.prev');});}

if($(".chart").length){$('.chart').easyPieChart({});}

if($(".accordion_cp").length){$.fn.slideFadeToggle=function(speed,easing,callback){return this.animate({opacity:'toggle',height:'toggle'},speed,easing,callback);};$('.accordion_cp').accordion({defaultOpen:'section1',cookieName:'nav',speed:'slow',animateOpen:function(elem,opts){elem.next().stop(true,true).slideFadeToggle(opts.speed);},animateClose:function(elem,opts){elem.next().stop(true,true).slideFadeToggle(opts.speed);}});}});var map;var brooklyn=new google.maps.LatLng(40.6743890,-73.9455);var MY_MAPTYPE_ID='custom_style';function initialize(){var featureOpts=[{stylers:[{hue:'#b1e7b8'},{visibility:'simplified'},{gamma:0.5},{weight:0.5}]},{elementType:'labels',stylers:[{visibility:'on'}]},{featureType:'water',stylers:[{color:'#b1e7b8'}]}];var mapOptions={zoom:12,center:brooklyn,mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,MY_MAPTYPE_ID]},mapTypeId:MY_MAPTYPE_ID};map=new google.maps.Map(document.getElementById('map-canvas'),mapOptions);var styledMapOptions={name:'Custom Style'};var customMapType=new google.maps.StyledMapType(featureOpts,styledMapOptions);map.mapTypes.set(MY_MAPTYPE_ID,customMapType);}
google.maps.event.addDomListener(window,'load',initialize);