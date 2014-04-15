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
		'link' => 'Shop Tikko'
	),
	
	1 => array (
		'type' => 'content',
		'title' => 'Is Your Camera Ready?',
		'img' => 'index_photocontest.jpg',
		'content' => 'We have something special in the works. Like us on Facebook and stay informed.',
		'href' => 'contests.php',
		'link' => 'Say Cheese'
	),
	
	2 => array (
		'type' => 'content',
		'title' => 'The Tikko Blog',
		'img' => 'index_blog.jpg',
		'content' => 'Where in the world is Tikko travelling? Read the blog and find out what Tikko has been up to.',
		'href' => 'blog.php',
		'link' => 'Read about Tikko\'s Travels'
	),
	
	3 => array (
		'type' => 'content',
		'title' => 'Donate',
		'img' => 'index_donate.jpg',
		'content' => 'Your donations go towards Autism awareness, and supporting families with Autistic children.',
		'href' => 'donate.php',
		'link' => 'Make a Donation'
	),
	
	4 => array (
		'type' => 'content',
		'title' => 'Meet Tikko',
		'img' => 'index_meettikko.jpg',
		'content' => 'Tikko is a lovable little polar bear who travels because not every kid can.',
		'href' => 'story.php',
		'link' => 'Read the Tikko Story'
	),
	
	5 => array (
		'type' => 'social',
		'title' => '',
		'img' => '',
		'content' => 'Tikko has been to Hawaii. Where have you been?',
		'href' => 'http://twitter.com/tikkotravels',
		'link' => '<img src="img/icon_twitter.png" />'
	),
	
	6 => array (
		'type' => 'content',
		'title' => 'Share a Story',
		'img' => 'index_yourphotos.jpg',
		'content' => 'Share your own Tikko photos and videos, and tell us your Tikko story. We may post it in our blog',
		'href' => 'contact.php',
		'link' => 'Send us your Tikko stories'
	),
	
	7 => array (
		'type' => 'content',
		'title' => 'Golf & Help Kids',
		'img' => 'index_swingforetheanswers.jpg',
		'content' => 'Play golf and raise funds for Autism awareness and support services. Sign up for the event or sponsor a golfer.',
		'href' => 'http://swingforetheanswers.com',
		'link' => 'Send us your Tikko stories'
	),
	
	8 => array (
		'type' => 'content',
		'title' => 'Get News',
		'img' => 'index_emaillist.jpg',
		'content' => 'Get updates, Tikko news, and be the first to know about TCF events.',
		'href' => 'http://eepurl.com/M5qsn',
		'link' => 'Subscribe Now'
	),
	
	9 => array (
		'type' => 'content',
		'title' => 'Autism Awareness',
		'img' => 'index_autismawareness.jpg',
		'content' => 'Autism and ASD are steadily on the rise. Find out more about who it affects and how.',
		'href' => 'autism-awareness.php',
		'link' => 'Learn about Autism'
	),
	
	10 => array (
		'type' => 'social',
		'title' => '',
		'img' => '',
		'content' => 'Tikko is a lovable little polar bear who travels because not every kid can.',
		'href' => 'http://facebook.com/tikkotravels',
		'link' => '<img src="img/icon_facebook.png" />'
	),
	
	11 => array (
		'type' => 'content',
		'title' => 'About TCF',
		'img' => 'index_abouttcf.jpg',
		'content' => 'The Tikko Charitable Foundation is devoted to helping children with Autism.',
		'href' => 'about.php',
		'link' => 'More about TCF'
	)
);

?>

<div id="grid" class="group">

<?php

// Create the tiles:
$i = 0;

for ($i = 0; $i < 12; $i +=1) {
	echo '<div class="tile">
			<div class="tile-inner">
				<a href="' . $tiles[$i]['href'] . '">' ;
				
				if ($tiles[$i]['type'] == 'content') {
					echo '<img class="tile-img" src="img/' . $tiles[$i]['img'] . '" />';
					
					echo '			<div class="tile-overlay">
					<h2 class="tile-title"><img src="img/icon_tikko.png" />' . $tiles[$i]['title'] . '</h2>
					<p class="tile-content">' . $tiles[$i]['content'] . '</p>
					<p class="tile-link">' . $tiles[$i]['link'] . '</p>
					</div>';
				}
				else {
				
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