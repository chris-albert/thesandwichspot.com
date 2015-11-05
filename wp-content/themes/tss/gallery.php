<?php
/**
 * Template Name: Photo Gallery
 *
 *
 */
 
 require_once("phpFlickr/phpFlickr.php");

// Create new phpFlickr object
$f = new phpFlickr("0917e22e53058d093989f8e15b5511ea","99c26be2a385501c");

//61997267@N05 tss sf
//69793189@N07 tss new account

///67559434@N02 tss old new (abandoned)

$user = $f->urls_lookupUser('https://www.flickr.com/photos/69793189@N07');
$nsid = $user['id'];
$set_id = '';
if(isset($_GET['gid'])){
	$set_id = $_GET['gid'];
}


$sets = $f->photosets_getList($nsid);
$sets = $sets['photoset'];

$set_n = rand(0,count($sets));
$set_id = $sets[0];


$pset = $f->photosets_getPhotos($set_id['id']);
$set = $pset['photoset'];

 
 //$set['photo'] = array(1,2,23,3,4,4,3,3,3,34,3,43);
 
get_header(); ?>
	<div class="contain">
		<div id="content" class="gallery">
			
			<div id="current-photo">
				<div id="pl-button" class="arrow">Previous</div>
				<div id="pr-button" class="arrow">Next</div>
				<div id="display-photo">
					<a href="#" target="_blank"><img src="" alt="" style="max-height:375px;margin:0 auto;display:block;border:1px solid #fff;"/></a>
				</div>
				
				<div id="photo-caption">
					&mdash; SF Marina District: dehydration proof &mdash;
				</div>
			</div>
		</div>	
	</div>
	<div id="thumb-container" class="min-contain">
		<div class="contain">
			<div id="thumb-box">
				<div id="left-button" class="thumb-button">
				 
				</div>
				<div id="thumb-all">
					<div id="thumb-inner" style="width:<?php echo count($set['photo'])*97;?>px;" >
						<?php if($set['photo']){
						$i = 0;
						foreach($set['photo'] as $photo){ 
							$farm = $photo['farm'];
							$server = $photo['server'];
							$id = $photo['id'];
							$secret = $photo['secret'];
							$title = $photo['title'];
							$i++;
						?>		
						<div class="tb-thumb" rel="<?php echo $i; ?>" frlink="<?php echo "http://www.flickr.com/photos/{$nsid}/{$id}"; ?>" frimg="<?php echo "http://farm{$farm}.static.flickr.com/{$server}/{$id}_{$secret}.jpg"; ?>">
							<img src="<?php echo "http://farm{$farm}.static.flickr.com/{$server}/{$id}_{$secret}_s.jpg"; ?>" alt="<?php echo "{$title}"; ?>" />
						</div>
						<?php }} ?>
					</div>
				</div>
				<div id="right-button" class="thumb-button">
					
				</div>
				
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
