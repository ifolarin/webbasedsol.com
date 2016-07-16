<!--Homepage Service Section-->
<?php $corpbiz_options=theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'corpbiz_options', array() ), $corpbiz_options ); 
if($current_options['service_section_enabled'] == true) { 
?>
<div class="service_section">
	<div class="container">
		<div class="row">
			<div class="section_title">
				<?php if($current_options['home_service_title'] !="") { ?>
				<h1><?php echo esc_html($current_options['home_service_title']); ?></h1>
				<?php } ?>
				<?php if($current_options['home_service_description'] !="") { ?>
				<p> <?php echo esc_html($current_options['home_service_description']); ?> </p>
				<?php } ?>
			</div>	 
		</div>
		<div class="row">		
			<div class="col-md-3 col-sm-6">
				<div class="service_area">
					<div class="service_box">
						<a href="https://www-356.ibm.com/partnerworld/wps/bplocator/details?id=1a4359f0-1146-11e1-b14a-020031000014" target="_blank"><img src="/wp-content/themes/images/partners/ibm.jpg" alt="IBM Logo"/></a>
					</div>
				</div>	
			</div>		
			<div class="col-md-3 col-sm-6">
				<div class="service_area">
					<div class="service_box">
						<img src="/wp-content/themes/images/partners/microsoft.jpg" alt="Microsoft Logo"/>
					</div>
				</div>
			</div>		
			<div class="col-md-3 col-sm-6">
				<div class="service_area">
					<div class="service_box">
					<img src="/wp-content/themes/images/partners/emc.jpg" alt="EMC Logo"/>
					</div>						
				</div>				
			</div>		
			<div class="col-md-3 col-sm-6">
				<div class="service_area">
					<div class="service_box">
						<img src="/wp-content/themes/images/partners/redhat.jpg" alt="Redhat Logo"/>
					</div>
				</div>
			</div>				
		</div>	
	</div>
</div>	
<!--/Homepage Service Section-->
<?php } ?>