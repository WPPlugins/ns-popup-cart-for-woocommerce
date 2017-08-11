<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php settings_fields('ns_view_cart_popup_options_group'); ?>
<div class="genRowNssdc">
<table class="form-table adjTblNs">
	<tr valign="top">
	<th scope="row">
		<label>Plugin's fast tutorial</label>
		<hr>
	</th>
	</tr>
	<tr valign="top">
		<td colspan="2">
			<span style="font-size: 13px">
				<p>For use this plugin :</p>
				 <p>
		                            - create if not exist a new menu<br>
		                            - set it as <span style="font-weight: bold;">primary menu</span> and <span style="font-weight: bold;">primary mobile menu</span> (if the theme allows it)<br>
		                            - activate the plugin<br>
		                            - set the text label of new link/modal title created by plugin
		        </p>                   
			</span>
		</td>
	</tr>
	<tr valign="top">
	    <th scope="row" colspan="2">
		    <br>
		    <label>General Settings</label>
		    <hr>
	    </th>
	</tr>

	<tr valign="top">
	    <th scope="row">
	   		 <label>Link label/Modal title</label>
	    </th>
	    <td>
			<input type="text" id="ns_view_cart_popup_title" placeholder="Alternative name " name="ns_view_cart_popup_title" value ="<?php echo get_option('ns_view_cart_popup_title', ''); ?>">
			<span class="description">Insert the text to apply on new menu item/modal title</span>
		</td>
	</tr>
</table>
</div>


