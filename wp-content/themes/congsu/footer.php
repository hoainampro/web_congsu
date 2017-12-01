<?php
/**
 * The theme footer
 * @package flex-theme
 */

?>
		<footer id="footer" class="footer" role="contentinfo">
			<?php if (is_active_sidebar('footer-top')): ?>
				<div id="footer-top" class="footer-top">
					<div class="container">
						<?php dynamic_sidebar('footer-top'); ?> 
					</div>
				</div>
			<?php endif; ?>

			<?php
				if (get_toption('shows_fbottom') == 1 && get_toption('fbottom_content') != ''):
			?>
				<div id="footer-bottom" class="footer-bottom">
					<div class="container">
						<div class="row">												
							<?php if ( get_toption('logo_footer_on') == 1) : ?>
								<div class="col-md-3 left-logo-footer">
									<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
										<img class="pl-logo img-responsive" src="<?php 
											the_toption('logo_footer','image');
										?>">
									</a>
								</div>		
								<div class="col-md-9 content-footer-text">
									<?php 
										the_toption('fbottom_content');
									?>	
								</div>
							<?php else: ?>								
								<div class="col-xs-12">
									<?php 
										the_toption('fbottom_content');
									?>		
								</div>		
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			
			<?php
				if (get_toption('show_copyright') == 1 && get_toption('copyright_text') != ''):
			?>
				<div id="copyright">
					<div class="container">
						<div class="copyright text-center"> 
							<?php 
								the_toption('copyright_text');
							?>	
						</div>
					</div> 
				</div>
			<?php endif; ?>


			<section id="footer_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<ul id="card_list">
								<li><a herf=""><img src="/congsuc/wp-content/uploads/2017/11/cartd1.jpg" alt=""></a></li>
								<li><a herf=""><img src="/congsuc/wp-content/uploads/2017/11/card3.jpg" alt=""></a></li>
								<li><a herf=""><img src="/congsuc/wp-content/uploads/2017/11/card2.jpg" alt=""></a></li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-6">
							<div class="content_text">
								<p>Bản quyền thuộc về Công ty cổ phần CỘNG SỨC © 2017 Phát triển bởi www.thietkewebdanang.com</p>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
		</footer>



	<?php wp_footer(); ?> 
	</body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div style="position: fixed; top: 0px; left: -120px; width: 0px; height: 0px; z-index: 2147483647;"><a href="tel:0943.82.92.82" class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="bkasoft-alo-phoneIcon" style="transform: scale(1, 1); transform-origin: left top 0px; left: 100px; top: 159px;"><div class="coccoc-alo-ph-circle-time"><img id="coccoc-alo-external-site-favicon" src=""> <span id="coccoc-alo-external-site-counter"></span></div><canvas id="stopwatch"></canvas><div class="coccoc-alo-ph-circle"></div><div class="coccoc-alo-ph-circle-fill"></div><div class="coccoc-alo-ph-img-circle coccoc-alo-move-cursor"></div><div class="coccoc-alo-ph-circle-close"></div><span class="phone_text">Call: 01658288552</span></a></div>
	<div id="wrap-back-to-top" style="display: block;"> <i class="fa fa-angle-up"></i></div>
</html>