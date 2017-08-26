<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since alterna 8.0
 */
get_header();

// get page layout
$layout = alterna_get_page_layout();
$layout_class = alterna_get_page_layout_class();

?>
<div id="main" class="container">
    <div class="row">
        <section class="<?php echo $layout == 1 ? 'col-md-12 col-sm-12' : 'alterna-col col-lg-12 col-md-12 col-sm-12 alterna-'.$layout_class; ?>">
            <?php
			if ( have_posts() ) {
				while ( have_posts() ){
					the_post();
					the_content();
					wp_link_pages();
				}
			}else{ ?>
                <p><?php _e('Sorry, this page does not exist.' , 'alterna' ); ?></p>
            <?php } ?>
        </section>

    </div>
</div>
<?php get_footer(); ?>
