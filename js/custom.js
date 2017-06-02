/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/* initialize map higlight */
    $(window).load(function () {
        var $map = $('.map');
        if($map.length===0 || $('map').length ===0)
            return;
        var imgSizeHolder = $('#map img.map')[0].naturalWidth;
        $areas = $('map').find('area');
        var initCoords = new Array();
        $areas.each(function(index,area){
           initCoords.push($(area).attr('coords').split(','));
        });
        function scale() {
            $areas.each(function(index, area){
                var coords = initCoords[index].slice();
                $.each(coords,function(index,el){
                    el = el*($map.width()/imgSizeHolder);
                    coords[index] = el;
                });
                $areas.eq(index).attr('coords',coords.join(','));
            });
        }
        scale();
        $(window).on('resize',scale);
		
    });
	function activateMap(){
		$('#map img.map').css("display","block");
	}
	setTimeout(activateMap,14000);
	$('#map area.rollover').hover(function(){
		var $this = $(this);
		var target_class = $this.data('type');
		var $target = $('#map .rollover.'+target_class);
		if($target.attr('data-timeout')!==undefined){
			clearTimeout(Number($target.attr('data-timeout')));
		}
		$target.addClass("active");
	}, function(){
		var $this = $(this);
		var target_class = $this.data('type');
		var $target = $('#map .rollover.'+target_class);
		var timeout = setTimeout(function(){
			$target.removeClass("active");
		},300);
		$target.attr('data-timeout',timeout);
	});
	$('#map .rollover.copy').hover(function(){
		var $this = $(this);
		if($this.attr('data-timeout')!==undefined){
			clearTimeout(Number($this.attr('data-timeout')));
		}
	}, function(){
		var $this = $(this);
		var timeout = setTimeout(function(){
			$this.removeClass("active");
		},300);
		$this.attr('data-timeout',timeout);
	});
	/*animationComplete = false;
	function makeVisible(){
		$('.home .homeprograms >.row-3,.home .homeprograms >.row-1,.home .homeprograms >.row-2 >.col')
		.css('opacity',1);
	}
	function launchProgramsAnimation(){
		function endAnimation(){
			function flashCallback(){
				tl_payment.pause(0);
				tl_payment.clear();
				tl_integration.pause(0);
				tl_integration.clear();
				tl_air.pause(0);
				tl_air.clear();
				tl_lodging.pause(0);
				tl_lodging.clear();
				tl_meetings.pause(0);
				tl_meetings.clear();
				$icons.css({
					position: '',
					top: '',
					left: '',
					transform: '',
					opacity: 0
				});
				$row_2.css({
					height: ''
				});
				$icons.find('.connector').css({
					opacity: ''
				});
			}
			function animationCompleteCallback(){
				animationComplete= true;
			}
			var tl = new TimelineMax({onComplete:animationCompleteCallback});
			tl.to($homeprograms,0.5,{opacity: 0,ease:Power1.easeIn, onComplete:flashCallback},0)
			tl.to($homeprograms,0.5,{opacity: 1,ease:Power1.easeIn},0.5)
			tl.to($row_1,2,{opacity: 1,ease: Power1.easeIn},1);
			tl.to($row_3,2,{opacity: 1,ease: Power1.easeIn},1);
			tl.to($icons,2,{opacity: 1,ease: Power1.easeIn},1);
		}
		var $homeprograms = $('.home .homeprograms');
		var $strategy = $('.home .homeprograms .strategy');
		var $integration = $('.home .homeprograms .integration');
		var $air = $('.home .homeprograms .air');
		var $lodging = $('.home .homeprograms .lodging');
		var $meetings = $('.home .homeprograms .meetings');
		var $payment = $('.home .homeprograms .payment');
		var $management = $('.home .homeprograms .management');
		var $icons = $('.home .homeprograms >.row-2 >.col');
		var $row_1 = $('.home .homeprograms >.row-1');
		var $row_2 = $('.home .homeprograms >.row-2');
		var $row_3 = $('.home .homeprograms >.row-3');
		
		$row_2.css({
			height: $strategy.height()+"px"
		});
		$icons.find('.connector').css({
			opacity: '0'
		});
		$icons.css({
			position: "absolute",
			top: "40%",
			left: "45%",
		});
		$strategy.css({
			left: "34%"
		});
		$management.css({
			left: "51%"
		});
		$integration.css({
			top: "5%",
			left: "10%"
		});
		$air.css({
			top: "70%",
			left: "15%"
		});
		$lodging.css({
			top: "15%",
			left: "75%"
		});
		$meetings.css({
			top: "65%",
			left: "70%"
		});
		$payment.css({
			top: "80%",
			left: "45%"
		});
		var homeprograms_width = $homeprograms.width();
		var homeprograms_height = $homeprograms.height();
		var tl_icons = new TimelineMax();
		tl_icons.to($icons,1,{opacity: 1,ease:Power1.easeOut},0);
		var tl_integration = new TimelineMax({repeat:-1});
		tl_integration.to($integration, 5, {bezier:[{x:homeprograms_width*.40, y:homeprograms_height*.70}, {x:homeprograms_width*.70, y:homeprograms_height*.60}, {x:homeprograms_width*.5, y:homeprograms_height*.2}, {x:"0", y:"0"}], ease:Linear.easeNone},0);
		tl_integration.to($integration, 1.25, {scaleX:1.5,scaleY:1.5, ease:Linear.easeNone},0);
		tl_integration.to($integration, 2.5, {scaleX:0.75,scaleY:0.75, ease:Linear.easeNone, yoyo: true},1.25);
		tl_integration.to($integration, 1.25, {scaleX:1,scaleY:1, ease:Linear.easeNone},3.75);
		tl_integration.seek(2.5);
		
		var tl_air = new TimelineMax({repeat:-1});
		tl_air.to($air, 5, {bezier:[{x:homeprograms_width*.40, y:-homeprograms_height*.40}, {x:homeprograms_width*.50, y:-homeprograms_height*.6}, {x:homeprograms_width*.4, y:-homeprograms_height*.6}, {x:"0", y:"0"}], ease:Linear.easeNone},0);
		tl_air.to($air, 1.25, {scaleX:1.5,scaleY:1.5, ease:Linear.easeNone},0);
		tl_air.to($air, 2.5, {scaleX:0.75,scaleY:0.75, ease:Linear.easeNone, yoyo: true},1.25);
		tl_air.to($air, 1.25, {scaleX:1,scaleY:1, ease:Linear.easeNone},3.75);
		tl_air.seek(2.5);

		var tl_lodging = new TimelineMax({repeat:-1});
		tl_lodging.to($lodging, 5, {bezier:[{x:-homeprograms_width*.60, y:homeprograms_height*.05}, {x:-homeprograms_width*.70, y:homeprograms_height*.30}, {x:-homeprograms_width*.5, y:homeprograms_height*.40}, {x:"0", y:"0"}], ease:Linear.easeNone},0);
		tl_lodging.to($lodging, 1.25, {scaleX:1.5,scaleY:1.5, ease:Linear.easeNone},0);
		tl_lodging.to($lodging, 2.5, {scaleX:0.75,scaleY:0.75, ease:Linear.easeNone, yoyo: true},1.25);
		tl_lodging.to($lodging, 1.25, {scaleX:1,scaleY:1, ease:Linear.easeNone},3.75);
		tl_lodging.seek(4);

		var tl_meetings = new TimelineMax({repeat:-1});
		tl_meetings.to($meetings, 5, {bezier:[{x:-homeprograms_width*.40, y:-homeprograms_height*.60}, {x:-homeprograms_width*.60, y:-homeprograms_height*.50}, {x:-homeprograms_width*.5, y:-homeprograms_height*.2}, {x:"0", y:"0"}], ease:Linear.easeNone},0);
		tl_meetings.to($meetings, 1.25, {scaleX:1.5,scaleY:1.5, ease:Linear.easeNone},0);
		tl_meetings.to($meetings, 2.5, {scaleX:0.75,scaleY:0.75, ease:Linear.easeNone, yoyo: true},1.25);
		tl_meetings.to($meetings, 1.25, {scaleX:1,scaleY:1, ease:Linear.easeNone},3.75);
		tl_meetings.seek(3);

		var tl_payment = new TimelineMax({repeat:-1});
		tl_payment.to($payment, 5, {bezier:[{x:homeprograms_width*.1, y:-homeprograms_height*.40}, {x:"0", y:-homeprograms_height*.80}, {x:-homeprograms_width*.1, y:-homeprograms_height*.5}, {x:"0", y:"0"}], ease:Linear.easeNone},0);
		tl_payment.to($payment, 1.25, {scaleX:1.5,scaleY:1.5, ease:Linear.easeNone},0);
		tl_payment.to($payment, 2.5, {scaleX:0.75,scaleY:0.75, ease:Linear.easeNone, yoyo: true},1.25);
		tl_payment.to($payment, 1.25, {scaleX:1,scaleY:1, ease:Linear.easeNone},3.75);
		
		setTimeout(endAnimation,10000);
	}
	function checkProgramAnimationStart(){
		var $window = $(window);
		if(window.innerWidth<600){
			makeVisible();
			return;
		}
		setTimeout(launchProgramsAnimation,1000);
	}

	$('.home .homeprograms >.row-2 >.col').hover(function(){
		if(animationComplete){
			$(this).find('.copy').css({
				display: 'block',
			});
		}
	},function(){
		if(animationComplete){
			$(this).find('.copy').css({
				display: ''
			});
		}
	});*/

	$('.homefeed').hover(function(){
		if(window.innerWidth>=960){
			var $this = $(this);
			$this.css({
				height: $this.height()+"px"
			});
		}
	}, function(){
		if(window.innerWidth>=960){
			var $this = $(this);
			setTimeout(function(){
				$this.css({
					height: ""
				});
			},201);
		}
	});
	$('.homefeed .col').hover(function(){
		if(window.innerWidth>=960){
			var $this = $(this);
			var $homefeed = $('.homefeed');
			var $content = $this.find('.outer-wrapper .inner-wrapper .content');
			
			$content.css({
				display: 'block',
				opacity: 0,
			});
			$content.animate({
				opacity: 1
			},200);
			$this.animate({
				top: ($content.height()*-1-20)+"px"
			},200, function(){
				$this.css({
					boxShadow: "0px 1px 5px 2px darkgrey"
				});
			});
		}
	},function(){
		if(window.innerWidth>=960){
			var $this = $(this);
			var $homefeed = $('.homefeed');
			var $content = $this.find('.outer-wrapper .inner-wrapper .content');
			$content.animate({
				opacity: 0
			},200, function(){
				$content.css({
					display: '',
					opacity: '',
				});
			});
			$this.animate({
				top: 0
			},200, function(){
				$this.css({
					boxShadow: ""
				});
			});
		}
	});








	$("[href]").each(function() {
    			if (this.href == window.location.href) {
        	$(this).addClass("active");
        	}
    		});
    /*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 0
			}
 		 });
	});
	setTimeout(function(){
		$('.home .flexslider').imagesLoaded(function(){
			$('.home .flexslider').flexslider({
				animation: "slide",
				smoothHeight: true,
				slideshowSpeed: 5000,
				start: function(){
			//		checkProgramAnimationStart();
				}
			}); // end register flexslider
		});
	},17000);
    /*
     *
     *	Flexslider
     *
     ------------------------------------*/
    if($('body.home').length === 0){
		$('.flexslider').imagesLoaded(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				smoothHeight: true,
				slideshowSpeed: 5000,
				start: function(){
			//		checkProgramAnimationStart();
				}
			}); // end register flexslider
		});
	}


// Equal heights divs
  $('.blocks').matchHeight();


// Or with active nav toggles

// Top Level Toggles
/*
		FAQ dropdowns
__________________________________________
*/

$('.question').click(function() {
	$(this).next('.answer').slideToggle(500);
    $(this).find('.question-image').toggleClass('close');

});


$(".myLink").bind("click", function() {
 $(".myDiv").hide();
 // deactivate the active class for the bubble
 $(".myLink").removeClass('active');
 var divId= $(this).attr("divId");
 $("#" + divId).show();
 // activate the active class for the bubble
 $(this).addClass('active');
});
// hide if you come from another page.
$(function() {
    if ( document.location.href.indexOf('#office-na') > -1 ) {
       $(".myDiv").hide();
	    $("#north-america").show();
		 $('li a.north-america').addClass('active');
    }
});
$(function() {
    if ( document.location.href.indexOf('#office-emea') > -1 ) {
       $(".myDiv").hide();
	    $("#emea").show();
		$('li a.emea').addClass('active');
    }
});
$(function() {
    if ( document.location.href.indexOf('#office-apac') > -1 ) {
       $(".myDiv").hide();
	    $("#apac").show();
		$('li a.apac').addClass('active');
    }
});
$(function() {
    if ( document.location.href.indexOf('#office-latam') > -1 ) {
       $(".myDiv").hide();
	    $("#latam").show();
		$('li a.latam').addClass('active');
    }
});



});// END #####################################    END