<?php
$corpbiz_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'corpbiz_options', array() ), $corpbiz_options ); 
?>
<!--Flex Slider-->	
<?php if($current_options['home_banner_enabled'] == true) { ?>
		<div class="slider">
					<img class="img-responsive" src="/wp-content/themes/images/slides/slide02.jpg">
					<?php if( $current_options['slider_image_one_title'] != '' || $current_options['slider_image_one_description'] !='' || $current_options['slider_one_readmore_link'] != '' ) { ?>
					<div class="container slide-caption">
						<div class="overlay">
						<?php
						echo ( $current_options['slider_image_one_title']!='' ? '<h1>'.$current_options['slider_image_one_title'].'</h1>' : '' ); 
						echo ( $current_options['slider_image_one_description']!='' ? '<p>'.$current_options['slider_image_one_description'].'</p>' : '' );
						?>
						</div>
						<?php if($current_options['slider_one_readmore_text'] != '') { ?>
						<div class="flex-btn-div">
						<a href="<?php echo $current_options['slider_one_readmore_link']; ?>" <?php if( $current_options['slider_one_readmore_ink_target'] == true ) { echo "target='_blank'"; } ?> class="flex-btn"><?php echo $current_options['slider_one_readmore_text']; ?></a>
						</div>
						<?php } ?>						
                    </div>
				<?php } ?>
		 </div>	
	
	<!--/Flex Slider-->
<?php } ?>	
</div>	