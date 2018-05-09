import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();



$(".features.menu-item, #nav_menu-3").hover(function () {
    $('#nav_menu-3').toggleClass("active");
});

$(".company.menu-item, #nav_menu-2").hover(function () {
    $('#nav_menu-2').toggleClass("active");
});

$(".resources.menu-item, #nav_menu-4").hover(function () {
    $('#nav_menu-4').toggleClass("active");
});

$('#menu-mobile .menu-item-has-children').click(function(event) {
$(this).children(".sub-menu").slideToggle();
        return false;
    });

function copyDiv(){
  var firstDivContent = document.querySelector('.is-active .title-one');
  var secondDivContent = document.querySelector('.title-two');
  secondDivContent.innerHTML = firstDivContent.innerHTML;
}

$(document).ready(function(){

    $(".burger a").click(function(){
        $(".menu-overlay").fadeToggle(200);
        $('body').toggleClass("stop");
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});

$('.menu-overlay').on('click', function(){
    $(".menu-overlay").fadeToggle(200);   
    $(".burger a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});

jQuery(function($){
	Foundation.addToJquery($);
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
				$(document).foundation();
				
			}
		});
		return false;
	});
});

jQuery(function($){
	Foundation.addToJquery($);
    $("#sel").change(function () {
        $("#filter").submit();
    });

});

jQuery(function($){
	Foundation.addToJquery($);
	$('#recent').submit(function(){
		var filter = $('#recent');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Most viewed'); // changing the button label back
				$('#response').html(data); // insert data
				$(document).foundation(); 
			}
		});
		return false;
	});

});



jQuery(function($){
	Foundation.addToJquery($);
	$('#filter-resource').submit(function(){
		var filter = $('#filter-resource');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Recent'); // changing the button label back
				$('#response').html(data); // insert data
				$(document).foundation(); 
			}
		});
		return false;
	});

});

var Packery=require('packery');
var elem = document.querySelector('.main-content');
var pckry = new Packery( elem, {
  // options
		transitionDuration: 0,
		gutter: '.gutter-sizer',
		percentPosition: true,
		itemSelector: '.grid-item'
});


jQuery(function($){

	Foundation.addToJquery($);
	$('#category-menu li').click(function(){
		var termname = $(this).data('slug');
		var filter = $('#category-menu');
	    $("#category-menu li.current").removeClass("current");
	    $(this).addClass("current"); //adds class current to the category menu item being displayed so you can style it with class
	    $.ajax({
	        type: 'POST',
	       	url: misha_loadmore_params.ajaxurl,
	        data: {
                action: 'ajax_pagination',
                termname: termname
            },
            success: function( html ) {
             
                $(document).foundation();  	var Packery=require('packery');
         var $container = $('#category-post-content').packery();
  var $html = $( html );
  $container.append( $html );
  $container.packery( 'appended', $html );
        	
                //here will do stuf
            }, 
	    });
		return false;
	});
});




