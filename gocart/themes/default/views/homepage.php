<?php include('header.php'); ?>

<?php include('carousel.php'); ?>
<?php echo theme_css('style.css', true);?>
<?php echo theme_js('modernizr.custom.63321.js', true);?>
<div class="container">
<div class="row">
	<?php foreach($boxes as $box):?>
	<div class="span3">
		<?php
		
		$box_image	= '<img class="responsiveImage" src="'.base_url('uploads/'.$box->image).'" />';
		if($box->link != '')
		{
			$target	= false;
			if($box->new_window)
			{
				$target = 'target="_blank"';
			}
			echo '<a href="'.$box->link.'" '.$target.' >'.$box_image.'</a>';
		}
		else
		{
			echo $box_image;
		}
		?>
	</div>
	<?php endforeach;?>
</div>
<!--Manotosh Begin -->
<div class="container">
		<div id="mi-slider" class="mi-slider">
					<ul>
						<li><a href="#"><img src="image/gallery/1.jpg" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="image/gallery/2.jpg" alt="img02"><h4>Oxfords</h4></a></li>
						<li><a href="#"><img src="image/gallery/3.jpg" alt="img03"><h4>Loafers</h4></a></li>
						<li><a href="#"><img src="image/gallery/4.jpg" alt="img04"><h4>Sneakers</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="image/gallery/5.jpg" alt="img05"><h4>Belts</h4></a></li>
						<li><a href="#"><img src="image/gallery/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4></a></li>
						<li><a href="#"><img src="image/gallery/7.jpg" alt="img07"><h4>Sunglasses</h4></a></li>
						<li><a href="#"><img src="image/gallery/8.jpg" alt="img08"><h4>Scarves</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/gallery/9.jpg" alt="img09"><h4>Casual</h4></a></li>
						<li><a href="#"><img src="images/gallery/10.jpg" alt="img10"><h4>Luxury</h4></a></li>
						<li><a href="#"><img src="images/gallery/11.jpg" alt="img11"><h4>Sport</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="images/gallery/12.jpg" alt="img12"><h4>Carry-Ons</h4></a></li>
						<li><a href="#"><img src="images/gallery/13.jpg" alt="img13"><h4>Duffel Bags</h4></a></li>
						<li><a href="#"><img src="images/gallery/14.jpg" alt="img14"><h4>Laptop Bags</h4></a></li>
						<li><a href="#"><img src="images/gallery/15.jpg" alt="img15"><h4>Briefcases</h4></a></li>
					</ul>
					
					<nav>
						<a href="#">Shoes</a>
						<a href="#">Accessories</a>
						<a href="#">Watches</a>
						<a href="#">Bags</a>
					</nav>
				</div>
			
</div>
<div class="row">
<div class="span12">
		<div class="row span9 leftbar">
		<div class="homepage-section span9"> Starters</div>
		<div class="homepage-section span9"> Main course</div>
		<div class="homepage-section span9"> Desserts</div>
		</div>
		<div class="row span3"></div>
						<ul class="thumbnails">							
						   <?php foreach($this->categories as $cat_menu):?>
								<li  class="span3">
								<div class="thumbnail" data-thumb="tooltip" data-placement="bottom" data-original-title="Click me">
									<a href="<?php echo site_url($cat_menu['category']->slug);?>" data-toggle="lightbox">
										<img src="<?php echo site_url("../uploads/images/medium/".$cat_menu['category']->image);?>" alt="">
									</a>
									<?php echo $cat_menu['category']->name; ?>
								</div>
								</li>
								<?php endforeach;?>
						
						</ul>
					</div>
</div>
<?php echo theme_js('jquery.catslider.js', true);?>
		
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
<!--manotosh  End  -->


<?php include('footer.php'); ?>