      <aside id="sidebar">
          <?php
            if(is_active_sidebar('main_sidebar')){
            /* if para verificar si el sidebar está activo */
                dynamic_sidebar('main_sidebar');
            } else { ?>
          <?php  } ?>
			</aside><!-- /#sidebar -->
