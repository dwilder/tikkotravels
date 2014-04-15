<?php

// This is the homepage of the Tikko Travels website prototype.
// This is intended to demonstrate general layout and behaviour for the
// production site, and as a stop gap live site until the production site
// is complete.

?>

<?php include('inc/header.php'); ?>

<?php include('inc/banner.php'); ?>

<?php

// Create content for the grid tiles.

$tiles = array(
	0 => array (
		'type' => 'content',
		'title' => 'Shop Tikko',
		'img' => 'index_shoptikko.jpg',
		'content' => 'Order your Tikko and help raise awareness for Autism and children\'s Brain Health.',
		'href' => 'shop.php',
		'link' => 'Shop Tikko',
		'photo' => TRUE
	),
	
	1 => array (
		'type' => 'content',
		'title' => 'Is Your Camera Ready?',
		'img' => 'index_photocontest.jpg',
		'content' => 'We have something special in the works. Like us on Facebook and stay informed.',
		'href' => 'contests.php',
		'link' => 'Say Cheese',
		'photo' => TRUE
	),
	
	2 => array (
		'type' => 'content',
		'title' => 'The Tikko Blog',
		'img' => 'index_blog.jpg',
		'content' => 'Where in the world is Tikko travelling? Read the blog and find out what Tikko has been up to.',
		'href' => 'blog.php',
		'link' => 'Read about Tikko\'s Travels',
		'photo' => FALSE
	),
	
	3 => array (
		'type' => 'content',
		'title' => 'Donate',
		'img' => 'index_donate.jpg',
		'content' => 'Your donations go towards Autism awareness, and supporting families with Autistic children.',
		'href' => 'donate.php',
		'link' => 'Make a Donation',
		'photo' => FALSE
	),
	
	4 => array (
		'type' => 'content',
		'title' => 'Meet Tikko',
		'img' => 'index_meettikko.jpg',
		'content' => 'Tikko is a lovable little polar bear who travels because not every kid can.',
		'href' => 'story.php',
		'link' => 'Read the Tikko Story',
		'photo' => FALSE
	),
	
	5 => array (
		'type' => 'social',
		'title' => '',
		'img' => '',
		'content' => 'Tikko has been to Hawaii. Where have you been?',
		'href' => 'http://twitter.com/tikkotravels',
		'link' => '<img src="img/icon_twitter.png" />',
		'photo' => FALSE
	),
	
	6 => array (
		'type' => 'content',
		'title' => 'Share a Story',
		'img' => 'index_yourphotos.jpg',
		'content' => 'Share your own Tikko photos and videos, and tell us your Tikko story. We may post it in our blog',
		'href' => 'contact.php',
		'link' => 'Send us your Tikko stories',
		'photo' => FALSE
	),
	
	7 => array (
		'type' => 'content',
		'title' => 'Golf & Help Kids',
		'img' => 'index_swingforetheanswers.jpg',
		'content' => 'Play golf and raise funds for Autism awareness and support services. Sign up for the event or sponsor a golfer.',
		'href' => 'http://swingforetheanswers.com',
		'link' => 'Get Golfing',
		'photo' => TRUE
	),
	
	8 => array (
		'type' => 'content',
		'title' => 'Get News',
		'img' => 'index_emaillist.jpg',
		'content' => 'Get updates, Tikko news, and be the first to know about TCF events.',
		'href' => 'http://eepurl.com/M5qsn',
		'link' => 'Subscribe Now',
		'photo' => FALSE
	),
	
	9 => array (
		'type' => 'content',
		'title' => 'Autism Awareness',
		'img' => 'index_autismawareness.jpg',
		'content' => 'Autism and ASD are steadily on the rise. Find out more about who it affects and how.',
		'href' => 'autism-awareness.php',
		'link' => 'Learn about Autism',
		'photo' => FALSE
	),
	
	10 => array (
		'type' => 'social',
		'title' => '',
		'img' => '',
		'content' => 'Tikko is a lovable little polar bear who travels because not every kid can.',
		'href' => 'http://facebook.com/tikkotravels',
		'link' => '<img src="img/icon_facebook.png" />',
		'photo' => FALSE
	),
	
	11 => array (
		'type' => 'content',
		'title' => 'About TCF',
		'img' => 'index_abouttcf.jpg',
		'content' => 'The Tikko Charitable Foundation is devoted to helping children with Autism.',
		'href' => 'about.php',
		'link' => 'More about TCF',
		'photo' => TRUE
	)
);

?>

<div id="grid" class="group">

<?php

// Create the tiles:
$i = 0;

for ($i = 0; $i < 12; $i +=1) {
	echo '<div id="tile' . ($i+1) . '"  class="tile';
	
	if ($tiles[$i]['type'] == 'content') { echo ' tile-scroll'; }
	
	echo '">
			<div class="tile-inner">
				<a href="' . $tiles[$i]['href'] . '">' ;
				
				if ($tiles[$i]['type'] == 'content') {
				
					if ($tiles[$i]['photo']) {
						echo '
					<img class="tile-img" src="img/' . $tiles[$i]['img'] . '" />';
					} else {
						echo '<img class="tile-img" src="img/index_blank.png" />';					
					}
					
					echo '
					<div class="tile-title">
						<img src="img/icon_tikko.png" />
						<h2>' . $tiles[$i]['title'] . '</h2>
					</div>
					';
					
					if (!$tiles[$i]['photo']) {
						echo '			
					<div id="overlay' . ($i+1) . '"  class="tile-overlay">
						<p id="summary' . ($i+1) . '"  class="tile-summary">' . $tiles[$i]['content'] . '</p>
						<p id="action' . ($i+1) . '"  class="tile-action">' . $tiles[$i]['link'] . '...</p>
					</div>
					';
					}
				}
				else {
					
					echo '<img class="tile-img" src="img/index_blank.png" />';
					
					echo '<div class="tile-social">
					
					<p class="tile-social-content">' . $tiles[$i]['content'] . '</p>
					<p class="tile-icon">' . $tiles[$i]['link'] . '</p>
					</div>';
				}

				echo '</a>
			</div>
		</div>';
}

?>

</div>


<?php include('inc/footer.php'); ?>