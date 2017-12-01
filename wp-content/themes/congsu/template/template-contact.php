<?php
/**
 * Template Name: Page Contact Us
 *
 * @package flex-theme
 */
	get_header();
?> 
<section id="introduce">
	<div class="container">
		<div class="row">
			<div class="col-m-12 col-sm-6 col-xs-12">
				<div class="introduce_detail">
					<h3 class="title_introduce">Trang Chủ<span><a href="">Liên Hệ</a></span></h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact -->
<section id="contact">
	<div class="container">
		<div class="services_cos pd_t_50">
			<h2 class="title_service text-center"><span>liên hệ với chúng tôi</span></h2>
		</div>
		<div class="row">
			<div class="bkg_contact">
				<div class="col-md-12 col-sm-6 contact_input">
					<form  method="get">
						<div class="input_left">
							<input type="text" name="Họ và tên" placeholder="Họ và tên">
						</div>
						<div class="input_center">
							<input type="email" name="inputEmail" placeholder="Email">
						</div>
						<div class="input_right">
							<input type="text" name="Điện thoại" placeholder="Điện thoại">
						</div>

						<span><textarea name="inputNoiDung" cols="40" rows="3" id="inputNoiDung" placeholder="Nội dung"></textarea></span><br>
						<input class="input_submit" type="submit" value="Gửi nội dung" id="buttonGuiNoiDung">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact -->
<!-- block_tail -->
<section id="block_tail">
	<div class="container">
		<div class="row">
			<?php 
				$args = array(
					'post_type' => 'blogs_tail',
					'post_status' => 'publish',
					'posts_per_page'=> 6
				);
			    $my_query = null;
			    $my_query = new WP_Query($args);
			    if( $my_query->have_posts() ):
			?>
			<div class="news_slider owl-carousel owl-theme">
				<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="blogs_tail_detal">
							<div class="blog_content">
								<div class="bolog">
									<?php echo substr(get_the_excerpt(), 0,800); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 img_blog">
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('full',array('class' =>'img-responsive' )); ?>
									</a>
								</div>
								<div class="col-xs-8 text_blog">
									<b><a href="" class="link_blog"><?php the_title(); ?></a></b>
									<p><a href="#">www.beemart.vn</a></p>
								</div>
							</div> 
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- block_tail -->

<!-- donor tài trợ-->
<section id="donor">
	<div class="container">
		<div class="row">
			<?php 
				$args = array(
					'post_type' => 'donor',
					'post_status' => 'publish',
					'posts_per_page'=> 10
				);
			    $m_query = null;
			    $m_query = new WP_Query($args);
			    if( $m_query->have_posts() ):
			?>
			<div class="donor-slider owl-carousel owl-theme">
				<?php while ($m_query->have_posts()): $m_query->the_post(); ?>
					<div class="col-md-12">
						<div class="donor-item">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full',array('class' =>'img-responsive' )); ?>
							</a>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- donor -->
<!-- map -->
<section id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.006966390191!2d108.20833821441792!3d16.065128288883397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184b2d380a31%3A0x312feeab2b488be5!2zNTAgSMOgbSBOZ2hpLCBWxKluaCBUcnVuZywgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1511924947888" width="100%" height="348" frameborder="0" style="border:0" allowfullscreen>
	</iframe>
</section>
<!-- map -->
<!-- socail_company -->
<section id="socail_company" class="bg_color_socials">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<h3 class="title_cp">CÔNG TY CP ỨNG DỤNG CÔNG NGHỆ QUẢNG CÁO VÀ THƯƠNG MẠI CỘNG SỨC</h3>
						<nav id="nav_list">
							<ul>
								<li><i class="fa fa-map-marker"></i>85 Hàm Nghi, Q. Thanh Khê, Đà Nẵng</li>
								<li><a class="color_white" href="tel:+0916 205 929"><i class="fa fa-phone"></i>0916 205 929</a></li>
								<li><i class="fa fa-envelope"></i>info@congsuc.vn</li>
								<li><i class="fa fa-chrome"></i>www.congsuc.vn</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<h3 class="title_menu">MENU TRANG</h3>
						<nav id="nav_infor">
							<ul>
								<li>
									<a href="" class="color_white"><i class="fa fa-caret-right"></i>TRANG CHỦ
									</a>
								</li>
								<li>
									<a href="" class="color_white"><i class="fa fa-caret-right"></i>GIỚI THIỆU
									</a>
								</li>
								<li>
									<a href="" class="color_white"><i class="fa fa-caret-right"></i>DỊCH VỤ
									</a>
								</li>
								<li>
									<a href="" class="color_white">
										<i class="fa fa-caret-right"></i>
										 BÁO GIÁ
									</a>
								</li>
								<li>
									<a href="" class="color_white"><i class="fa fa-caret-right"></i>IN TỨC
									</a>
								</li>
								<li>
									<a href="" class="color_white"><i class="fa fa-caret-right"></i>LIÊN HỆ</a>
								</li>
							</ul>
						</nav>
						<nav id="list_socials">
							<ul>
								<li><a href="" title=""><i class="fa fa-facebook color_white border_white"></i></a></li>
								<li><a href="" title=""><i class="fa fa-twitter color_white border_white"></i></a></li>
								<li><a href="" title=""><i class="fa fa-youtube color_white border_white"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fb-page" data-href="https://www.facebook.com/quangnamoi/" data-tabs="timeline" data-height="228" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/quangnamoi/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/quangnamoi/">Quảng Nam Ơi</a></blockquote>
				</div>
			</div>
		</div>		
	</div>	
</section>
<!-- socail_company -->
<section id="main-content" class="main-content" role="main">
	<div class="container">
		<div class="row">
			<?php get_sidebar('left'); ?> 
				<div id="main-column" class="<?php flex_col(); ?>" >
					<?php 
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								get_template_part('template_part/content','page');
							}
						}else { 
							get_template_part('template_part/content', 'none');
						}  
					?> 
				</div>
			<?php get_sidebar('right'); ?> 
		</div>
	</div>
</section>
<?php get_footer(); ?> 