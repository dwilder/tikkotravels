$(document).ready(function() {
	'use strict';
	
	$('.tile-scroll .tile-overlay').each(function() {
		var slab = $(this);
		var slabTile = slab.parent();
		
    	slab
        	.addClass('collapsed')
        	.css({
        		"top" : "260px",
        		"bottom" : "auto"
        	});
		slabTile.hover(
			function() {
				slab
                    .stop().animate({
                        "top" : 0,
                        "bottom" : "auto"
                    });
			}, function() {
                slab
                    .stop().animate({
        	            "top" : "100%",
 						"bottom" : "auto"
                	});
            }
		);
	});

});