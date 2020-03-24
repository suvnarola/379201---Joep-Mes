jQuery(document).ready(function(){

	/*single product page*/
	jQuery('.ingredients-cls').click(function(){ 
	    if(jQuery('.accordion-item .accordion-title').hasClass('active')){ 
	    	jQuery('.accordion-item .accordion-title').find('span').text('Verberg alle ingredienten'); 
	    }else { 
	    	jQuery('.accordion-item .accordion-title').find('span').text('Toon alle ingredienten'); 
	    }
	});

	jQuery('.product-link').each(function(){
		
		jQuery(this).siblings('.product-small').children('.box-image').append(jQuery(this));
	});
});