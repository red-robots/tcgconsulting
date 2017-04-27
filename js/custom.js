/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	$("[href]").each(function() {
    			if (this.href == window.location.href) {
        	$(this).addClass("active");
        	}
    		});
	
	
// Equal heights divs
  $('.blocks').matchHeight();
	
	
	
	
$('.main-navigation li.program-strategy').hover(
function(){
	$('.banner').hide();
	$('#program-strategy').show();
}, 
function(){
  $('.banner').hide();
	$('#default').show();
});

$('.main-navigation li.sourcing').hover(
function(){
  	$('.banner').hide();
	$('#sourcing').show();
}, 
function(){
  $('.banner').hide();
	$('#default').show();
});

$('.main-navigation li.program-management').hover(
function(){
  	$('.banner').hide();
	$('#program-management').show();
}, 
function(){
  $('.banner').hide();
	$('#default').show();
});

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