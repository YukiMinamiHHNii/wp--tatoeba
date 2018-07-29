			<figure class="PostCard">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail();?>
				</a>
				<figcaption>
					<h2>
						<a href="<?php the_permalink();?>">
							<?php the_title();?>
						</a>
					</h2>
					<?php the_excerpt();?>
					<p>
						<small>
							<i class="fas fa-calendar"></i>
							<?php the_time(get_option('date_format'));?>
							&bull;
							<i class="fas fa-user circle"></i>
							<?php the_author_posts_link();?>
						</small>
					</p>
					<?php if(has_category()):?>
					<p>
						<i class="fas fa-tags"></i>
						Categorias: 
						<?php the_category(' ');?>
					</p>
					<?php endif;?>
					<?php if(has_tag()):?>
					<p>
						<i class="fas fa-globe-americas"></i> 
						<?php the_tags('Origen: ');?>
					</p>
					<?php endif;?>
					<p>
						Post type: 
						<?php
							echo (get_post_format($post))?get_post_format($post):'simple plain post';
						?>
					</p>
				</figcaption>
			</figure>

				<?php 
					if(is_page()||is_single()):
						echo '<article class="PostContent">';
						the_content();
						echo '</article>';
						comments_template();
					endif;
				?>