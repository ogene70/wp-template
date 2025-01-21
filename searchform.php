<form class="<?php echo home_url( '/' ); ?>" role="search" method="get">
        <input class="form-control me-2" name='s' type="search" placeholder="Chercher un projet" value="<?php the_search_query(); ?>"  aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>