<?php get_header()  ?>

<div class="container-fluid d-flex flex-column  align-items-center " style="height:80vh;">
	<?php get_search_form();?>
	<h1 class="m-5">Liste des projets </h1>
	<div class="col-6 d-flex flex-row flex-wrap">
		
		
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); 
		get_template_part('card', 'projetsmmi');
		
	 endwhile; ?>
	<?php else : ?>
		<p>Aucun contenu trouvé.</p>
<?php endif; ?>
	</div>
</div>

    

<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>
<?php get_footer() ?>