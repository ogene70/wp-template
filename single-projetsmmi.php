<?php  get_header();   ?>
<div class="col-12">
	<?php  get_search_form();   ?>
	<div class="col-6">
		<h2 class=""><?php the_title();?></h2>
		<div class="col-6 flex row ">
		<div class="container"><?php the_content();?></div>
		<div class="container"><?php comments_template()?></div>
		</div>
	</div>
</div>
<?php  get_footer();   ?>