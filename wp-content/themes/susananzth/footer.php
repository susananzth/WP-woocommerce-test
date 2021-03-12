                </main>
            </div><!-- /#layoutDefault_content -->
            <footer id="main-footer" class="footer pb-5 mt-auto bg-dark footer-dark">
                <div class="container">
                    <hr class="my-5" />
                    <div class="row align-items-center">
                        <div class="col-md-6 small"><?php _e('Todos los Derechos Reservados '); ?>&copy; Susana Piñero Rodríguez <?php echo date('Y'); ?></div>
                        <div class="col-md-6 text-md-right small">
                            <a href="javascript:void(0);"><?php _e('Políticas de privacidad'); ?></a>
                            &middot;
                            <a href="javascript:void(0);"><?php _e('Términos y condiciones'); ?></a>
                        </div>
                    </div>
                </div>
            </footer><!-- footer -->
        </div><!-- /#layoutDefault -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
          disable: 'mobile',
          duration: 600,
          once: true
        });
        </script>
        <?php wp_footer(); ?>
        <!-- Aquí llamo los script para cargar y ejecutar todas las funciones al final del footer. |
         I call the script to load and execute all the functions of the footer-->
    </body>
</html>
