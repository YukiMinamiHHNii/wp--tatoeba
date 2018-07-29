<aside class="sidebar">
	<?php 
		if(is_active_sidebar('main_sidebar')):
			dynamic_sidebar('main_sidebar');
		else:
			get_search_form();
		endif;
	?>
</aside>