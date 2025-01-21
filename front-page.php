<?php get_header();  ?>
<div style="min-height:75vh;">
    <!-- MAIN -->
    <h1 class="p-5">Bienvenue sur la page d'accueil du site projets étudiant du <strong>"But métiers du multimédia et de l'internet"</strong>de l'<strong>Université de TOULOUSE</strong>  </h1>

    <?php 

get_template_part('carouselHome', 'projetsmmi');?>
    <?php ?>
	<h2>Les dèrniers projets de nos élèves</h2>
	<?php
//AFFICHAGE DES PROJETS SOUS FORME DE CARDS
$args = array(
	'post_type' => 'projetsmmi',
	'posts_per_page' => 3,
	'orderby' => 'date',
    'order'=> 'DESC',
);
$query = new WP_Query($args);

if ( $query->have_posts() ) :
	
?> <div class="d-flex flex-row bg-primary justify-content-center flex-fill m-5" style="height:25vh;"><?php 
	while ( $query->have_posts() ) : 
		$query->the_post();
        get_template_part('card', 'projetsmmi');
?>
	
<?php 
	endwhile;
else : ?>
		<h2>Aucun projet trouvé.</h2>
<?php endif;
wp_reset_postdata();

?>	
</div>
</div>
<?php get_footer();  ?>
