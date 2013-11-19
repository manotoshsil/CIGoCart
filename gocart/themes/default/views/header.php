<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>


<?php if(isset($meta)):?>
	<?php echo $meta;?>
<?php else:?>
<meta name="Keywords" content="Shopping Cart, eCommerce, Code Igniter">
<meta name="Description" content="Go Cart is an open source shopping cart built on the Code Igniter framework">
<?php endif;?>

<?php echo theme_css('bootstrap.min.css', true);?>
<?php echo theme_css('bootstrap-responsive.min.css', true);?>
<?php echo theme_css('styles.css', true);?>

<?php echo theme_js('jquery.js', true);?>
<?php echo theme_js('bootstrap.min.js', true);?>
<?php echo theme_js('squard.js', true);?>

<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>
</head>

<body>

	<div class="navbar navbar-fixed-top  container">
		<div class="navbar-inner ">
			<div class="container">

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			
				<!--<a class="brand" href="<?php echo site_url();?>"><?php echo $this->config->item('company_name');?></a>-->
				
				<div class="nav-collapse">
					<ul class="nav">
					<li class="dropdown"><a href="<?php echo site_url();?>" class="dropdown-toggle" data-toggle="dropdown">Home </a>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('catalog');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php foreach($this->categories as $cat_menu):?>
								<li><a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
								<?php endforeach;?>
							</ul>
							
							<?php foreach($this->pages as $menu_page):?>

								<li>
								<?php if(empty($menu_page->content)):?>
									<a href="<?php echo $menu_page->url;?>" <?php if($menu_page->new_window ==1){echo 'target="_blank"';} ?>><?php echo $menu_page->menu_title;?></a>
								<?php else:?>
									<a href="<?php echo site_url($menu_page->slug);?>"><?php echo $menu_page->menu_title;?></a>
								<?php endif;?>
								</li>
								
							<?php endforeach;?>
					</ul>
					
					<ul class="nav pull-right">
						
						<?php if($this->Customer_model->is_logged_in(false, false)):?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('account');?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo  site_url('secure/my_account');?>"><?php echo lang('my_account')?></a></li>
									<li><a href="<?php echo  site_url('secure/my_downloads');?>"><?php echo lang('my_downloads')?></a></li>
									<li class="divider"></li>
									<li><a href="<?php echo site_url('secure/logout');?>"><?php echo lang('logout');?></a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><a href="<?php echo site_url('secure/login');?>"><?php echo lang('login');?></a></li>
						<?php endif; ?>
							<li>
								<a href="<?php echo site_url('cart/view_cart');?>">
								<?php
								if ($this->go_cart->total_items()==0)
								{
									echo lang('empty_cart');
								}
								else
								{
									if($this->go_cart->total_items() > 1)
									{
										echo sprintf (lang('multiple_items'), $this->go_cart->total_items());
									}
									else
									{
										echo sprintf (lang('single_item'), $this->go_cart->total_items());
									}
								}
								?>
								</a>
							</li>
					</ul>
					
					<?php echo form_open('cart/search', 'class="navbar-search pull-right"');?>
						<input type="text" name="term" class="search-query span2" placeholder="<?php echo lang('search');?>"/>
					</form>
				</div>
			     
				 </div>                 
			</div>
			 <div class="row">
			    <div class="span8"></div> <div class="hanginglogo span4"></div>
			 </div>		
		
	</div>

	