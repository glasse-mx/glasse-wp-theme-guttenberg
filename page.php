<?php get_header(); ?>

<main>
    <?= the_content(); ?>

    <?= glasse_services_section_cb(); ?>
    <?= glasse_contact_section_cb(); ?>
    <?= glasse_location_block_cb(); ?>
</main>

<?php get_footer(); ?>