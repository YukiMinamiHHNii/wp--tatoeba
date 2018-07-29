<main class="Main u-afterfixed">
	<div class="Main-container">
		<section class="content">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
						get_template_part('template-parts/content-main');
					endwhile;
				else:
					get_template_part('template-parts/content-none');
				endif;
			?>
		</section>	
		<?php 
			get_sidebar('sidebar');
			get_template_part('template-parts/pagination');
		?>
	</div>
</main>