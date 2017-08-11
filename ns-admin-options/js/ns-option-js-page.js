jQuery( document ).ready(function() {

// When the user clicks on <span> (x), close the modal
jQuery(".close").click(function() {
    jQuery("#viewcart_modal").hide();
});

jQuery("#cartlink-modal").click(function(){
       jQuery("#viewcart_modal").show();
    });

});