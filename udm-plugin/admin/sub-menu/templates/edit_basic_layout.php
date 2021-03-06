<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
		include '../../../../../../../wp-load.php'; 
		
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('submenu_layout_'.$layout));

?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo $data['background_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Text Color: </h3>
		<select name="text_color" id="text_color">
			<option value="primary" <?php selected('primary',$data['text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="text_custom_color" value="<?php echo $data['text_custom_color']; ?>" />
			</li>
		</ul>
	</li>	
	 
	<li class="colorchange"><h3>Hover Text Color: </h3>
		<select name="hover_text_color" id="hover_text_color">
			<option value="primary" <?php selected('primary',$data['hover_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['hover_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['hover_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['hover_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['hover_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['hover_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="hover_text_custom_color" value="<?php echo $data['hover_text_custom_color']; ?>" />
			</li>
		</ul>
	</li>
</ul>
<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
		$('.colorchange select').change(function(){
			if($(this).val() == "custom")
			{
				$(this).parent().find('.customcolor').show();
			}
			else
			{
				$(this).parent().find('.customcolor').hide();
			}
		});
	  });																		
</script>