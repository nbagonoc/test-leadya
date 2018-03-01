<?php get_header(); ?>
	<?php /* 
	<!-- Banner Slider make sure to add active class on 1st item via jqeury-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<!-- retrieving specific post by category ID with post per page-->
			<?php $query = new WP_Query('cat=30&posts_per_page=3'); ?>				
			<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
		    <div class="item">
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'background' ); ?>
				<div class="banner VerticalAlign" style="background-image: url('<?php echo $thumb['0'];?>');">
					<div class="verticalAlignElement text-center">
			        	<h1><?php the_title(); ?></h1>
			        	<h3><?php echo the_content();?></h3>
					</div>
				</div>
		    </div>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	
	</div><!-- banner closed -->
	*/ ?>
	<!--<div class="space-lg">
		<div class="container">
			<div class="search post-d post-delay-a">
				<?php //get_search_form(); ?>
			</div>
		</div>
	</div>-->
	<div class="banner">
		<div class="verticalAlign">
			<div class="verticalAlignElement">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
			        		<img src="<?php echo get_template_directory_uri(); ?>/img/prince.png" class="center-block img-responsive">
				        	<p class="">some text here some text here some text here some text here some text here</p>
				        	<a href="#" class="blue">Read More</a>
						</div>
		        	</div>
		        </div>
			</div>
		</div>	
	</div>
	<div class="space-md background-light">
		<div class="container space-bottom-md custom-button">
			<div class="row">
				<div class="col-sm-3">
					<div class="background-yellow space-lg space-side">
						<h2 class="text-right white text-center-mobile">Text</h2>
						<p class="text-right white text-center-mobile">here</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="background-green space-lg space-side">
						<h2 class="text-right white text-center-mobile">Text</h2>
						<p class="text-right white text-center-mobile">here</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="background-blue space-lg space-side">
						<h2 class="text-right white text-center-mobile">Text</h2>
						<p class="text-right white text-center-mobile">here</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="background-pink space-lg space-side">
						<h2 class="text-right white text-center-mobile">Text</h2>
						<p class="text-right white text-center-mobile">here</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="content border-top-blue background-white custom-space">
						<!-- retrieving specific post by  post ID -->
						<?php $query = new WP_Query('p=20'); ?>				
						<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
							<div class="textContainer">
								<a href="<?php the_permalink(); ?>"><h3 class="blue"><?php the_title(); ?></h3></a> 
								<p class="light"><?php echo the_content(); ?></p>
							</div>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="col-md-3 no-space-left">
					<div class="sample" data-spy="affix" data-offset-top="660">
											<div class="sidebar gap-top-xs hidden-lg hidden-md">
						<!-- empty spacer-->
					</div>
					<div class="sidebar border-top-pink background-white space">
						<div class="search">
							<h5 class="pink">Search this site</h5>
							<?php get_search_form(); ?>
						</div>
					</div>
					<div class="sidebar gap-top-xs border-top-green background-white space">
						<h5 class="green">Popular names</h5>
						<ul class="list-unstyled">
							<li class="space-top">Robert</li>
							<li class="space-top">Michael</li>
							<li class="space-top">Lester</li>
							<li class="space-top">Rommel</li>
							<li class="space-top">Charles</li>
							<li class="space-top">Darwin</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>