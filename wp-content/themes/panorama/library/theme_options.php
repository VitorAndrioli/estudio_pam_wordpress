<?php

function ap_theme_page() {

	global $wpdb;

 ?>

	<script language="javascript"><?php include(TEMPLATEPATH . '/scripts/jscolor/jscolor.js'); ?></script>
	
<div class="wrap">


<?php if ($_REQUEST['saved'] ) echo '<div style="margin:10px 0;" id="message" class="updated fade"><p><strong>'.__('Settings saved','panorama').'</strong></p></div>';
	if ($_REQUEST['reset'] ) echo '<div style="margin:10px 0;" id="message" class="updated fade"><p><strong>'.__('Settings reset','panorama').'</strong></p></div>';
	if ($_REQUEST['error'] ) echo '<div style="margin:10px 0;" id="message" class="error errorfade"><p><strong>'.__('Error - invalid data','panorama').'</strong></p></div>';
	

 ?>


<h2><?php _e('Panorama Theme Options','panorama') ;?></h2>

<p><?php _e('Panorama Theme by <a href="http://themocracy.com/">Themocracy</a>','panorama'); ?></p>

<form name="tcp" method="post">


<table width="100%" cellspacing="2" cellpadding="5" class="form-table">

<?php
	
ap_th(__('Style:','panorama'));

$ap_stylesheetVal =	get_option('ap_stylesheet');
?>	
	<select name="ap_stylesheet">
	<option <?php if($ap_stylesheetVal == '') echo 'selected'; ?> value="">Dark Gray</option>
	<option <?php if($ap_stylesheetVal == 'lightgrey') echo 'selected'; ?> value="lightgrey">Light Gray</option>
	<option <?php if($ap_stylesheetVal == 'blue') echo 'selected'; ?> value="blue">Blue</option>
	<option <?php if($ap_stylesheetVal == 'green') echo 'selected'; ?> value="green">Green</option>
	<option <?php if($ap_stylesheetVal == 'red') echo 'selected'; ?> value="red">Red</option>
	<option <?php if($ap_stylesheetVal == 'purple') echo 'selected'; ?> value="purple">Purple</option>
	</select>
<?php	
ap_cth();
	
	
ap_th(__('Layout:','panorama'));

$ap_valLayout = stripslashes(get_option('ap_layout'));
if (empty($ap_valLayout)) $ap_valLayout = AP_LAYOUT;

echo ap_input( 'ap_layout', 'radio', 'Left Sidebar',  'l', '', $ap_valLayout);
echo ap_input( 'ap_layout', 'radio', 'Right Sidebar',  'r', '', $ap_valLayout);


ap_cth();	

	
	ap_th(__('Link Color:','panorama'));
	
?>
		 <input name="ap_linkColour" type="text" value="<?php echo ap_linkColour(); ?>" class="color {hash:true, pickerMode:'HSV'}" />
	
<?php		
	ap_cth();	
	
	ap_th(__('Hover Color:','panorama'));
		
	?>
	
		 <input name="ap_hoverColour" type="text" value="<?php echo ap_hoverColour(); ?>" class="color {hash:true, pickerMode:'HSV'}" />
		

<?php	
		
	ap_cth();	
	
	ap_th(__('Pages Menu:','panorama'));
		
		$setPageMenuOrder = get_option('ap_pageMenuOrder');
		$pageMenuOrder = !empty($setPageMenuOrder) ? $setPageMenuOrder : 'menu';
		

 ?>
			
		<?php _e('Order by:','panorama'); ?> <select name="ap_pageMenuOrder">
		<option <?php if($setPageMenuOrder == 'alpha') echo 'selected'  ?> value="alpha"><?php _e('Page Title','panorama'); ?></option>
		<option <?php if($setPageMenuOrder == 'menu') echo 'selected'  ?> value="menu"><?php _e('Page Order','panorama'); ?></option>
		<option <?php if($setPageMenuOrder == 'pageid') echo 'selected'  ?> value="pageid"><?php _e('Page ID','panorama'); ?></option>
		</select>
		
		<br />
		<?php
		$valIncludeHome = get_option('ap_includeHome');

		echo ap_input( 'ap_includeHome', 'checkbox', 'Include Home', '', '', $valIncludeHome );
		
		?>
	
		<?php _e('Exclude','panorama'); ?>:<br />
		
<?php 
	$valPagesOmit = (!empty($_REQUEST['ap_pagesOmit'])) ? $_REQUEST['ap_pagesOmit'] :  get_option('ap_pagesOmit');
	
	echo ap_input('ap_pagesOmit', 'text', '', $valPagesOmit ); ?>
		

	<?php 
		
	_e('<br /><small>Page IDs, separated by commas</small>','panorama');
	
	ap_cth();	
	

ap_th(__('Logo:','panorama'));


echo ap_input( 'ap_logoUrl', 'text', '', get_option('ap_logoUrl'));
	_e('<br /><small>Enter the full URL of your custom logo image</small>','panorama');

ap_cth();			

ap_th(__('RSS URL:','panorama'));


echo ap_input( 'ap_rssUrl', 'text', '', ap_rssLink());


ap_cth();



ap_th(__('Twitter Username:','panorama'));

 echo ap_input( 'ap_twitterName', 'text', '', stripslashes(get_option('ap_twitterName')));

ap_cth();	


ap_th(__('Header Image:<br /><small>Any gif, jpg, png image, minimum 980 x 125 pixels, uploaded to <b>/wp-content/themes/panorama/header_images</b> folder.</small>','panorama'));

$valHeaderRotate = get_option('ap_headerRotate');

echo ap_input( 'ap_headerRotate', 'checkbox', 'Randomly rotate images? - or select  one  below:',  '', '', $valHeaderRotate );

echo '<br />';

$ap_files = findImageFile();

if(empty($ap_files)) {
_e('No images found','panorama');
}else{

$count = 0;
$current =  stripslashes(get_option('ap_headerImage'));

print('<table border="0" cellspacing="0" cellpadding="3">');

foreach ($ap_files as $ap_f){

if($ap_f == '.' || $ap_f == '..') continue;

	$pi = pathinfo($ap_f);

	if($pi['extension'] != 'gif' && $pi['extension'] != 'jpg' && $pi['extension'] != 'png') continue; 

	$count++;
	$input = ap_input( 'ap_headerImage', 'radio', $ap_f,  $ap_f, basename($ap_f), $current );

	printf('<tr><td>%s</td><td><label for="%s"><img width="100" height="25" src="%s/header_images/%s" /></label></td></tr>', $input, basename($ap_f), get_bloginfo('template_directory'), $ap_f, $ap_f);


}
print('</table>');

if ($count == 0) _e('No images found','panorama');
}
	
ap_cth();

ap_th(__('Post datestamp format:<br /><small>(see <a href="options-general.php">general settings</a>)</small>','panorama'));

$valDateTimeFormat = get_option('ap_dateTimeFormat');

echo ap_input( 'ap_dateTimeFormat', 'checkbox', 'Add post time to datestamp',  '', '', $valDateTimeFormat );

ap_cth();


?>
</table>


	<p><input class="button-primary" name="save" value="<?php _e('Save Settings',''); ?>" type="submit" /></p>

<input type="hidden" name="action" value="save" />

</form>

<form method="post">

<?php

	echo ap_input('reset', 'submit', '', __('Restore Default Settings','panorama'));
	
?>


<input type="hidden" name="action" value="reset" />

</form>


<?php
}

?>