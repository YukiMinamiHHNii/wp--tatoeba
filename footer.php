	<footer class="Footer">
		<footer class="Footer-container">
			<div class="Footer-nav">
				<!--<nav class="Social-media">
					<a href="#">
						<i class="fab fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-github"></i>
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram"></i>
					</a>
				</nav>-->
				<?php
					if(has_nav_menu('social_media_menu')):
						wp_nav_menu(array(
							'theme_location'=> 'social_media_menu',
							'container'=> 'nav',
							'container_id'=> 'Menu SocialMediaMenu',
							'container_class'=>'Menu SocialMediaMenu'
						));
					else:
						echo '<p><small>Social media menu goes here</small></p>';
					endif;
				?>
			</div>
			<div class="Footer-copy">
				<?php 
					if(is_active_sidebar('footer_sidebar')):
						dynamic_sidebar('footer_sidebar');
					else:
						echo '
							<p>
								&copy; '.date('Y').' copyright
							<a href="#">YukiMinamiHHNii</a>
							</p>
						';
					endif;
				?>
			</div>
			<div class="Footer-nav">
				<?php
					if(has_nav_menu('about_menu')):
						wp_nav_menu(array(
							'theme_location'=> 'about_menu',
							'container'=> 'nav',
							'container_id'=> 'Menu AboutMenu',
							'container_class'=>'Menu AboutMenu'
						));
					else:
						echo '<p><small>Corporative menu goes here</small></p>';
					endif;
				?>
			</div>
		</footer>
	</footer>
	<?php wp_footer();?>
</body>
</html>