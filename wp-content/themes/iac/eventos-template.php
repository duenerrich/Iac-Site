<?php
/*
Template Name: Eventos Page
*/
 ?>

<?php get_header(); ?>

     <?php if(have_posts()):
       while (have_posts()):
         the_post();
        ?>

     <article>
       <?php the_post_thumbnail(); ?>
         <h2><?php the_title(); ?></h2>
         <!-- // Mostra a miniatura do post em wordpress -->
         <h3>Autor: <?php the_author_posts_link()?></h3>
         <p><?php the_category(' '); ?></p>
         <p><?php the_tags('Tags: ', ', '); ?></p>
         <p><?php the_content(); ?></p>
     </article>
     <?php endwhile;
     else:
       echo "Não existe post para mostrar!";
     endif;
        ?>

<?php get_footer(); ?>
