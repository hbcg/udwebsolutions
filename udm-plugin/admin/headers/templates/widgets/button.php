<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
include '../../../../../../../../wp-load.php';
?>
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
		$('.udm_color_picker').wpColorPicker();
	});
</script>
<?php
$buttodata=unserialize(get_option('header_layout_'.$_POST['header']));
$location=$_POST['location'];
?>

<div id="bottommenu"> 
	<h4>Button</h4>
	<input type="hidden" name="<?php echo $location; ?>button" value="yes">
	<ul class="menuwidget">
			<li><h5>Button Text </h5><input type="text" name="<?php echo $location; ?>_button_text" value="<?php echo $buttodata[$location.'_button_text']; ?>" ></li>	 
			<li><h5>Button Link </h5><input type="text" name="<?php echo $location; ?>_button_link" value="<?php echo $buttodata[$location.'_button_link']; ?>" ></li>
	</ul>
</div>