<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head();?>
</head>
<body <?php body_class()?>>
	<header class="Header">
		<section class="Header-container">
			<div class="Logo">
				<a href="<?php echo home_url('/');?>">
					<?php
						if(has_custom_logo()):
							the_custom_logo();
						else:
							bloginfo('name');
						endif;
					?>
				</a>
			</div>
			<button class="hamburger hamburger--collapse Panel-btn" type="button">
  				<span class="hamburger-box">
    				<span class="hamburger-inner"></span>
  				</span>
			</button>
			<section class="Panel">
				<?php
					if(has_nav_menu('main_menu')):
						wp_nav_menu(array(
							'theme_location'=> 'main_menu',
							'container'=> 'nav',
							'container_id'=> 'Menu MainMenu',
							'container_class'=>'Menu MainMenu'
						));
					else:
				?>
					<nav class="Menu">
						<ul>
							<?php wp_list_pages('title_li');?>
						</ul>
					</nav>
				<?php endif;?>
			</section>
		</section>
	</header>