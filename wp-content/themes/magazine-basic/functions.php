<?php
// Set up Magazine Basic information
$bavotasan_theme_data = get_theme_data(TEMPLATEPATH.'/style.css');
define('THEME_NAME', $bavotasan_theme_data['Name']);
define('THEME_AUTHOR', $bavotasan_theme_data['AuthorName']);
define('THEME_HOMEPAGE', $bavotasan_theme_data['URI']);
define('THEME_VERSION', trim($bavotasan_theme_data['Version']));
define('THEME_URL', get_template_directory_uri());
define('THEME_FILE', "magazine-basic");

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain(THEME_FILE, TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );
	
$pbt_options = array (
	array(	"name" => __("Site Width", "magazine-basic"),
			"desc" => __("Select the width of your site.", "magazine-basic"),
			"id" => "site_width",
			"default" => "800"),
	
	array(  "name" => __("First Sidebar Width", "magazine-basic"),
			"desc" => __("What would you like your first sidebar width to be?", "magazine-basic"),
            "id" => "sidebar_width1",
			"default" => "180"),
			
	array(  "name" => __("Second Sidebar Width", "magazine-basic"),
			"desc" => __("What would you like your second sidebar width to be?", "magazine-basic"),
            "id" => "sidebar_width2",
			"default" => "180"),

	array(  "name" => __("Sidebar Location", "magazine-basic"),
			"desc" => __("Where would you like your sidebars located?", "magazine-basic"),
            "id" => "sidebar_location",
			"default" => "5"),

	array(  "name" => __("Header Logo", "magazine-basic"),
			"desc" => __("If you would like to display a logo in the header, please enter the file URL path (link to).", "magazine-basic"),
            "id" => "logo_header"),	
			
	array(  "name" => __("Logo or Blog Name Location", "magazine-basic"),
			"desc" => __("Where do you want your Logo or Blog Name located?", "magazine-basic"),
            "id" => "logo_location",
			"default" => "fl"),	
			
	array(  "name" => __("Tag Line", "magazine-basic"),
			"desc" => __("Would you like to display a tag line beneath your blog name/logo?", "magazine-basic"),
            "id" => "tag_line",
			"default" => "1"),			
			
	array(  "name" => __("User Login", "magazine-basic"),
			"desc" => __("Would you like to have a User Login section at the top of your site?", "magazine-basic"),
            "id" => "user_login",
			"default" => "1"),

	array(  "name" => __("Post Layout", "magazine-basic"),
			"desc" => __("How would you like your posts displayed on the front page?", "magazine-basic"),
            "id" => "post_layout",
			"default" => "3"),

	array(  "name" => __("Display Dates", "magazine-basic"),
			"desc" => __("Would you like to have dates displayed under your post titles?", "magazine-basic"),
            "id" => "dates_cats",
			"default" => "on"),

	array(  "id" => "dates_posts",
			"default" => "on"),
			
	array(  "name" => __("Display Authors", "magazine-basic"),
			"desc" => __("Would you like to have the author displayed under your post titles?", "magazine-basic"),
            "id" => "authors_cats",
			"default" => "on"),

	array(  "id" => "authors_posts",
			"default" => "on"),			

	array(  "name" => __("Number of Posts", "magazine-basic"),
			"desc" => __("How many posts would you like to appear on the front page?", "magazine-basic"),
            "id" => "number_posts",
			"default" => "6"),

	array(  "name" => __("Excerpt or Content", "magazine-basic"),
			"desc" => __("Do want to display the excerpt or the content on the front page?", "magazine-basic"),
            "id" => "excerpt_content",
			"default" => 1),

	array(  "name" => __("Excerpt Word Limit", "magazine-basic"),
			"desc" => __("How many words do you want to appear in your front page post excerpts?", "magazine-basic"),           
			"id" => "excerpt_one",
			"default" => "55"),

	array(  "id" => "excerpt_two",
			"default" => "45"),
	array(  "id" => "excerpt_three",
			"default" => "30"),
			
	array(  "name" => __("SEO", "magazine-basic"),
			"desc" => __("Turn this off if you are using an SEO plugin", "magazine-basic"),
            "id" => "seo",
 			"default" => "1"),			

	array(  "name" => __("Site Description", "magazine-basic"),
			"desc" => __("Add meta tag description (Excerpt used on single posts and pages)", "magazine-basic"),
            "id" => "site_description"),

	array(  "name" => __("Keywords", "magazine-basic"),
			"desc" => __("Add meta tag keywords, separate by comma (Tags are used on single posts)", "magazine-basic"),
            "id" => "keywords"),
				
	array(  "name" => __("Google Analytics", "magazine-basic"),
			"desc" => __("Add your Google Analytics code", "magazine-basic"),
            "id" => "google_analytics"),
			
	array(  "id" => "header_ad",
			"default" => ""),
	
	array(  "name" => __("Header Ad", "magazine-basic"),
			"desc" => __("Add your 468 x 60 header ad image and link here.", "magazine-basic"),
            "id" => "headerad_img"),			

	array(  "id" => "headerad_link"),
	
	array(  "name" => __('Display "Latest Story"', "magazine-basic"),
			"desc" => __('Would you like to display the "Latest Story" header on the front page?', "magazine-basic"),
            "id" => "latest_story",
			"default" => "on"),
			
	array(  "name" => __("Display Dates", "magazine-basic"),
			"desc" => __("Would you like to have dates displayed under your post titles?", "magazine-basic"),
			"id" => "dates_index",
			"default" => "on"),																

	array(  "name" => __("Display Authors", "magazine-basic"),
			"desc" => __("Would you like to have author displayed under your post titles?", "magazine-basic"),
			"id" => "authors_index",
			"default" => "on"),

	array(  "name" => __("Custom Background", "magazine-basic"),
			"desc" => __("Set up a custom background", "magazine-basic"),
			"id" => "custom_background"),
			
	array(  "name" => __("Custom Nav Menus", "magazine-basic"),
			"desc" => __("Set up a custom navigation menu", "magazine-basic"),
			"id" => "custom_menus"),
			
	array(  "name" => __("Custom Widgets", "magazine-basic"),
			"desc" => __("Add widgets to your sidebars", "magazine-basic"),
			"id" => "custom_widgets")						
);

// setting up the $pbt_values variable
$pbt_values = get_option(THEME_FILE);
//delete_option(THEME_FILE);

function get_index($array, $index) {
  return isset($array[$index]) ? $array[$index] : null;
}

// CALL THEME OPTIONIS
function theme_option($var) {
	global $pbt_values;
	$val = get_index($pbt_values,$var);
	return $val;
}

// Set all default options
if(!$pbt_values) {
	foreach ($pbt_options as $default) {
		if(isset($default['id']) && isset($default['default'])) {
			$setdefaultvalues1[ $default['id'] ] = $default['default'];
		}
	}
	update_option(THEME_FILE, $setdefaultvalues1);
}

// Setting up the theme options CSS
$pbt_values = get_option(THEME_FILE);
if($pbt_values['site_width']) {
	$pbt_site = $pbt_values['site_width'];
	$pbt_sidebar = $pbt_values['sidebar_width1'];	
	$pbt_secondsidebar =  $pbt_values['sidebar_width2'];
	$pbt_sidewidget = $pbt_sidebar - 20;
	$pbt_sidewidget2 = $pbt_secondsidebar - 20;
	if(empty($pbt_secondsidebar)) {
		$pbt_content =  $pbt_site - $pbt_sidebar - 65;
	} else {
		$pbt_content =  $pbt_site - $pbt_sidebar - $pbt_secondsidebar - 88;		
	}
	update_option('pbt_content_width', $pbt_content);
} else {
	$pbt_site = 800;
	$pbt_sidebar = 180;
	$pbt_sidewidget = 160;
	$pbt_content = 560;
}

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = $pbt_content;

function pbt_header_css() {
	global $pbt_site, $pbt_sidebar, $pbt_secondsidebar, $pbt_sidewidget, $pbt_sidewidget2, $pbt_content;
?>
<style type="text/css">
body { width: <?php echo $pbt_site; ?>px; }
#mainwrapper { width: <?php echo $pbt_site-20; ?>px; }
#sidebar { width: <?php echo $pbt_sidebar; ?>px; }
#sidebar .side-widget { width: <?php echo $pbt_sidewidget; ?>px; }
<?php if(!empty($pbt_secondsidebar)) { ?>
#secondsidebar { width: <?php echo $pbt_secondsidebar; ?>px; }
#secondsidebar .side-widget { width: <?php echo $pbt_sidewidget2; ?>px; }
<?php } ?>
#leftcontent, #twocol, #threecol, #threecol2, .commentlist { width: <?php echo $pbt_content; ?>px; }
#leftcontent img, .wp-caption { max-width: <?php echo $pbt_content; ?>px; }
#leftcontent .wp-caption img, #leftcontent .gallery-thumb img { max-width: <?php echo $pbt_content-12; ?>px; }
<!-- fix for IE & Safari -->
.threepost embed { width: <?php echo ($pbt_content*.29); ?>px !important; }
.twopost embed { width: <?php echo ($pbt_content*.46); ?>px !important; }
<!-- end fix for Safari -->
</style>
	<?php
}

// Ajax save function
function save_theme_callback() {
	global $wpdb; // this is how you get access to the database

	$savevalues = array();
	
	$items = explode("&", $_POST['option']);

	foreach ($items as $value) {
		$key_value = explode("=",$value);
		$key = urldecode($key_value[0]);
		$value = urldecode($key_value[1]);
		$savevalues[ $key ] = $value; 
	}
	update_option(THEME_FILE, $savevalues);
	die();
}
add_action('wp_ajax_save_theme_options', 'save_theme_callback');

function mytheme_add_admin() {
	wp_register_script('effects_js', THEME_URL.'/admin/js/effects.js', array( 'jquery' , 'jquery-ui-core' , 'jquery-ui-tabs' ),'',true);
	
	$themelayout = add_theme_page( THEME_FILE, THEME_NAME, 'manage_options', THEME_FILE, 'pbt_options');
	add_action( "admin_print_scripts-$themelayout", 'pbt_admin_css' );
}
// initialize the theme
add_action('admin_menu', 'mytheme_add_admin'); 

// load the js and css on theme options page
function pbt_admin_css() {
	echo '<link rel="stylesheet" href="'.THEME_URL.'/admin/css/admin-style.css" />'."\n";
	wp_enqueue_script('effects_js');
}

// Setting up the layout options page tabs
function pbt_options() { 
    global $pbt_options;
?>
<div id="arturowrap" class="wrap">
    <h2><?php echo THEME_NAME." ".__("Layout Options", "magazine-basic"); ?></h2>
    <?php echo '<div id="message" class="updated fade" style="display: none;"><p><strong>'.THEME_NAME.' '.__("Options Saved", "magazine-basic").'</strong></p></div>'."\n"; ?>
    <div id="poststuff" class="metabox-holder has-right-sidebar">
        <div id="side-info-column" class="inner-sidebar thinner">
            <a href="http://themes.bavotasan.com" target="_blank"><img src="<?php echo THEME_URL; ?>/admin/images/brand.png" class="bavota" alt="Themes by bavotasan.com" width="225" height="84" /></a>
            <a href="javascript:{}" id="savetheme"></a><div class="ajaxsave"></div>
            <br class="clear" />
            <div class="postbox thinner" id="themeresources">
            	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php _e("Resources", "magazine-basic"); ?></span></h3>
                <div class="inside">
                    <ul>
                        <li><a href="http://themes.bavotasan.com" target="_blank" title="Themes by bavotasan.com">Themes by bavotasan.com</a></li>
                        <li><a href="http://themes.bavotasan.com/support/" target="_blank" title="<?php _e('Support Forum', "magazine-basic"); ?>"><?php _e('Support Forum', "magazine-basic"); ?></a></li>
                        <li><a href="http://themes.bavotasan.com/affiliates" target="_blank" title="<?php _e('Affiliates Program', "magazine-basic"); ?>"><?php _e('Affiliates Program', "magazine-basic"); ?></a></li>
                        <li><a href="http://bavotasan.com" title="bavotasan.com" target="_blank">bavotasan.com</a></li>
                    </ul>
 
                </div>
            </div>                    
			<br class="clear" />
            <div class="postbox thinner" id="themeresources">
            	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php _e("Donate", "magazine-basic"); ?></span></h3>
                <div class="inside">
                    <p class="donate"><?php printf(__("A lot of hard work went into creating %s. If you would like to show your support, please use the donate link below.", "magazine-basic"), "<strong>".THEME_NAME."</strong>"); ?><p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="5745952">
                <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>    
                </div>
            </div>
        </div> <!-- end of #side-info-column -->
    <form method="post" action="" id="themeform" class="themesbybavotasan">
        <div id="post-body" class="has-sidebar">
            <div id="post-body-content" class="has-sidebar-content thinmain">
                <div id='normal-sortables' class='meta-box-sortables'>
                    <div id="wrapper" class="arturo">
                        <div id="tabbed">
                        <ul class="tabs">
						<?php
                        $menuPages = array(
							__('Info', "magazine-basic") =>'pbt_info', 
							__('Main', "magazine-basic") =>'pbt_layout_options', 
							__('Header &amp; Footer', "magazine-basic") =>'pbt_header_options', 
							__('Front Page', "magazine-basic") =>'pbt_frontpage_options', 
							__('Sidebars', "magazine-basic") =>'pbt_sidebars_options', 
							__('SEO', "magazine-basic") =>'pbt_seo_options',
							__('Upgrade', "magazine-basic") =>'pbt_upgrade'
						);
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<li><a href="#tabbed-'.$x.'">'.$menuPage.'</a></li>';
                            $x++;
                        }
                        ?>
                        </ul>
                        <?php
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<div class="tab-content" id="tabbed-'.$x.'">';
                            if($x>1 && $x<7) echo '<p class="openclose"><a href="#" class="openall">'.__("Open All", "magazine-basic").' [+]</a><a href="#" class="closeall">'.__("Close All", "magazine-basic").' [-]</a></p>';
                            $pagefunction();
                            echo '</div>';
                            $x++;
                        }	
                        ?>
                        </div>
                    </div> <!-- end of #wrapper -->
        		</div> <!-- end of #normal-sortables -->
        	</div> <!-- end of #post-body-content -->
        </div> <!-- end of #post-body -->
    </div> <!-- end of #poststuff -->
    </form>
</div> <!-- end of #wrap -->
<?php
}

////////////////////////
//
// Default input boxes
//
///////////////////////


// TEXTAREA
function textAreaBox($rows = 4, $valueName, $valueDesc, $valueID) {
?>
<div class="postbox">
	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
	<div class="inside">
		<textarea name="<?php echo $valueID; ?>" cols="60" rows="<?php echo $rows; ?>"><?php echo stripslashes(theme_option($valueID)); ?></textarea>
		<br class="clear" />
	</div>
</div>
<?php
}

// INPUT TEXT
function textBox($size = 50, $valueName, $valueDesc, $valueID, $label = null, $maxlength = null, $align = null, $color = false) {
?>
<div class="postbox">
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small><?php if($valueDesc) echo " - ".$valueDesc; ?></small></h3>
    <div class="inside">
        <input type="text" name="<?php echo $valueID; ?>" size="<?php echo $size; ?>"<?php if($maxlength) echo ' maxlength="'.$maxlength.'"'; ?><?php if($align) echo ' class="'.$align.'"'; ?> value="<?php echo theme_option($valueID); ?>" /><?php if($label) echo '<label style="margin: 9px 0 0 5px;">'.$label.'</label>'; ?>
    <br class="clear" />
    </div>
</div>
<?php
}

// RADIO BUTTON
function radioBox($numof = 2, $valueName, $valueDesc, $valueID, $labels = null, $defaults = null) {
	if(!$labels) $labels = array( __('Yes', "magazine-basic"), __('No', "magazine-basic") );
	if(!$defaults) $defaults = array(1,2);
?>
<div class="postbox">
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
    <div class="inside">
	<?php 
	$i = 0;
    for($x=1;$x<=$numof;$x++) {
		echo '<input  name="'.$valueID.'" type="radio" value="'.$defaults[$i].'"';
		if(theme_option($valueID) == $defaults[$i]) { echo " checked=\"checked\""; }
        echo ' />&nbsp;<label>'.$labels[$i].'</label>&nbsp;&nbsp;';
    	$i++;
    }
    ?>
    <br class="clear" />
    </div>
</div>
<?php
}

#####################
##  the info page  ##
#####################

function pbt_info() { 
?>
    <img src="<?php echo THEME_URL; ?>/screenshot.png" alt="<?php echo THEME_NAME; ?>" class="theme" width="200" height="150" />
    <?php
    echo '<p><ul>
		<li><strong>'.__('Version', "magazine-basic").':</strong> '.THEME_VERSION.'</li>
		<li><strong>'.__('Author', "magazine-basic").':</strong> <a href="http://bavotasan.com/" target="_blank">'.THEME_AUTHOR.'</a></li>
		<li><strong>'.__('Built by', "magazine-basic").':</strong> <a href="http://themes.bavotasan.com/" target="_blank">Themes by bavotasan.com</a></li>
		<li><strong>'.__('Theme home page', "magazine-basic").':</strong> <a href="'.THEME_HOMEPAGE.'" target="_blank">'.THEME_NAME.'</a></li>
	</ul></p>'; 
    echo '<p>';
	printf(__("Thank you for downloading %s. Hope you enjoy using it!</p>", "magazine-basic"), '<strong>'.THEME_NAME.'</strong>');
	echo '</p><p>';
	_e("There are tons of layout possibilities available with this theme, as well as a bunch of cool features that will surely help you get your site looking and working it's best.", "magazine-basic");
	echo '</p>';
    echo '<p><a href="http://themes.bavotasan.com/support/discussion/17/how-to-customize-a-theme/" target="_blank">'; _e('How to Customize a Theme', "magazine-basic");
	echo '</a><br />';
    echo '<a href="http://themes.bavotasan.com/manual/" target="_blank">'; _e('Instruction Manual', "magazine-basic");
	echo '</a></p>';	
	echo '<p>';
    _e('If you have any questions, comments, or if you encounter a bug, please visit our <a href="http://support.bavotasan.com/" target="_blank">Support Forum</a> and let us know.', "magazine-basic"); 
	echo '</p>';
}

########################
##  the upgrade page  ##
########################

function pbt_upgrade() {
   echo '<div class="upgrade">
   <div class="imgbox"><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank" title="Magazine Premium" class="img-wrap"><img
width="250" height="160" src="'.THEME_URL.'/admin/images/magpre.jpg" class="attachment-category wp-post-image" alt="" /></a>
<a href="http://demos.bavotasan.com/magazine-premium/" target="_blank" class="link" title="View Demo">';
	_e('View Demo', "magazine-basic");
	echo '</a><a href="https://www.e-junkie.com/ecom/gb.php?i=wpt-map&amp;c=single&amp;cl=93121" target="ejejcsingle" class="link buy">';
	_e('Buy Now', "magazine-basic");
	echo '</a><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank" class="link" title="More Info">';
	_e('More Info', "magazine-basic");
	echo '</a>
</div>
<h4>Magazine Premium</h4>';

printf(__('Purchase %s for only $39.97 and get all these amazing features and more:', "magazine-basic"), '<a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank"><strong>Magazine Premium</strong></a>');
	echo '<ul>';
	echo '<li>'.__('Custom CSS editor', "magazine-basic").'</li>';
	echo '<li>'.__('10 @font-face kits', "magazine-basic").'</li>';
	echo '<li>'.__('Color options', "magazine-basic").'</li>';
	echo '<li>'.__('Featured post slideshow', "magazine-basic").'</li>';
	echo '<li>'.__('Category feeds to front page sections', "magazine-basic").'</li>';
	echo '<li>'.__('Extended widgetized footer', "magazine-basic").'</li>';
	echo '<li>'.__('Javascript enabled ad space', "magazine-basic").'</li>';
	echo '</ul>';
	echo '</div>'; 
   echo '<div class="upgrade">
<div class="imgbox"><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/" target="_blank" title="Magazine Flow" class="img-wrap"><img
width="250" height="160" src="'.THEME_URL.'/admin/images/magflow.jpg" class="attachment-category wp-post-image" alt="" /></a>
<a href="http://demos.bavotasan.com/magazine-flow/" target="_blank" class="link" title="View Demo">';
	_e('View Demo', "magazine-basic");
	echo '</a><a href="https://www.e-junkie.com/ecom/gb.php?i=wpt-mfl&amp;c=single&amp;cl=93121" target="ejejcsingle" class="link buy">';
	_e('Buy Now', "magazine-basic");
	echo '</a><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/" target="_blank" class="link" title="More Info">';
	_e('More Info', "magazine-basic");
	echo '</a>
</div>
<h4>Magazine Flow</h4>';

printf(__('Purchase %s for only $39.97 and get all these amazing features and more:', "magazine-basic"), '<a target="_blank" href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/"><strong>Magazine Flow</strong></a>');
	echo '<ul>';
	echo '<li>'.__('Unique Front Page Grid Layout', "magazine-basic").'</li>';
	echo '<li>'.__('Header Background Image Editor', "magazine-basic").'</li>';
	echo '<li>'.__('Optional Author Box', "magazine-basic").'</li>';
	echo '<li>'.__('10 @font-face kits', "magazine-basic").'</li>';
	echo '<li>'.__('Color options', "magazine-basic").'</li>';
	echo '<li>'.__('Extended widgetized footer', "magazine-basic").'</li>';
	echo '<li>'.__('Javascript enabled ad space', "magazine-basic").'</li>';
	echo '</ul>';	
	echo '<small>NOTE: Magazine Flow has a front page layout that differs from Magazine Basic.</small>';
	echo '</div>'; 
}

###############################
##  the layout options page  ##
###############################

function pbt_layout_options() {
	global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( get_index($value,'id') ) {
	
			case "site_width":
				radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('800px', "magazine-basic"), __('1024px', "magazine-basic")), array(800,1024));			
			break;
				
			case "dates_cats":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", "magazine-basic"); ?></label>
					&nbsp;&nbsp;<input name="dates_posts" type="checkbox" <?php if(theme_option("dates_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", "magazine-basic"); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors_cats":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", "magazine-basic"); ?></label>
					&nbsp;&nbsp;<input name="authors_posts" type="checkbox" <?php if(theme_option("authors_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", "magazine-basic"); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
			
			case "custom_background": ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url('themes.php?page=custom-background'); ?>"><?php _e('Go to Custom Background editor', "magazine-basic"); ?></a>
                </div>
                </div>
        	<?php break;			
		} 
	}
}

###############################
##  the header options page  ##
###############################

function pbt_header_options() {
    global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( get_index($value,'id') ) {
	
			case "logo_header":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input type="text" size="50" name="<?php echo $value['id']; ?>" value="<?php echo theme_option($value['id']); ?>" />
					<?php 
					echo '<div class="headerlogo"></div>';
					?> 
				<br class="clear" />
				</div>
			</div>
			<?php
			break;
			
			case "logo_location":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table>
						<tr>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoleft.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoright.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logomiddle.png" alt="" />
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fl"<?php if(theme_option($value['id']) == "fl") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fr"<?php if(theme_option($value['id']) == "fr") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="aligncenter"<?php if(theme_option($value['id']) == "aligncenter") { echo " checked=\"checked\""; } ?> />
							</td>
						</tr>
					</table>
					<br class="clear" />
					</div>
			 </div>
			<?php break;			

			case "tag_line":
				radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;

			case "user_login":
				radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;

			case "headerad_img":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<span id="searchHeader"><input type="text" name="<?php echo $value['id']; ?>" size="50" value="<?php echo theme_option($value['id']); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Path to Ad Image', "magazine-basic"); ?></label>
					<br style="clear:both;" />
					<input type="text" name="headerad_link" size="50" value="<?php echo theme_option('headerad_link'); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Click-through Link', "magazine-basic"); ?></label>
					<br style="clear:both;" />
					<input  name="header_ad" type="checkbox" <?php if(theme_option("header_ad")=="on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display Header Ad', "magazine-basic"); ?></label>
	</span>
					<br class="clear" />
				</div>
			</div>
			<?php break;	

			case "custom_menus": ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url('nav-menus.php'); ?>"><?php _e('Go to Custom Menu editor', "magazine-basic"); ?></a>
                </div>
                </div>
        	<?php break;					
		}
	}	
}

##########################################
## Display the front page options page ###
##########################################

function pbt_frontpage_options() {
    global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( get_index($value,'id') ) {
	
			case "post_layout":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table>
						<tr>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option1.png" alt="Option 1" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option2.png" alt="Option 2" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option3.png" alt="Option 3" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option4.png" alt="Option 4" />
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="1"<?php if(theme_option($value['id'])=="1") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', "magazine-basic"); ?> 1</label>                            
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="2"<?php if(theme_option($value['id'])=="2") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', "magazine-basic"); ?> 2</label>
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="3"<?php if(theme_option($value['id'])=="3") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', "magazine-basic"); ?> 3</label>
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="4"<?php if(theme_option($value['id'])=="4") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', "magazine-basic"); ?> 4</label>
							</td>
						</tr>
					</table>           
					<br class="clear" />
				</div>
			</div>
	
			<?php 
			break;
	
			case "number_posts":
				textBox(2, $value['name'], $value['desc'], $value['id'], '', 2, 'center');			
			break;
			
			case "excerpt_content":
				radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('Excerpt', "magazine-basic"), __('Content', "magazine-basic")));			
			break;	
	
			case "excerpt_one":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table class="rows">
					<tr>
					<th><label><?php _e('1 Col', "magazine-basic"); ?>:</label></th>
					<th><label><?php _e('2 Col', "magazine-basic"); ?>:</label></th>               
					<th><label><?php _e('3 Col', "magazine-basic"); ?>:</label></th>
					</tr>	
					<tr>
					<td><input  name="<?php echo $value['id']; ?>" size="3" type="text" value="<?php echo theme_option($value['id']); ?>" /></td>
					<td><input  name="excerpt_two" size="3" type="text" value="<?php echo theme_option('excerpt_two'); ?>" /></td>
					<td><input  name="excerpt_three" size="3" type="text" value="<?php echo theme_option('excerpt_three'); ?>" /></td>
					</tr>
					</table>
					<br class="clear" />
				</div>
			</div>
			<?php
			break;	
			
			case "latest_story":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input  name="<?php echo $value['id']; ?>" type="checkbox"<?php if(theme_option($value['id']) == "on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display "Latest Story"', "magazine-basic"); ?></label>            
					<br class="clear" />
				</div>
			</div>
			<?php
			break;			

			case "dates_index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", "magazine-basic"); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors_index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", "magazine-basic"); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
	
		}
	}
}


#################################
##  the sidebars options page  ##
#################################

function pbt_sidebars_options() {
	global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( get_index($value,'id') ) {
				
			case "sidebar_width1":
				radioBox(2, $value['name'], $value['desc'], $value['id'], array(__("180px", "magazine-basic"), __("300px", "magazine-basic")), array(180,300));			
			break;
			   
			case "sidebar_width2":
				radioBox(3, $value['name'], $value['desc'], $value['id'], array(__("180px", "magazine-basic"), __("300px", "magazine-basic"), __("None", "magazine-basic")), array(180,300,0));			
			break;			   
			   
			case "sidebar_location":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<div id="oneSidebar">
                        <table>
                            <tr>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneleft.png" alt="One Left" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneright.png" alt="One Right" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="1"<?php if(theme_option($value['id']) == "1") { echo " checked=\"checked\""; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="2"<?php if(theme_option($value['id']) == "2") { echo " checked=\"checked\""; } ?> />
                                </td>
                            </tr>
                        </table>
					</div>
					<div id="twoSidebar">
                        <table>
                            <tr>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoleft.png" alt="" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/tworight.png" alt="" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoseparate.png" alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="3"<?php if(theme_option($value['id']) == "3") { echo ' checked="checked"'; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="4"<?php if(theme_option($value['id']) == "4") { echo ' checked="checked"'; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="5"<?php if(theme_option($value['id']) == "5") { echo ' checked="checked"'; } ?> />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="locerror"></p>
                    <br class="clear" />
				</div>
			</div>
			<?php break;					

			case "custom_widgets": ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url('widgets.php'); ?>"><?php _e('Go to Widgets editor', "magazine-basic"); ?></a>
                </div>
                </div>
        	<?php break;
		} 
	}
}

############################
##  the seo options page  ##
############################

function pbt_seo_options() {
    global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( get_index($value,'id') ) {
	
			case "seo":
				radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;
			
			case "site_description":
				textAreaBox(4, $value['name'], $value['desc'], $value['id']);
			break;
	
			case "keywords":
				textAreaBox(4, $value['name'], $value['desc'], $value['id']);
			break;
	
			case "google_analytics":
				textAreaBox(6, $value['name'], $value['desc'], $value['id']);
			break;
		}
	}
}

function pbt_widgets_init() {
	wp_register_script('effects', THEME_URL.'/js/effects.js', array( 'jquery' ),'',true);

	// include the widgets
	include(TEMPLATEPATH.'/widgets/widget_login.php'); 
	include(TEMPLATEPATH.'/widgets/widget_feature.php'); 
	
	// Initiating the sidebars
	if (function_exists("register_sidebar")) {
	register_sidebar(array(
	'name' => 'Sidebar One',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	if (theme_option('sidebar_width2')!=0) {
		register_sidebar(array(
		'name' => 'Sidebar Two',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
		));
		}
	}
}
add_action( 'widgets_init', 'pbt_widgets_init' );

// Tags for keywords
function csv_tags() {
    $posttags = get_the_tags();
 	$csv_tags = '';
    if($posttags) {
		foreach((array)$posttags as $tag) {
			$csv_tags .= $tag->name . ',';
		}
	}
    echo '<meta name="keywords" content="'.$csv_tags.theme_option('keywords').'" />';
}

// Theme excerpts
function theme_excerpt($num, $readmore = true) {
	if($readmore) {
		$link = '<p><a href="'.get_permalink().'" class="more-link">'.__("Read more &raquo;", "magazine-basic").'</a></p>';
	} else {
		$link = '';
	}
	
	$limit = $num;
	if(!$limit) $limit = 55;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	echo '<p class="excerpt">'.$excerpt.'</p>'.$link;
}

// Theme contents
function theme_content($readmore) {
	$content = get_the_content($readmore);
	$content = preg_replace("/<img[^>]+\>/i", "", $content); 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	echo $content;
}

// Meta description
function metaDesc() {
	global $post;
	$content = apply_filters('the_excerpt_rss', strip_tags($post->post_excerpt));
	if(empty($content)) 
		$content = apply_filters('the_excerpt_rss', strip_tags(get_the_content()));
	$content = preg_replace('/\[.+\]/','', $content);
	$chars = array("", "\n", "\r", "chr(13)", "\t", "\0", "\x0B");
	$content = str_replace($chars, " ", $content);
	if(empty($content)) {
		$content = theme_option('site_description');
	}
	$content = str_replace('"','',$content);
	if (strlen($content) < 155) {
		echo $content;
	} else {
		$desc = substr($content,0,155);
		echo $desc."...";
	}
}

// image grabber function
function resize($w,$h,$class='alignleft',$showlink=true) {
	global $more, $post;
	$title = the_title_attribute('echo=0');
	if($showlink) {
		$link = "<a href='".get_permalink()."' title='$title'>";
		$linkend = "</a>";
	} else {
		$link ="";
		$linkend="";
	}
	$more = 1;
	$content = get_the_content();
	$pattern = '/<img[^>]+src[\\s=\'"]';
	$pattern .= '+([^"\'>\\s]+)/is';
	$more = 0;
	if(preg_match($pattern,$content,$match)) {
		$theImage =  "$link<img src=\"$match[1]\" class=\"$class\" alt=\"$title\" width=\"$w\" height=\"$h\" />$linkend\n\n";
		return $theImage;
	}
}

// Comments
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
        <div class="comment-avatar">
        	<?php echo get_avatar( $comment, 40 ); ?>
        </div>     
        <div class="comment-author">
        	<?php echo get_comment_author_link()." ";
        	printf(__('on %1$s at %2$s', "magazine-basic"), get_comment_date(),get_comment_time()); 
			edit_comment_link(__('(Edit)', "magazine-basic"),'  ','');
			?>
        </div>
        <div class="comment-text">
	        <?php if ($comment->comment_approved == '0') { _e('<em>Your comment is awaiting moderation.</em>', "magazine-basic"); } ?>
        	<?php comment_text() ?>
        </div>
        <?php if($args['max_depth']!=$depth && comments_open() && $comment->comment_type!="pingback") { ?>
        <div class="reply">
        	<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php } ?>
	</div>
<?php
}

### Function: Page Navigation: Boxed Style Paging
function pagination($before = '', $after = '') {
	global $wpdb, $wp_query;
	$pagenavi_options = array();
	$pagenavi_options['pages_text'] = __('Page %CURRENT_PAGE% of %TOTAL_PAGES%',"magazine-basic");
	$pagenavi_options['current_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['page_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['first_text'] = __('First Page',"magazine-basic");
	$pagenavi_options['last_text'] = __('Last Page',"magazine-basic");
	$pagenavi_options['next_text'] = '&raquo;';
	$pagenavi_options['prev_text'] = '&laquo;';
	$pagenavi_options['dotright_text'] = '...';
	$pagenavi_options['dotleft_text'] = '...';
	$pagenavi_options['num_pages'] = 5;
	$pagenavi_options['always_show'] = 0;
	$pagenavi_options['num_larger_page_numbers'] = 0;
	$pagenavi_options['larger_page_numbers_multiple'] = 5;
	if (!is_single()) {
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = intval($pagenavi_options['num_pages']);
		$larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
		$larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
		$pages_to_show_minus_1 = $pages_to_show - 1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		$larger_per_page = $larger_page_to_show*$larger_page_multiple;
		$larger_start_page_start = (n_round($start_page, 10) + $larger_page_multiple) - $larger_per_page;
		$larger_start_page_end = n_round($start_page, 10) + $larger_page_multiple;
		$larger_end_page_start = n_round($end_page, 10) + $larger_page_multiple;
		$larger_end_page_end = n_round($end_page, 10) + ($larger_per_page);
		if($larger_start_page_end - $larger_page_multiple == $start_page) {
			$larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
			$larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
		}
		if($larger_start_page_start <= 0) {
			$larger_start_page_start = $larger_page_multiple;
		}
		if($larger_start_page_end > $max_page) {
			$larger_start_page_end = $max_page;
		}
		if($larger_end_page_end > $max_page) {
			$larger_end_page_end = $max_page;
		}
		if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
			$pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
			$pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
			echo $before.'<div class="pagination">'."\n";
			if(!empty($pages_text)) {
				echo '<span class="pages">'.$pages_text.'</span>';
			}
			previous_posts_link($pagenavi_options['prev_text']);
			if ($start_page >= 2 && $pages_to_show < $max_page) {
				$first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
				echo '<a href="'.esc_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">1</a>';
				if(!empty($pagenavi_options['dotleft_text'])) {
					echo '<span class="extend">'.$pagenavi_options['dotleft_text'].'</span>';
				}
			}
			if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
				for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			for($i = $start_page; $i  <= $end_page; $i++) {						
				if($i == $paged) {
					$current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
					echo '<span class="current">'.$current_page_text.'</span>';
				} else {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			if ($end_page < $max_page) {
				if(!empty($pagenavi_options['dotright_text'])) {
					echo '<span class="extend">'.$pagenavi_options['dotright_text'].'</span>';
				}
				$last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
				echo '<a href="'.esc_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$max_page.'</a>';
			}
			next_posts_link($pagenavi_options['next_text'], $max_page);
			if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
				for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
					}

			echo '</div>'.$after."\n";
		}
	}
}

### Function: Round To The Nearest Value
function n_round($num, $tonearest) {
   return floor($num/$tonearest)*$tonearest;
}

function new_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');

function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	echo $mytitle;
}
// This theme allows users to set a custom background
if(function_exists('add_custom_background')) add_custom_background();

// This theme uses wp_nav_menu()
if(function_exists('register_nav_menu')) {
	register_nav_menu('main', 'Main Navigation Menu');
	register_nav_menu('sub', 'Sub-Navitation Menu');
}

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'aside', 'audio', 'gallery', 'image', 'link', 'video' ) );

function display_home() {
	echo '<div class="main-navigation"><ul class="sf-menu"><li><a href="'.get_bloginfo('url').'">Home</a></li>';
	wp_list_categories('title_li=&depth=1&number=5');
	echo '</ul></div>';
}

/* ADDING NEW THUMBNAIL STUFF */
if(!function_exists('pbt_AddThumbColumn') && function_exists('add_theme_support')) {
 	add_theme_support('post-thumbnails');
 
	function pbt_AddThumbColumn($cols) {
		$cols['thumbnail'] = __('Thumbnail', "magazine-basic");
		return $cols;
	}
 
	function pbt_AddThumbValue($column_name, $post_id) {
		$width = (int) 35;
		$height = (int) 35;

		if ( 'thumbnail' == $column_name ) {
			// thumbnail of WP 2.9
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
			// image from gallery
			if ($thumbnail_id) {
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
			}
			if(isset($thumb) && $thumb) {
				echo $thumb;
			} else {
				echo __('None', "magazine-basic");
			}
		}
	}
 
	// for posts
	add_filter( 'manage_posts_columns', 'pbt_AddThumbColumn' );
	add_action( 'manage_posts_custom_column', 'pbt_AddThumbValue', 10, 2 );
 
	// for pages
	add_filter( 'manage_pages_columns', 'pbt_AddThumbColumn' );
	add_action( 'manage_pages_custom_column', 'pbt_AddThumbValue', 10, 2 );
}

function add_menu_admin_bar() {
    global $wp_admin_bar;

    if ( !is_super_admin() || !is_admin_bar_showing() )
        return;

    /* Add the main siteadmin menu item */
    $wp_admin_bar->add_menu( array( 'id' => 'theme_options', 'title' => THEME_NAME, 'href' => admin_url('themes.php')."?page=".THEME_FILE ) );
    $wp_admin_bar->add_menu( array( 'parent' => 'theme_options', 'title' => __( 'Layout Options', 'magazine-basic' ), 'href' => admin_url('themes.php')."?page=".THEME_FILE ) );
}
add_action( 'admin_bar_menu', 'add_menu_admin_bar', 70 );

?>