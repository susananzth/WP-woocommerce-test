<?php if( have_comments() ) { ?>
<!-- Si hay comentarios entonces es que se mostrará el título, el listado de los comentarios y el link para paginar los comentarios. -->
    <h3>
        <?php
            comments_number(
                __('No hay comentarios aún.', 'win'),
                __('Hay un comentario publicado.', 'win'),
                __('Hay % comentarios', 'win')
            );
        ?>
    </h3>
    <ol id="comments-list"><?php wp_list_comments(); ?></ol>
    <!-- Esta función va a mostrar el listado de los comentarios publicados -->
    <?php paginate_comments_links(); /* Muestra un enlace a los comentarios anteriores */ ?>
<?php } ?>
<?php comment_form(); /* Función para mostras un formulario de comentarios. */ ?>