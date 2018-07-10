$(document).ready(function(){
	alert("Hello! I am an alert box!!");
    $(".burger a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".burger a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});

