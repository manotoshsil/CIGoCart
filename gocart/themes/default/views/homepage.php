<?php include('header.php'); ?>

<?php include('carousel.php'); ?>
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
<!--manotosh  End  -->


<?php include('footer.php'); ?>