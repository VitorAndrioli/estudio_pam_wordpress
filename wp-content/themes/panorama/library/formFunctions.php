<?php

function ap_input($var, $type, $description='', $value='', $id='', $selected='', $onchange='' ) {

 	
	switch( $type ){
	
	    case "text":

	 	$input = sprintf('<input name="%s" id="%s"  type="%s" style="width: 60%%" class="code" value="%s" onchange="%s" />', $var, $id, $type, $value, $onchange);
			 
			break;
			
		case "submit":
		
		$input = sprintf('<p class="submit"><input name="%s" type="%s" value="%s" /><p>',  $var, $type, $value);

			break;

		case "option":
		
			if($selected == $value)  $extra = 'selected '; 

			$input = sprintf('<option value="%s" %s>%s</option>', $value, $extra, $description);
		
		    break;
  		case "radio":
  		if($selected == $value)  $extra = 'checked '; 
  	
			$input = sprintf('<label><input name="%s" id="%s" type="%s" value="%s" %s /> %s</label> &nbsp;', $var, $id, $type, $value, $extra, __($description,'panorama')); 
 			
  			break;
  			
		case "checkbox":
		
			if($selected == '0')  $extra = 'checked '; 

					$input = sprintf('<label><input name="%s" id="%s" type="%s" %s /> %s</label><br/>', $var, $id, $type, $extra, __($description, 'panorama')); 

  			break;

		case "textarea":
		
				$input = sprintf('<textarea name="%s" id="%s" style="width: 80%%; height: 5em;" class="code">%s</textarea>',$var, $id, $value ); 
		
		    break;
	}

	return $input;
}

function ap_th( $title ) {


   	echo '<tr valign="top">';
		echo '<th align="right" width="150" scope="row">'.$title.' </th>';
		echo '<td>';

}

function ap_cth() {

	echo '</td>';
	echo '</tr>';
	
}
?>