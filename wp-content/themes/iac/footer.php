
<footer>
   <div class="footer-dark">
      <footer>
           <div class="container">
               <div class="row" style="text-align:center; height:40px;">
                   <div class="col-sm-6 col-md-3 item">
                       <?php
                           wp_nav_menu(
                           array (
                              'theme_location' => 'menu_footer1'
                           )
                           );
                       ?>
                   </div>
                   <div class="col-sm-6 col-md-3 item">
                       <?php
                          wp_nav_menu(
                          array (
                             'theme_location' => 'menu_footer2'
                          )
                          );
                      ?>
                   </div>
                   <div class="col-md-6 item text">
                       <?php
                           wp_nav_menu(
                           array (
                              'theme_location' => 'menu_footer3'
                           )
                           );
                       ?>
                   </div>
               </div>
           </div>
      </footer>
   </div>



<!-- Chamar as funções do footer (script)-->
<?php wp_footer(); ?>

</footer>

<!-- FIM CONTAINER -->
</div>
</body>
</html>
