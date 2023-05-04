<?php
/* Template Name: Blog Home */
get_header(); ?>

<div class="container-lg">
    <?php
    if(has_flexible('Modules')):
        the_flexible('Modules');
    endif;
    ?>
</div>

<?php get_footer(); ?>
