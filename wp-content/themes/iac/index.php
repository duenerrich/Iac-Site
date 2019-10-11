<?php get_header(); ?>

<!-- Chamar a imagem do cabeçalho personalizado -->
 <!-- <img class="img-fluid" src="<?php header_image();?> height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""" /> -->



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-block " id="banner1"  alt="Pesquisas que integram especialistas" >
    </div>
</div>

    <div class="carousel-item">
      <div class="d-block " id="banner2" alt="Cultivo de amendoim">
    </div>
</div>

    <div class="carousel-item">
      <div class="d-block w-100" id="banner3" alt="IAC 50ª Cultivar Feijao Carioca">
    </div>
  </div>

</div>
</div>

<?php if(have_posts()):
  while (have_posts()):
    the_post();
   ?>

<article>
    <h2><?php the_title(); ?></h2>
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

<div class="article-list">
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
        <div
            class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
            <h3 class="name">Article Title</h3>
            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
   </div>
<?php get_footer(); ?>
