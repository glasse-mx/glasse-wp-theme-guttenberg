<?php

function glasse_location_block_cb()
{
    ob_start();
?>
    <section id="mapsBlock" class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.2540047866313!2d-99.22537513044725!3d19.32511116441259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdffb5a5b0b6b1%3A0x8543e8490ebdaa79!2sGLASSE!5e0!3m2!1ses-419!2smx!4v1702335711158!5m2!1ses-419!2smx" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php
    $locationBlock = ob_get_contents();
    ob_end_clean();

    return $locationBlock;
}
