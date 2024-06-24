<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag, and adds the site's header.
 *
 */
?>

	<?php wp_head(); ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php if (is_active_sidebar('custom-widget-area-1')) : ?>
                    <div id="custom-widget-area-1" class="custom-widget-area widget-area" role="complementary">
                        <?php dynamic_sidebar('custom-widget-area-1'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <?php if (is_active_sidebar('custom-widget-area-2')) : ?>
                    <div id="custom-widget-area-2" class="custom-widget-area widget-area" role="complementary">
                        <?php dynamic_sidebar('custom-widget-area-2'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-2">
                <?php if (is_active_sidebar('custom-widget-area-3')) : ?>
                     <div id="custom-widget-area-3" class="custom-widget-area widget-area" role="complementary">
                        <?php dynamic_sidebar('custom-widget-area-3'); ?>
                    </div>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</header>

