<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage olivas
 * @since olivas 1.0
 */

?>
    <div class="container pt-5 px-xxl-5">
        <div class="row">
            <div class="col-12 mt-5">
                <header class="page-header alignwide">
                    <h1 class="page-title"><?php esc_html_e( 'Página não encontrada', 'olivas' ); ?></h1>
                </header><!-- .page-header -->

                <div class="error-404 not-found default-max-width mt-3">
                    <div class="page-content">
                        <p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Que tal tentar uma pesquisa?', 'olivas' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </div><!-- .error-404 -->
            </div>
        </div>
    </div>
<?php
