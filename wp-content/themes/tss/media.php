<?php
/**
 * Template Name: Recent Media
 *
 *
 */
 /*
require_once("phpFlickr/phpFlickr.php");

// Create new phpFlickr object
$f = new phpFlickr("0917e22e53058d093989f8e15b5511ea","99c26be2a385501c");


$user = $f->urls_lookupUser('http://www.flickr.com/photos/61997267@N05');
$nsid = $user['id'];
$set_id = '';
if(isset($_GET['gid'])){
	$set_id = $_GET['gid'];
}


$sets = $f->photosets_getList($nsid);
$sets = $sets['photoset'];


$set_n = rand(0,count($sets));
$set_id = $sets[$set_n];


$pset = $f->photosets_getPhotos($set_id['id']);
$set = $pset['photoset'];
*/

get_header(); ?>

	<div class="contain">
		<div id="content" class="media">
			<div id="left-column" class="top-c">
				<?php //$args = array('category' => 'media'); $posts = get_posts($args);
					query_posts('category_name=media&posts_per_page=5');
				$i = 0; ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

				<?php if($i != 0){ ?>
					<div class="blog-sep"></div>
				<?php }else $i++; ?>
				<div class="blog-post post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</div>
				<?php endwhile; // end of the loop. ?>
			</div>
			<div id="right-column">
				<div id="recent-posts" class="top-c">
					<h2>Spots For Sale</h2>
					<ul id="rp-list">
						<?php 
						$recent_posts = wp_get_recent_posts(array('category'=>3));
						foreach( $recent_posts as $post ){
							echo '<li><a href="' . get_permalink($post["ID"]) . '" title="Look '.$post["post_title"].'" >' .   $post["post_title"].'</a> </li> ';
						}
						//wp_get_archives('type=postbypost&limit=10&format=html'); 
						?>
					</ul>
				</div>
				<!--<div class="rc-box">
					<a href="#"><img src="" alt="Buy 2 Sandwiches get 1 Free" /></a>
				</div>-->
				<!--<div class="rc-box">
					<div id="flickr-box">
						<div id="flickr-box-inner">
							<h2>Flickr Photos</h2>
							<div id="flickr-photos">
								<?php
									$n = 0;
									foreach($set['photo'] as $photo){
										$farm = $photo['farm'];
										$server = $photo['server'];
										$id = $photo['id'];
										$secret = $photo['secret'];
										$title = $photo['title'];
										if($n > 8) break;
										$n++;
										
										?>
										<div class="photo"><a href="<?php echo "http://www.flickr.com/photos/{$nsid}/{$id}"; ?>" target="_blank" ><img <?php echo "src='http://farm{$farm}.static.flickr.com/{$server}/{$id}_{$secret}_s.jpg' alt='{$title}'"; ?> /></a></div>
										
								<?php }
								?>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
			
	</div>
	
<?php get_footer(); ?>
