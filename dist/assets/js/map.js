/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 49);
/******/ })
/************************************************************************/
/******/ ({

/***/ 49:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(50);


/***/ }),

/***/ 50:
/***/ (function(module, exports) {

(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgYWY3ZmFmYjFhODQyYWY4YmM3NWUiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9tYXAuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7Ozs7O0FDN0RBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOzs7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7OztBQUdBO0FBQ0E7OztBQUdBO0FBQ0E7O0FBRUE7O0FBRUEsRUFBRTs7O0FBR0Y7QUFDQTs7O0FBR0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsRUFBRTs7QUFFRjtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEdBQUc7O0FBRUg7QUFDQTs7QUFFQTs7QUFFQSxHQUFHO0FBQ0g7O0FBRUE7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTs7QUFFQTs7QUFFQSxFQUFFOztBQUVGO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBOztBQUVBOztBQUVBO0FBQ0E7O0FBRUEsRUFBRTs7QUFFRixDQUFDOztBQUVELENBQUMsVSIsImZpbGUiOiJtYXAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSA0OSk7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgYWY3ZmFmYjFhODQyYWY4YmM3NWUiLCIoZnVuY3Rpb24oJCkge1xuXG4vKlxuKiAgbmV3X21hcFxuKlxuKiAgVGhpcyBmdW5jdGlvbiB3aWxsIHJlbmRlciBhIEdvb2dsZSBNYXAgb250byB0aGUgc2VsZWN0ZWQgalF1ZXJ5IGVsZW1lbnRcbipcbiogIEB0eXBlXHRmdW5jdGlvblxuKiAgQGRhdGVcdDgvMTEvMjAxM1xuKiAgQHNpbmNlXHQ0LjMuMFxuKlxuKiAgQHBhcmFtXHQkZWwgKGpRdWVyeSBlbGVtZW50KVxuKiAgQHJldHVyblx0bi9hXG4qL1xuXG5mdW5jdGlvbiBuZXdfbWFwKCAkZWwgKSB7XG5cdFxuXHQvLyB2YXJcblx0dmFyICRtYXJrZXJzID0gJGVsLmZpbmQoJy5tYXJrZXInKTtcblx0XG5cdFxuXHQvLyB2YXJzXG5cdHZhciBhcmdzID0ge1xuXHRcdHpvb21cdFx0OiAxNixcblx0XHRjZW50ZXJcdFx0OiBuZXcgZ29vZ2xlLm1hcHMuTGF0TG5nKDAsIDApLFxuXHRcdG1hcFR5cGVJZFx0OiBnb29nbGUubWFwcy5NYXBUeXBlSWQuUk9BRE1BUFxuXHR9O1xuXHRcblx0XG5cdC8vIGNyZWF0ZSBtYXBcdCAgICAgICAgXHRcblx0dmFyIG1hcCA9IG5ldyBnb29nbGUubWFwcy5NYXAoICRlbFswXSwgYXJncyk7XG5cdFxuXHRcblx0Ly8gYWRkIGEgbWFya2VycyByZWZlcmVuY2Vcblx0bWFwLm1hcmtlcnMgPSBbXTtcblx0XG5cdFxuXHQvLyBhZGQgbWFya2Vyc1xuXHQkbWFya2Vycy5lYWNoKGZ1bmN0aW9uKCl7XG5cdFx0XG4gICAgXHRhZGRfbWFya2VyKCAkKHRoaXMpLCBtYXAgKTtcblx0XHRcblx0fSk7XG5cdFxuXHRcblx0Ly8gY2VudGVyIG1hcFxuXHRjZW50ZXJfbWFwKCBtYXAgKTtcblx0XG5cdFxuXHQvLyByZXR1cm5cblx0cmV0dXJuIG1hcDtcblx0XG59XG5cbi8qXG4qICBhZGRfbWFya2VyXG4qXG4qICBUaGlzIGZ1bmN0aW9uIHdpbGwgYWRkIGEgbWFya2VyIHRvIHRoZSBzZWxlY3RlZCBHb29nbGUgTWFwXG4qXG4qICBAdHlwZVx0ZnVuY3Rpb25cbiogIEBkYXRlXHQ4LzExLzIwMTNcbiogIEBzaW5jZVx0NC4zLjBcbipcbiogIEBwYXJhbVx0JG1hcmtlciAoalF1ZXJ5IGVsZW1lbnQpXG4qICBAcGFyYW1cdG1hcCAoR29vZ2xlIE1hcCBvYmplY3QpXG4qICBAcmV0dXJuXHRuL2FcbiovXG5cbmZ1bmN0aW9uIGFkZF9tYXJrZXIoICRtYXJrZXIsIG1hcCApIHtcblxuXHQvLyB2YXJcblx0dmFyIGxhdGxuZyA9IG5ldyBnb29nbGUubWFwcy5MYXRMbmcoICRtYXJrZXIuYXR0cignZGF0YS1sYXQnKSwgJG1hcmtlci5hdHRyKCdkYXRhLWxuZycpICk7XG5cblx0Ly8gY3JlYXRlIG1hcmtlclxuXHR2YXIgbWFya2VyID0gbmV3IGdvb2dsZS5tYXBzLk1hcmtlcih7XG5cdFx0cG9zaXRpb25cdDogbGF0bG5nLFxuXHRcdG1hcFx0XHRcdDogbWFwXG5cdH0pO1xuXG5cdC8vIGFkZCB0byBhcnJheVxuXHRtYXAubWFya2Vycy5wdXNoKCBtYXJrZXIgKTtcblxuXHQvLyBpZiBtYXJrZXIgY29udGFpbnMgSFRNTCwgYWRkIGl0IHRvIGFuIGluZm9XaW5kb3dcblx0aWYoICRtYXJrZXIuaHRtbCgpIClcblx0e1xuXHRcdC8vIGNyZWF0ZSBpbmZvIHdpbmRvd1xuXHRcdHZhciBpbmZvd2luZG93ID0gbmV3IGdvb2dsZS5tYXBzLkluZm9XaW5kb3coe1xuXHRcdFx0Y29udGVudFx0XHQ6ICRtYXJrZXIuaHRtbCgpXG5cdFx0fSk7XG5cblx0XHQvLyBzaG93IGluZm8gd2luZG93IHdoZW4gbWFya2VyIGlzIGNsaWNrZWRcblx0XHRnb29nbGUubWFwcy5ldmVudC5hZGRMaXN0ZW5lcihtYXJrZXIsICdjbGljaycsIGZ1bmN0aW9uKCkge1xuXG5cdFx0XHRpbmZvd2luZG93Lm9wZW4oIG1hcCwgbWFya2VyICk7XG5cblx0XHR9KTtcblx0fVxuXG59XG5cbi8qXG4qICBjZW50ZXJfbWFwXG4qXG4qICBUaGlzIGZ1bmN0aW9uIHdpbGwgY2VudGVyIHRoZSBtYXAsIHNob3dpbmcgYWxsIG1hcmtlcnMgYXR0YWNoZWQgdG8gdGhpcyBtYXBcbipcbiogIEB0eXBlXHRmdW5jdGlvblxuKiAgQGRhdGVcdDgvMTEvMjAxM1xuKiAgQHNpbmNlXHQ0LjMuMFxuKlxuKiAgQHBhcmFtXHRtYXAgKEdvb2dsZSBNYXAgb2JqZWN0KVxuKiAgQHJldHVyblx0bi9hXG4qL1xuXG5mdW5jdGlvbiBjZW50ZXJfbWFwKCBtYXAgKSB7XG5cblx0Ly8gdmFyc1xuXHR2YXIgYm91bmRzID0gbmV3IGdvb2dsZS5tYXBzLkxhdExuZ0JvdW5kcygpO1xuXG5cdC8vIGxvb3AgdGhyb3VnaCBhbGwgbWFya2VycyBhbmQgY3JlYXRlIGJvdW5kc1xuXHQkLmVhY2goIG1hcC5tYXJrZXJzLCBmdW5jdGlvbiggaSwgbWFya2VyICl7XG5cblx0XHR2YXIgbGF0bG5nID0gbmV3IGdvb2dsZS5tYXBzLkxhdExuZyggbWFya2VyLnBvc2l0aW9uLmxhdCgpLCBtYXJrZXIucG9zaXRpb24ubG5nKCkgKTtcblxuXHRcdGJvdW5kcy5leHRlbmQoIGxhdGxuZyApO1xuXG5cdH0pO1xuXG5cdC8vIG9ubHkgMSBtYXJrZXI/XG5cdGlmKCBtYXAubWFya2Vycy5sZW5ndGggPT0gMSApXG5cdHtcblx0XHQvLyBzZXQgY2VudGVyIG9mIG1hcFxuXHQgICAgbWFwLnNldENlbnRlciggYm91bmRzLmdldENlbnRlcigpICk7XG5cdCAgICBtYXAuc2V0Wm9vbSggMTYgKTtcblx0fVxuXHRlbHNlXG5cdHtcblx0XHQvLyBmaXQgdG8gYm91bmRzXG5cdFx0bWFwLmZpdEJvdW5kcyggYm91bmRzICk7XG5cdH1cblxufVxuXG4vKlxuKiAgZG9jdW1lbnQgcmVhZHlcbipcbiogIFRoaXMgZnVuY3Rpb24gd2lsbCByZW5kZXIgZWFjaCBtYXAgd2hlbiB0aGUgZG9jdW1lbnQgaXMgcmVhZHkgKHBhZ2UgaGFzIGxvYWRlZClcbipcbiogIEB0eXBlXHRmdW5jdGlvblxuKiAgQGRhdGVcdDgvMTEvMjAxM1xuKiAgQHNpbmNlXHQ1LjAuMFxuKlxuKiAgQHBhcmFtXHRuL2FcbiogIEByZXR1cm5cdG4vYVxuKi9cbi8vIGdsb2JhbCB2YXJcbnZhciBtYXAgPSBudWxsO1xuXG4kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuXG5cdCQoJy5hY2YtbWFwJykuZWFjaChmdW5jdGlvbigpe1xuXG5cdFx0Ly8gY3JlYXRlIG1hcFxuXHRcdG1hcCA9IG5ld19tYXAoICQodGhpcykgKTtcblxuXHR9KTtcblxufSk7XG5cbn0pKGpRdWVyeSk7XG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9zcmMvYXNzZXRzL2pzL21hcC5qc1xuLy8gbW9kdWxlIGlkID0gNTBcbi8vIG1vZHVsZSBjaHVua3MgPSAzIl0sInNvdXJjZVJvb3QiOiIifQ==