jQuery( document ).ready(function() {

// When the user clicks on <span> (x), close the modal
jQuery(".close").click(function() {
    jQuery("#viewcart_modal").slideUp(300);
});

if (jQuery(window).width() < 480) {
	    jQuery(document).on("click tochstart","#cartlink-modal", function() {
	    jQuery("#viewcart_modal").show();
 });
}
else {
jQuery("#cartlink-modal").click(function(){
	 jQuery("#viewcart_modal").show();
    });
  }
});