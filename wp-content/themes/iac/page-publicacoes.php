<?php get_header(); ?>
<article class="article-list">
                <?php
                  if( have_posts()){
                     while(have_posts()){
                     the_post();
                     ?>
                     <h2><?php the_title(); ?></h2>
                     <p>Autor: <?php the_author_posts_link(); ?></p>
                     <p>Publicado em <?php echo get_the_date(); ?></p>
                     <p>Categoria: <?php the_category(' '); ?></p>
                     <p><?php the_tags('Tags: ' ,', ') ?></p>
                     <?php the_content(); ?>



                     <?php }
                  } else {
                     echo "<p>Não existe post para mostrar no momento</p>";
                  }
                 ?>
</article>

<?php get_footer(); ?>
