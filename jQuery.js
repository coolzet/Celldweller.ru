
jQuery('.menu_button').on('click', function(e){
				e.preventDefault;
				jQuery('.humb_reg').toggleClass('humb_reg_active');
				jQuery(this).toggleClass('menu_button_active');
				jQuery('.login').toggleClass('login_active');
				$('html, body').animate({

        scrollTop:2 + $('body').height() }, 1000);
			});


function overEffect(classic){

		jQuery(classic).css("background-color","#253568");
};

jQuery('body').mouseenter(function(){
			
	jQuery('.text').addClass("text_hover");
					 
});


	
	

function slowScroll(id, id1, id2, id3, id4, id5) {
				
	jQuery(id1).show(1000, function(){
						
		jQuery(id2).hide(500);
		jQuery(id3).hide(500);
		jQuery(id4).hide(500);
		jQuery(id5).hide(500);
						
	});	
     			
    $('html, body').animate({

        scrollTop:2 + $(id).offset().top }, 500);

};

function hideSomething( id1, id2, id3, id4, id5) {
					
	jQuery(id1).show(1000, function(){
						
	jQuery(id2).hide(500);
	jQuery(id3).hide(500);
	jQuery(id4).hide(500);
	jQuery(id5).hide(500);
						
	});
 };
 function chooseYours(id, hideid, hideid2, for3, for1, under){
 	
 

 	jQuery(id).fadeIn(500);
 	jQuery(for1).fadeOut(500);
 	jQuery(hideid).fadeOut(500);
 	jQuery(hideid2).fadeOut(500);
 	jQuery(for3).fadeOut(500);
 	 $('html, body').animate({

        scrollTop:2 + $(under).offset().top }, 500);

 	
};
  function chooseYourBlog(id, hideid, hideid2, for3, for1){
 	
 

 	jQuery(id).fadeIn(500);
 	jQuery(for1).fadeOut(500);
 	jQuery(hideid).fadeOut(500);
 	jQuery(hideid2).fadeOut(500);
 	jQuery(for3).fadeOut(500);
 	
};

 