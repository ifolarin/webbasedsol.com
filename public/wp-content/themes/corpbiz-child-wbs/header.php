<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />    
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />	
	<link rel="profile" href="http://gmpg.org/xfn/11" />	
	
	<?php $corpbiz_options=theme_data_setup(); 
		 $current_options = wp_parse_args(  get_option( 'corpbiz_options', array() ), $corpbiz_options ); ?>
	 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>		
<!--Logo & Menu Section-->
<!--Header Top Section-->
	<div class="header-sidebar">
		<div class="container">
			<div class="row">
				<div >
					<div id="wdl_header_left_info_widget-3"
						class="widget wdl_header_left_info_widget">
						<ul class="header_contact_info">
							<li><i class="fa fa-phone"></i>+234 818 816 5647</li>
							<li><i class="fa fa-envelope"></i>info@webbasedsol.com</li>
<!-- 							<li><i class="fa fa-home"></i>21 Esther Oshiyemi Street, Ilupeju, Lagos</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/Header Top Section-->
<div class="homepage_mycarousel">
   <div class="navbar navbar-wrapper navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"><?php __('Toggle navigation','corpbiz'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
				<img id="logo" src="/wp-content/themes/images/logo_200x120.png"/>	
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse">
			<?php
			wp_nav_menu( array(  
					'theme_location' => 'primary',
					'container'  => 'nav-collapse collapse navbar-inverse-collapse',
					'menu_class' => 'nav navbar-nav navbar-right',
					'fallback_cb' => 'webriti_fallback_page_menu',
					'walker' => new webriti_nav_walker()
					)
				);	
			?>
			</div>
		</div>
	</div>
<!--/Logo & Menu Section-->