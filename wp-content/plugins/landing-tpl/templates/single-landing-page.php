<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="tlp-page">
			<div class="container">
				<?php while (have_posts()):
					the_post(); ?>
					<div class="tlp-header">
						<div class="tlp-logo">
							<a href="<?php echo get_site_url(); ?>" class="pull-left" >
								<?php if(has_post_thumbnail()): ?>
									<?php the_post_thumbnail('full',array('class'=>'img-responsive') ); ?>
								<?php else:
									the_custom_logo();
									endif;
								?>
							</a>
						</div>
						<div style="clear: both;"></div>
					</div>

					<div class="tld-headline text-center">
				        <h1><?php the_field_landing('ltp_headline'); ?></h1>
				        <h2><?php the_field_landing('ltp_sub-headline'); ?></h2>
				    </div>

					<?php 
						$features = unserialize(get_field_landing('ltp_gallery_data')); 
						if (!empty($features)):
					?>
						<div class="tlp-feature">
							<div class="row">
								<?php foreach ($features as $key => $feature):?>
									<div class="col-xs-6 col-sm-6 col-md-3 col-xs-full">
										<div class="content">
											<?php if($feature['image_url']): ?>
												<img class="img-responsive" src="<?php print $feature['image_url']; ?>">
											<?php endif; ?>

											<?php if($feature['image_desc']): ?>
												<h3 class="title"><?php print $feature['image_desc']; ?></h3>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					<?php endif; ?>
					
					<div class="tld-full-content">
					    <div class="row">
					    	<div class="col-md-4 col-sm-6 col-xs-12 tld-margin">
					        	<div class="tld-form">
					        		<?php 
						        		$formst = get_field_landing('ltp_form-short-code'); 
						        		if ($formst != '') {
						        			echo do_shortcode($formst);
						        		}else{
						        			echo 'Please add formidable short code!';
						        		}
						        	?>
					        	</div>
					        </div> 
					        <div class="col-md-4 col-sm-6 col-xs-12 tld-content tld-margin">
					        	<?php the_field_landing('ltp_content-section'); ?>
					        </div>
					        <div class="col-md-4 col-sm-12 col-xs-12 tld-map tld-margin">
					        	 <?php the_field_landing('ltp_google-map'); ?> 
					        </div>
					    </div>
					</div>	

				<?php endwhile;  ?>
			</div>
		</div>
		<?php wp_footer(); ?> 
	</body>
</html>