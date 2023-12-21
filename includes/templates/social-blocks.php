<?php

/**
 * Topbar social block
 * 
 * template que muestra los iconos sociales en la parte superior de la barra de navegacion
 * si se declaro el valor primero dentro del plugin
 * 
 */
function topbar_social_block()
{
    $options = get_option('glasse_options');
    ob_start();
?>
    <div id="socialIcons">

        <?php if ($options['instagram']) : ?>
            <a href="<?= $options['instagram'] ?>" target="_blank" class="socialLink color-instagram">
                <i class="fab fa-instagram"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['facebook']) : ?>
            <a href="<?= $options['facebook'] ?>" target="_blank" class="socialLink color-facebook">
                <i class="fab fa-facebook"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['twitter']) : ?>
            <a href="<?= $options['twitter'] ?>" target="_blank" class="socialLink color-x-twitter">
                <i class="fab fa-x-twitter"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['tiktok']) : ?>
            <a href="<?= $options['tiktok'] ?>" target="_blank" class="socialLink color-tiktok">
                <i class="fab fa-tiktok"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['youtube']) : ?>
            <a href="<?= $options['youtube'] ?>" target="_blank" class="socialLink color-youtube">
                <i class="fab fa-youtube"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['whatsapp']) : ?>
            <a href="https://api.whatsapp.com/send/?phone=<?= $options['whatsapp'] ?>&text=Hola%21+Deseo+informaci%C3%B3n%2C+ll%C3%A1mame+por+favor&type=phone_number&app_absent=0" class="btn btn-whatsapp" target="_blank" class="socialLink color-whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
        <?php endif; ?>
    </div>
<?php
    $socialBlock = ob_get_contents();
    ob_end_clean();

    return $socialBlock;
}

/**
 * Footer social block
 * 
 * template que muestra los iconos sociales en el footer
 * si se declaro el valor primero dentro del plugin
 * 
 */
function footer_social_block()
{
    $options = get_option('glasse_options');
    ob_start();
?>
    <div id="footerSocialBar" class="row mx-auto">

        <?php if ($options['instagram']) : ?>
            <a href="<?= $options['instagram'] ?>" target="_blank" class="socialLink color-instagram">
                <i class="fab fa-instagram"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['facebook']) : ?>
            <a href="<?= $options['facebook'] ?>" target="_blank" class="socialLink color-facebook">
                <i class="fab fa-facebook"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['twitter']) : ?>
            <a href="<?= $options['twitter'] ?>" target="_blank" class="socialLink color-x-twitter">
                <i class="fab fa-x-twitter"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['tiktok']) : ?>
            <a href="<?= $options['tiktok'] ?>" target="_blank" class="socialLink color-tiktok">
                <i class="fab fa-tiktok"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['youtube']) : ?>
            <a href="<?= $options['youtube'] ?>" target="_blank" class="socialLink color-youtube">
                <i class="fab fa-youtube"></i>
            </a>
        <?php endif; ?>

        <?php if ($options['whatsapp']) : ?>
            <a href="https://api.whatsapp.com/send/?phone=<?= $options['whatsapp'] ?>&text=Hola%21+Deseo+informaci%C3%B3n%2C+ll%C3%A1mame+por+favor&type=phone_number&app_absent=0" class="btn btn-whatsapp" target="_blank" class="socialLink color-whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
        <?php endif; ?>
    </div>
<?php
    $socialBlock = ob_get_contents();
    ob_end_clean();

    return $socialBlock;
}

/**
 * Esta funcion retorna el bloque con los dos numeros telefonicos
 * de la empresa
 * 
 * @return string $phoneBlock
 */
function glasse_phone_block()
{
    $options = get_option('glasse_options');
    ob_start();
?>
    <div id="phoneCalls">
        <?php if ($options['phone1']) : ?>
            <a href="<?= 'tel: +52' . $options['phone1'] ?>" class="phoneLink">
                <i class="fa-solid fa-mobile-screen"></i>
                <span><?= glassePhoneNumber($options['phone1']) ?></span>
            </a>
        <?php endif; ?>

        <?php if ($options['phone2']) : ?>
            <a href="<?= 'tel:+52' . $options['phone2'] ?>" class="phoneLink">
                <i class="fa-solid fa-mobile-screen"></i>
                <span><?= glassePhoneNumber($options['phone2']) ?></span>
            </a>
        <?php endif; ?>
    </div>
<?php
    $phoneBlock = ob_get_contents();
    ob_end_clean();

    return $phoneBlock;
}
