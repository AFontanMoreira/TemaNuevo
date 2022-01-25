<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <!-- Aqui va mi 404 -->
    <div id="pag">
        <div id="mensaje">
            <h1>Pagina no encontrada</h1>
        </div>
        <div id="buscar">
            <h2>
                <?php
                get_search_form(
                    array(
                        'aria_label' => __('404 not found', 'newfuncy'),
                    )
                );
                ?>
            </h2>
        </div>
        <div>

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gon.gif">

        </div>
    </div>



<?php
get_footer();
