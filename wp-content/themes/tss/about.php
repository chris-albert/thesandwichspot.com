<?php
/**
 * Template Name: About
 *
 *
 */

wp_enqueue_script('tss-cycle');

get_header(); ?>

	<div class="contain">
		<div id="content" class="about">
			<div id="about-wrapper">
				<div id="prev-button" class="arrow">
					previous
				</div>
				<div id="next-button" class="arrow">
					next
				</div>
				<div id="about-box">
					<div id="about-box-cont">
						<div id="slide-box">
							<div class="s1" style="background:url('<?php bloginfo('template_url'); ?>/images/2006.jpg') no-repeat;float:left;width:100%;height:100%;"></div>
							<div class="s2" style="background:url('<?php bloginfo('template_url'); ?>/images/2007-2010.jpg') no-repeat;float:left;width:100%;height:100%;"></div>
							<div class="s3" style="background:url('<?php bloginfo('template_url'); ?>/images/2010-the_future.jpg') no-repeat;float:left;width:100%;height:100%;"></div>
							<div class="s4" style="background:url('<?php bloginfo('template_url'); ?>/images/the_mission.jpg') no-repeat;float:left;width:100%;height:100%;"></div>
						</div>
						<div id="slide-navs">
							<span><a href="#" class="activeSlide s1">1</a></span><span><a href="#" class="s2">2</a></span><span><a href="#" class="s3">3</a></span><span><a href="#" class="s4">4</a></span>
						</div>
					</div>
					<div id="about-text-box">
						<div id="about-show-box">
							<div class="about-text s1">
								<h1><img src="<?php bloginfo('template_url'); ?>/images/about-06.png" alt="2006/Sacramento, CA" /></h1>
								<p>In 2005 The Colonel Tom Slick set out on his journey to open the first Sandwich Spot in Midtown Sacramento,
								California. Located at 1630 18th St. the Sandwich Spot quickly grew in popularity and became one of the most
								desired lunchtime hangouts in the Midtown area. Through delicious Sando's and even better customer service
								The Sandwich Spot was born!!!</p>
							</div>
						</div>
						<div id="about-hide-box">
							
							<div class="about-text s2 ">
								<h1><img src="<?php bloginfo('template_url'); ?>/images/about-07.png" alt="2007-2010" /></h1>
								<p>As The Sandwich Spot grew in popularity, stores spawned open in Rohnert Park CA., Naomas, CA., Rancho Cordova,
								CA., Land Park in Sacramento, CA., and in Santa Monica, CA. These stores have grown and prospered through 
								these tough financial times by staying true to the recipe of great customer service and awesome one-of-a-kind
								sandwich creations!!! </p>
							</div>
							<div class="about-text s3">
								<h1><img src="<?php bloginfo('template_url'); ?>/images/about-10.png" alt="2010 to the Future" /></h1>
								<p>In 2010, Colonel Tom Slick and Captain Jack Lucky joined forces to open the next generation of
								Sandwich Spots. Located in the Marina District in beautiful San Francisco, CA., the store has drawn
								local attention as the best sandwich shop in the ever bustling Marina District! With its success the
								expansion has rippled through the penninsula expanding stores in San Carlos, CA, Redwood City, CA.,
								Mountain View, CA., Santa Clara, CA., Millbrae, CA., and coming soon to San Mateo, CA.!! By the end 
								of 2014 the sandwich spot will have 
								opened 25 owner operated stores in the state of California as well as in Nevada!</p>
							</div>
							</div>
							<div class="about-text s4">
								<h1><img src="<?php bloginfo('template_url'); ?>/images/about-mission.png" alt="The Mission" /></h1>
								<p>We would like to license our "System" to own and operate your independent store, and their 24 plus
								favorite sandwiched we've created plus our one-of-a-kind selection of sauces. We will basicallybuild you
								a "turn key" custom and Family Owned business you can drive away with... and it comes with the Finacial
								Freedom and exploding growth that are yours for the taking from the ground floor to infinity... and beyond!!!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="curve-bottom" class="min-contain">
		<div class="contain">
			
		
		</div>
	</div>
	
<?php get_footer(); ?>
