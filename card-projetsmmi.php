


<div id="post-<?php the_ID(); ?>" class="card text-bg-dark flex-fill col-1 m-1 ">
	
  <?php 
    // Récupérer l'URL de la miniature
    $thumbnail_url = get_the_post_thumbnail_url();
    // Si aucune image n'est disponible, utiliser une image par défaut
    $image_src = $thumbnail_url ? $thumbnail_url : "jsg4704a.mmiweb.iut-tlse3.fr/httpdocs/wp-content/themes/basetheme";
  ?>


  <img src="<?php echo get_template_directory_uri().'/default.webp'?>" class="card-img" style="aspect-ratio: 3/2; height:100% ; width: 100%;" alt="...">
  
  
  <div class="btn card-img-overlay" data-bs-toggle="modal" data-bs-target="#<?php the_ID(); ?>">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
    <div><?php the_category(); ?></div>
    <p class="card-text"><small><?php the_date(); ?></small></p>
  </div>


 

    <div class="modal fade text-body-emphasis" id="<?php the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column">
					<div class="col-12">
                    <?php 
					the_content();
					?></div>
					<div class="col-12">
						<?php comments_template()?>
					</div>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>





</div>
