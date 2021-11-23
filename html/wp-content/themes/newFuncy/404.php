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
<h1>No se ha encontrado lo que estabas buscando pero puedes probar a buscar algo nuevo</h1>
    <div id="container">
        <div id="cabecera" class="rojo">
            <h1>PT</h1>
        </div>
        <div>
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/gon.gif">
        </div>
    </div>
<h2>
    <?php
    get_search_form(
        array(
            'aria_label' => __( '404 not found', 'newfuncy' ),
        )
    );
    ?>
</h2>

<?php
get_footer();
