<?php
/**
 * The template for displaying the home page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sublime
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="collection" class="container">
				<div class="grid-items gallery">
				<!-- row 1 -->
				  <a class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row1-photo1'); ?>)" >
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-1.1'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row1-photo2'); ?>)">
					<div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-1.2'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-half" style="background-image:url(<?php the_field('row1-photo3'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-1.3'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				   </a>
				<!-- row 2 --> 
				  <a href="javascript:void(0)" class="grid-item grid-item-three-eights" style="background-image:url(<?php the_field('row2-photo1'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-2.1'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row2-photo2'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-2.2'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-three-eights" style="background-image:url(<?php the_field('row2-photo3'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-2.3'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				<!-- row 3 -->
				  <a href="javascript:void(0)" class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row3-photo1'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-3.1'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-half"  style="background-image:url(<?php the_field('row3-photo2'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-3.2'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row3-photo3'); ?>)">
				   <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-3.3'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				<!-- row 4 -->
				  <a href="javascript:void(0)" class="grid-item grid-item-three-eights" style="background-image:url(<?php the_field('row4-photo1'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-4.1'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-fourth" style="background-image:url(<?php the_field('row4-photo2'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-4.2'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>
				  <a href="javascript:void(0)" class="grid-item grid-item-three-eights" style="background-image:url(<?php the_field('row4-photo3'); ?>)">
				    <div class="grid-item-content" style="background:rgba(<?php the_field('hover-color-4.3'); ?>, 0.7)">
					    <img src="<?php the_field('gallery-icon'); ?>" alt="">
					    <div>
					    	<h4>Grid Item</h4>
					    	<p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
					    </div>
					    <span class="post_date">
					    	<img src="<?php the_field('clock-icon'); ?>" />
					    	<div class="day"><?php the_field('post-day'); ?></div>
					    	<div class="month"><?php the_field('post-month'); ?></div>
					    </span>
				   	</div>
				  </a>

				</div>
				<div class="gallery-description">
					<div class="grid-items">
						<div class="content grid-item grid-item-two-thirds">
							<p><?php the_field('gallery_description'); ?></p>
						</div>
						<div class="button-content grid-item grid-item-third"><a href="" class="btn down"><span><?php the_field('load_more_gallery_btn'); ?></span></a>
						</div>
					</div>
				</div>
			</section>	
			<hr>
			<section id="profile" class="container">
				<a href="#collection" class="btn up page-nav-left"><span>Collection</span></a>
				<a href="#blog" class="btn down page-nav-right"><span>Blog</span></a>
				<heading>
					<div><h2><?php the_field('profile_heading'); ?></h2></div>
					<div><h3><?php the_field('profile_subheading'); ?></h3></div>
				</heading>
				<div class="grid-items">
				<div class="profile_photo grid-item grid-item-fourth">
					<img src="<?php the_field('profile_photo'); ?>" />
					<span><?php the_field('profile_name'); ?></span>
					<span><?php the_field('profile_job_title'); ?></span>
				</div>
				<div class="profilecontent grid-item grid-item-half">
					<h4><?php the_field('profile_content_heading'); ?></h4>
					<p><?php the_field('profile_content'); ?></p>
				</div>
				<div class="profileaside grid-item grid-item-fourth">
					<h4><?php the_field('aside_heading'); ?></h4>
					<p><?php the_field('aside_content'); ?></p>
					<p><?php the_field('aside_postscript'); ?></p>
				</div>
			</div>
			</section>
			<section id="clients" style="background:linear-gradient(rgba(49,52,54, .7), rgba(0,0,0, .7)), url(<?php the_field('clients-bg'); ?>)">
				<div class="container">
					<img src="<?php the_field('clients-icon'); ?>" />
					<heading>
						<div><h2 class="inverse"><?php the_field('clients_heading'); ?></h2></div>
					</heading>
					<p>
						<span><?php the_field('clients_content'); ?></span>
						<span class="postscript"><?php the_field('clients_postscript'); ?></span>
					</p>
				</div>
			</section>
			<hr class="hidden">
			<section id="blog" class="container">
				<a href="#profile" class="btn up page-nav-left"><span>About Me</span></a>
				<a href="#featured_project" class="btn down page-nav-right"><span>Inner Project</span></a>
				<heading>
					<div><h2><?php the_field('blog_heading'); ?></h2></div>
					<div><h3><?php the_field('blog_subheading'); ?></h3></div>
				</heading>
				<?php $my_query = "showposts=3"; $my_query = new WP_Query($my_query); ?>
					<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

						<div class="grid-items blog_feed_grid">
							<div class="blog_row">
								<div class="grid-item grid-item-half blog_feed_image_container">
									<img class="blog_feed_featured_image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
									<div class="photo-hover-content">
										<div class="icon-container">
											<img src="http://localhost:8888/sublime3/wp-content/uploads/2016/01/icon.png" alt="">
									    </div>
									    <span class="post-meta-data">
									    	<div class="post-date">
										    	<img src="http://localhost:8888/sublime3/wp-content/uploads/2016/01/clock.png" />
										    	<div class="day">25</div>
										    	<div class="month">Nov</div>
										    </div>
												<div class="comments">
													<img src="http://localhost:8888/sublime3/wp-content/uploads/2016/03/comment.png" />
													<div><?php echo get_comments_number(); ?></div>
												</div>
									    </span>

									</div>
								</div>
								<div class="grid-item grid-item-half preview">
									<div class="blog_preview">
											<h3><?php the_title(); ?></h3>
											<div class="exerpt"><?php echo substr(get_the_excerpt(), 0,200); ?>...</div> <!-- shortening the excerpt -->
											<a href="<?php the_permalink(); ?>" class="btn right"><span>Keep Reading</span></a>
											<div class="author"><span>Written by</span> <?php the_author(); ?></div>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; // end of one post ?>
					<?php endif; //end of loop ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<?php endwhile; endif; ?>

			</section>
			<hr>
			<section class="container" id="featured_project">
				<a href="#blog" class="btn up page-nav-left"><span>Blog</span></a>
				<a href="#contact" class="btn down page-nav-right"><span>Contact Us</span></a>
				<heading>
					<div><h2><?php the_field('featured_project_heading'); ?></h2></div>
					<div><h3><?php the_field('featured_project_subheading'); ?></h3></div>
				</heading>
				<div class="grid-items">
					<div class="side1 grid-item grid-item-half">
						<img src="<?php the_field('main_project_photo'); ?>" />
						<div class="side1_content">
							<h4><?php the_field('supporting_description_heading'); ?></h4>
							<p><?php the_field('supporting_description_content'); ?></p>
						</div>
					</div>
					<div class="side2 grid-item grid-item-half">
						<div class="side2_content">
							<h4><?php the_field('main_description_heading'); ?></h4>
							<p><?php the_field('main_description_content'); ?></p>
							<table class="project-data">
								<tr>
									<th>Date:</th>
									<th class="content"><?php the_field('project_date'); ?></th>
								</tr>
								<tr>
									<th>Client: </th>
									<th class="content"><?php the_field('project_client'); ?></th>
								</tr>
								<tr>
									<th>Url: </th>
									<th class="content"><a href="<?php the_field('project_url'); ?>"><?php the_field('project_url'); ?></th>
								</tr>
							</table>
							<a href="" class="btn share"><span>Share This Project</span></a>
						</div>
						<img src="<?php the_field('supporting_project_photo'); ?>" />
					</div>
				</div>
			</section>
			<section id="contact" style="background-image:url('<?php the_field('contact_bg'); ?>')">
				<hr class="hidden">
				<div class="container">
					<a href="#collection" class="btn up page-nav-left"><span>Collection</span></a>
					<heading>
						<div><h2><?php the_field('contact_heading'); ?></h2></div>
						<div><h3><?php the_field('contact_subheading'); ?></h3></div>
					</heading>
					<div class="contact-wrap">
						<div class="contact-info-wrap">
							<h4 class="inverse"><?php bloginfo( 'name' ); ?></h4>
							<?php dynamic_sidebar('contact-widget'); ?>
						</div>
						<div class="contact-form-wrap">
							<h4>Get in Touch</h4>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>



<?php
get_footer();