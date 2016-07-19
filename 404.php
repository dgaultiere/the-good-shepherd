<div class="alert alert-warning">
  <?php if(get_field('site_language', 'option') == "es-mx") {
		_e('Lo sentimos, pero la página que estaban tratando de ver no existe. Volver a la <a href="/">página principal</a> o buscar una página a continuación.', 'sage');
	} else {
		_e('Sorry, the page you were trying to view does not exist. Return to the <a href="/">homepage</a> or search for a page below.', 'sage');
	} ?>
</div>

<div class="big-search">
	<?php get_search_form(); ?>
</div>
