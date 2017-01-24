<?php

load_theme_textdomain('panorama');

define (THEM_TEMPLATEURL, get_bloginfo('template_directory'));

$them_styles = array('darkgrey', 'lightgrey', 'blue', 'green', 'red', 'purple');
$them_style = get_option('ap_stylesheet');

$them_activeStyle = (!empty($them_style)) ? $them_style : $them_styles[0];


	// Widgets
  if(function_exists('register_sidebar')) {
	
		register_sidebar(array(
		'name' => __('Sidebar'),
		
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

	));
			
}
define (THEM_TEMPLATEURL, get_bloginfo('template_directory'));

add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {
	if ( !function_exists('wp_list_comments') ) 
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}


define(AP_LAYOUT, 'r');
define(AP_LINKCOLOUR, '#454673');
define(AP_HOVERCOLOUR, '#4B5BAD');
define(AP_HEADERIMAGE, 'a_rome_street.jpg');


function buildMenu(){

	$mo = ap_getPageMenuOrder();
	$exc = get_option('ap_pagesOmit');		
					
	$excString = (!empty($exc)) ? '&exclude=' . $exc : '';
							
	wp_list_pages('title_li=&sort_column='.$mo. '&depth=-1'. $excString);
	return NULL;
}				

function ap_add_theme_page() {
	global $wpdb;

	$errorFlag = false;	
	if ($_GET['page'] == basename(__FILE__)) {
	
	    // save settings
		if ( 'save' == $_REQUEST['action'] ) {

			if (valid_colour($_REQUEST['ap_linkColour'])){
					update_option('ap_linkColour', $_REQUEST['ap_linkColour']);
			} else {
 				$errorFlag = true;
			}
			
			if (valid_colour($_REQUEST['ap_hoverColour'])){
					update_option('ap_hoverColour', $_REQUEST['ap_hoverColour']);
			} else {
 				$errorFlag = true;
			}	
		
			
			if (($_REQUEST['ap_pageMenuOrder'] == 'menu') || 
				($_REQUEST['ap_pageMenuOrder'] == 'alpha') || 
				($_REQUEST['ap_pageMenuOrder'] == 'pageid')  
			){
			update_option('ap_pageMenuOrder', $_REQUEST['ap_pageMenuOrder']);
			} else {
 				$errorFlag = true;
			}
	
			if (checkPagesOmit($_REQUEST['ap_pagesOmit'])){
				update_option('ap_pagesOmit', trim($_REQUEST['ap_pagesOmit']));
			} else {
 				$errorFlag = true;
			}
			
	$ap_includeHome = (isset($_REQUEST['ap_includeHome'])) ? '0': '1';
	update_option('ap_includeHome', $ap_includeHome);
	$ap_headerRotate = (isset($_REQUEST['ap_headerRotate'])) ? '0': '1';
	update_option('ap_headerRotate', $ap_headerRotate);
	$ap_dateTimeFormat = (isset($_REQUEST['ap_dateTimeFormat'])) ? '0': '1';
	update_option('ap_dateTimeFormat', $ap_dateTimeFormat);
	update_option('ap_stylesheet', attribute_escape(trim($_REQUEST['ap_stylesheet'])));	
	update_option('ap_logoUrl', attribute_escape(trim($_REQUEST['ap_logoUrl'])));	
	update_option('ap_rssUrl', attribute_escape(trim($_REQUEST['ap_rssUrl'])));	
	update_option('ap_twitterName', attribute_escape(trim($_REQUEST['ap_twitterName'])));
	update_option('ap_headerImage', attribute_escape(trim($_REQUEST['ap_headerImage'])));	
	
		$ap_layout = 	($_REQUEST['ap_layout'] == 'l') ? 'l':'r';
					update_option('ap_layout', $ap_layout);	
			
			// goto theme edit page
			if($errorFlag){
					header("Location: themes.php?page=functions.php&error=true");
					die;
			} else {
					header("Location: themes.php?page=functions.php&saved=true");
					die;
			}
		
			
  		// reset defaults
		} else if('reset' == $_REQUEST['action']) {
			delete_option('ap_linkColour');
			delete_option('ap_hoverColour');	
			delete_option('ap_pageMenuOrder');	
			delete_option('ap_pagesOmit');
			delete_option('ap_rssUrl');	
			delete_option('ap_twitterName');
			delete_option('ap_headerImage');
			delete_option('ap_headerRotate');
			delete_option('ap_dateTimeFormat');
			delete_option('ap_layout');
			delete_option('ap_includeHome');
			delete_option('ap_logoUrl');
			delete_option('ap_stylesheet');
			
			header("Location: themes.php?page=functions.php&reset=true");
			die;

		}
	}

	

	
    add_theme_page(__('Panorama Theme Options','panorama'), __('Panorama Theme Options','panorama'), 'edit_themes', basename(__FILE__), 'ap_theme_page');
	
	
}

include(TEMPLATEPATH . '/library/theme_options.php');
include(TEMPLATEPATH . '/library/formFunctions.php');

add_action('admin_menu', 'ap_add_theme_page');




function valid_colour($var){
	$regex = '^#([a-f]|[A-F]|[0-9]){6}^';
	return preg_match($regex,$var);
}

	
function ap_linkColour() {
	$tc =  get_option('ap_linkColour');
	return (empty($tc)) ? AP_LINKCOLOUR : $tc;
	}

function ap_hoverColour() {
	$hc =  get_option('ap_hoverColour');
	return (empty($hc)) ? AP_HOVERCOLOUR: $hc;
	}


function ap_getPageMenuOrder() {

	switch (get_option('ap_pageMenuOrder')){
	
		case ('alpha'):
		$mo = 'post_title';
		break;
		
		case ('pageid'):
		$mo = 'ID';
		break;
		
		default:
		$mo = 'menu_order';
	}
	
	return $mo;
}

function checkPagesOmit($str){
	if (empty($str)) return true;
	$regex = '/^[0-9 ,]+$/';
	return preg_match($regex,$str);
}


function ap_rssLink(){
	$link = get_option('ap_rssUrl');
	return (!empty($link)) ? $link :  get_bloginfo('rss2_url');
}

function ap_twitterLink(){
	global $them_activeStyle;
	$name = get_option('ap_twitterName');
	
	return (!empty($name)) ? sprintf('<img style="vertical-align:-3px;" alt="Twitter" src="%s/styles/%s/twitter.gif" height="16" width="16" /> <a alt="%s" href="http://twitter.com/%s">%s %s Twitter</a> | ',  get_bloginfo('template_directory'), $them_activeStyle, $name, $name, get_bloginfo('name'), __('on','panorama')) :  '';
	
}

function findImageFile(){

	$dir  = TEMPLATEPATH . '/header_images';
	
	if(function_exists('scandir')) {
		$ap_files = deDotifyFiles(scandir($dir));
	} else {

		$dh  = opendir($dir);
		while (false !== ($filename = readdir($dh))) {
			$ap_files[] = $filename;
		}
		$ap_files = deDotifyFiles($ap_files);
		sort($ap_files);
	}
	return $ap_files;
}


function deDotifyFiles($files){
	while(($n = array_search('.',$files)) > -1)
                   unset($files[$n]);
	while(($n = array_search('..',$files)) > -1)
                   unset($files[$n]);
	return $files;
}


function ap_headerImage(){

	$imageFile = (get_option('ap_headerRotate') == 0) ?
	 	ap_headerImageDynamic():
		ap_headerImageStatic();

	if (!empty($imageFile) && file_exists(TEMPLATEPATH.'/header_images/'.$imageFile)) {
		return sprintf('background: url("%s/header_images/%s") top center no-repeat;',get_bloginfo('template_directory'), $imageFile);
		
	} else {	

		return 'background: green;';
	}
	
}

function ap_headerImageStatic(){

	$imageFile = get_option('ap_headerImage');

	if (empty($imageFile)){
		foreach (findImageFile() as $img) {
	
			if ($img != '.' && $img != '..' && file_exists(TEMPLATEPATH.'/header_images/'.$img)){
				$imageFile = $img;
				break;
			}
		}
	}
	return $imageFile;
}


function ap_headerImageDynamic(){

	$imgs = findImageFile();
	if(!is_array($imgs)) return '';
	shuffle($imgs);
	return $imgs[0];
}

	function ap_buildMenu(){

		$mo = ap_getPageMenuOrder();
		$exc = get_option('ap_pagesOmit');		
					
		$excString = (!empty($exc)) ? '&exclude=' . $exc : '';

		wp_list_pages('title_li=&sort_column='.$mo. '&depth=0'. $excString);
		return NULL;
	}				

	
function ap_layout(){

	$layout = get_option('ap_layout');
	
	echo (!empty($layout)) ? $layout :  'r';
	return NULL;
}

$ap_dateFormat = get_option('date_format'); 
$ap_timeFormat = (get_option('ap_dateTimeFormat') == 0) ? ' ' . get_option('time_format') : '';
 
$ap_dateTimeFormat = $ap_dateFormat . $ap_timeFormat;



add_action('wp_head', 'them_css_head');

function them_css_head() {
	global $them_styles, $them_activeStyle;

	$stylesheet = (!empty($them_activeStyle) && (in_array($them_activeStyle, $them_styles))) ? $them_activeStyle : $them_styles[0];	

	
	if(file_exists(TEMPLATEPATH.'/styles/'.$stylesheet.'.css')) {
		printf('<link href="%s/styles/%s.css" rel="stylesheet" type="text/css" />', THEM_TEMPLATEURL, $stylesheet);
	}
}

function them_activeStyleDir(){
	global $them_styles, $them_activeStyle;
	echo $them_activeStyle;
}

function ap_logo() {
 
	$logoUrl = get_option('ap_logoUrl');

	if(!empty($logoUrl))  {
		printf('<a href="%s/"><img src="%s" border="0" /></a>', get_bloginfo('home'),$logoUrl);
	} else {
		printf('<h3><a href="%s/">%s</a></h3>', get_bloginfo('home'), get_bloginfo('name'));
		printf('<h2>%s</h2>', get_bloginfo('description'));
	}
}

?>