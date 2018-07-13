import $ from 'jquery';
import whatInput from 'what-input';
import 'lazysizes/plugins/respimg/ls.respimg';
import bgset from 'lazysizes/plugins/bgset/ls.bgset.min'; // Used for backgrounds.
import lazySizes from 'lazysizes';
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


$(document).ready(function(){
	$('.numbers').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});
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



// jQuery(function($){
// 	Foundation.addToJquery($);
// 	$('#filter-resource').submit(function(){
// 		var filter = $('#filter-resource');
// 		$.ajax({
// 			url:filter.attr('action'),
// 			data:filter.serialize(), // form data
// 			type:filter.attr('method'), // POST
// 			beforeSend:function(xhr){
// 				filter.find('button').text('Processing...'); // changing the button label
// 			},
// 			success:function(data){
// 				filter.find('button').text('Recent'); // changing the button label back
// 				$('#response').html(data); // insert data
// 				$(document).foundation(); 
// 			}
// 		});
// 		return false;
// 	});

// });


jQuery(function($){
$(document).on('replace', 'img', function (e, new_path, original_path) {
  console.log(e.currentTarget, new_path, original_path);
});
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

					$("#category-post-content").fadeOut(100, function() {
					  $("#category-post-content").html(html); 
					  $("#category-post-content").fadeIn(300);
					  $(document).foundation(); 
					});
			
			
                //here will do stuf
            }, 
	    });
		return false;
	});
});

lazySizes.init();

window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.customMedia = {
    '--small': '(max-width: 480px)',
    '--medium': '(max-width: 700px)',
    '--large': '(max-width: 991px)',
    '--xlarge': '(min-width: 992px)'
};


