<?php

get_header();

global $wp_query; // On récupère la Query stockée dans une variable globale

?>

<header>
	<h1><?php echo $wp_query->found_posts(); ?> résultat(s) de recherche pour : <?php echo $_GET['s']; ?></h1>
</header>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
			<h2><?php the_title(); ?></h2>
			<div><?php the_excerpt(); ?></div>
		</article>
	<?php endwhile; ?>
	<?php else : ?>
		<p>Aucun contenu trouvé.</p>
<?php endif; ?>

<?php get_footer(); ?>