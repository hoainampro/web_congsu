<?php
/**
 * Template Name: Page Home
 *
 * @package flex-theme
 */
	get_header();
?> 
<!-- advanted -->
<section id="advanted">
	<div class="container">
		<div class="row">
			<div class="slider-top owl-carousel owl-theme">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<?php if( get_field('title_advanted') ): ?><h3 class="title_advanted font_utmavobold"><?php the_field('title_advanted'); ?></h3><?php endif; ?>

					<?php if( get_field('sub_advanted') ): ?>
						<div class="sub-advanted">
							<?php the_field('sub_advanted'); ?>
						</div>
					<?php endif; ?>

					<?php if( get_field('link_detail') ): ?>
						<button class="button">
							<a href=""><?php the_field('link_detail'); ?></a>	
						</button>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- advanted -->
<!-- services -->
<section id="services">
	<div class="container">
		<div class="services_cos">
			<h2 class="title_service text-center"><span>DỊCH VỤ CỦA CHÚNG TÔI</span></h2>
		</div>
		<div class="service_slider">
			<div class="sub_service text-center">
				<p>Trên hết, với phương châm "Cộng Sức Cùng Thắng" chúng tôi mong muốn cùng cộng tác mọi mặt với quý khách hàng để đem đến những sản phẩm và dịch vụ có chất lượng vượt trội.</p>
			</div>
			<div class="row">
				<div class="details_slider">
					<?php 
						$args = array(
							'post_type' => 'slider',
							'post_status' => 'publish',
							'posts_per_page'=> 12
						);
					    $my_query = null;
					    $my_query = new WP_Query($args);
					    if( $my_query->have_posts() ):

					?>
					<div class="owl-slider owl-carousel owl-theme">
						<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								
									<div class="owl_items">
										<a href="">
										<?php the_post_thumbnail('full',array('class' =>'img-responsive' )); ?>
										</a>
									<h3 class="title_slider text-center"><a href=""><?php the_title(); ?></a></h3>
									</div>
								
							</div>
							
						<?php endwhile;wp_reset_postdata(); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- services -->
<!-- we_are -->
<section id="we_are">
	<div class="container">
		<div class="services_cos">
			<h2 class="title_service text-center"><span>Điểm mạnh  của chúng tôi</span></h2>
		</div>
		<div class="row we_are_content">
			<div class="col-md-6 col-sm-6 col-xs-12 img_we_are">
				<img src="/congsuc/wp-content/uploads/2017/11/index-Copy.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				 <ul class="recent-come">
               		<?php
						global $post;
						$args = array( 
							'post_type'=>'feature',
							'posts_per_page' => 15, 
							'orderby' => 'rand' 
						);
					$rand_posts = get_posts( $args );
					foreach ( $rand_posts as $post ) : 
					  setup_postdata( $post ); ?>
	                  <li>
	                          <?php
								echo get_the_post_thumbnail(get_the_ID(),'full' )
							  ?> 
	                           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	                  </li>
                  <?php endforeach; 
					wp_reset_postdata(); ?>
               </ul>
			</div>
		</div>
	</div>
</section>
<!-- we_are -->
<!-- project -->
<section id="project">
	<div class="container">
		<div class="services_cos">
			<h2 class="title_service text-center"><span>Dự án nổi bật </span></h2>
		</div>
		<div class="container">
			<div class="project_content">
				<?php 
					$args = array(
						'post_type' => 'project',
						'post_status' => 'publish',
						'posts_per_page'=> 6
					);
					$my_query = null;
				    $my_query = new WP_Query($args);
				    if( $my_query->have_posts() ):
				?>
				<div class="owl-pro-slider owl-carousel owl-theme">
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>

						<div class="col-md-12 col-xs-12 col-sm-12">
							<div class="project_details">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('full',array('class' =>'img-responsive' )); ?>
								</a>
								<div class="project_cos">
									<h3 class="title_project">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										<span>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">chi tiết</a>
										</span>
									</h3>
								</div>
							</div>
						</div>

					 <?php endwhile; wp_reset_postdata(); ?> 
				</div>	
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>	
<!-- project -->
<!-- hd_full -->
<section id="hd_full">
	<div class="container">
		<div class="hd_content">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="time_work">
						<h3 class="title_hd">Thời gian làm việc</h3>
						<p>Bất cứ khi nào bạn cần, hỗ trợ 24/7, 7 ngày trong tuần</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="list_detail">
						<ul id="list-call">
							<li><a href=""><i class="fa fa-phone"></i>0916 205 929</a></li>
							<li><a href=""><i class="fa fa-skype"></i>congsuc.vn</a></li>
							<li><a href=""><i class="fa fa-envelope"></i>info@congsuc.vn</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- hd_full -->
<!-- news -->
<section id="news">
	<div class="container">

		<div class="services_cos">
			<h2 class="title_service text-center"><span>Tin Tức</span></h2>
		</div>

		<div class="row new_cos">
			<?php 
				$args = array(
					'post_type' => 'news',
					'post_status' => 'publish',
					'posts_per_page'=> 6
				);
			    $my_query = null;
			    $my_query = new WP_Query($args);
			    if( $my_query->have_posts() ):
			?>
				<div class="news_slider slider owl-carousel owl-theme">
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="news_details">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('full',array('class' =>'img-responsive' )); ?>
								</a>
								<h3 class="title_slider"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo substr(get_the_excerpt(), 0,200)."…"; ?></p> 
							</div>
						</div>
				
					<?php endwhile; wp_reset_postdata(); ?>
			
				</div>
			<?php endif; ?>
		</div>

	</div>
</section>
<!-- news -->
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
<!-- contact -->
<section id="contact">
	<div class="container">
		<div class="services_cos">
			<h2 class="title_service text-center"><span>liên hệ với chúng tôi</span></h2>
		</div>
		<div class="row">
			<div class="bkg_contact">
				<div class="col-md-5 col-sm-4 contact_call">
					<p class="p_title">Hãy gọi cho chúng tôi</p>
					<div class="phone_contact"> 
						<a class="icon" href="">
							<i class="fa fa-phone"></i>
						</a> 
						<a href="javascript:;" class="phone">0916 205 929</a>
					</div>
					<p>Hoặc để chúng tôi gọi lại cho bạn</p>
				</div>
				<div class="col-md-7 col-sm-8 contact_input">
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

						<span><textarea name="inputNoiDung" cols="40" rows="3" id="inputNoiDung" placeholder="Nội dung"></textarea></span>
						<input class="input_submit" type="submit" value="Gửi nội dung" id="buttonGuiNoiDung">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact -->
<!-- map -->
<section id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.006966390191!2d108.20833821441792!3d16.065128288883397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184b2d380a31%3A0x312feeab2b488be5!2zNTAgSMOgbSBOZ2hpLCBWxKluaCBUcnVuZywgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1511924947888" width="100%" height="348" frameborder="0" style="border:0" allowfullscreen>
	</iframe>
</section>
<!-- map -->
<!-- socail_company -->
<section id="socail_company">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<h3 class="title_cp">CÔNG TY CP ỨNG DỤNG CÔNG NGHỆ QUẢNG CÁO VÀ THƯƠNG MẠI CỘNG SỨC</h3>
						<nav id="nav_list">
							<ul>
								<li><i class="fa fa-map-marker"></i>85 Hàm Nghi, Q. Thanh Khê, Đà Nẵng</li>
								<li><a href="tel:+0916 205 929"><i class="fa fa-phone"></i>0916 205 929</a></li>
								<li><i class="fa fa-envelope"></i>info@congsuc.vn</li>
								<li><i class="fa fa-chrome"></i>www.congsuc.vn</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<h3 class="title_menu">MENU TRANG</h3>
						<nav id="nav_infor">
							<ul>
								<li>
									<a href="">
										<i class="fa fa-caret-right"></i>
										TRANG CHỦ
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-caret-right"></i>
										GIỚI THIỆU
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-caret-right"></i>
										DỊCH VỤ
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-caret-right"></i>
										 BÁO GIÁ
									</a>
								</li>
								<li>
									<a href="">
										<i class="fa fa-caret-right"></i>
										 TIN TỨC
									</a>
								</li>
								<li>
									<a href=""><i class="fa fa-caret-right"></i>LIÊN HỆ</a>
								</li>
							</ul>
						</nav>
						<nav id="list_socials">
							<ul>
								<li><a href="" title=""><i class="fa fa-facebook"></i></a></li>
								<li><a href="" title=""><i class="fa fa-twitter"></i></a></li>
								<li><a href="" title=""><i class="fa fa-youtube"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="fanface">
					<div class="fb-page" data-href="https://www.facebook.com/quangnamoi/" data-tabs="timeline" data-height="228" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/quangnamoi/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/quangnamoi/">Quảng Nam Ơi</a></blockquote>
					</div>
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