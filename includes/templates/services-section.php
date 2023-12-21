<?php

function glasse_services_section_cb()
{
    ob_start();
?>
    <section id="serviceBlock" class="container my-4">
        <div class="grid-row">
            <div class="service-box">
                <div class="title-box mb-3">
                    <i class="fa-solid fa-location-dot"></i>
                    <h3>UBICACIÓN</h3>
                </div>
                <p>Calle Asunción 66. San Jerónimo Lídice. Magdalena Contreras. 10200. CDMX.</p>
            </div>

            <div class="service-box">
                <div class="title-box mb-3">
                    <i class="fa-solid fa-mobile-screen"></i>
                    <h3>LLÁMANOS</h3>
                </div>
                <a href="tel:+525534322353">
                    <i class="fa-solid fa-mobile-screen"></i>
                    55 3432 2353
                </a>
                <a href="tel:+525533538296">
                    <i class="fa-solid fa-mobile-screen"></i>
                    55 3353 8296
                </a>
                <a href="tel:+525545759700">
                    <i class="fa-solid fa-mobile-screen"></i>
                    55 4575 9700
                </a>
            </div>

            <div class="service-box">
                <div class="title-box mb-3">
                    <i class="fa-regular fa-pen-to-square"></i>
                    <h3>ESCRÍBENOS</h3>
                </div>
                <a href="mailto:gerencia@glasse.com.mx" class="mb-2">
                    <i class="fa-regular fa-envelope"></i>
                    gerencia@glasse.com.mx
                </a>

                <a href="mailto:direccion@glasse.com.mx">
                    <i class="fa-regular fa-envelope"></i>
                    direccion@glasse.com.mx
                </a>
            </div>

            <div class="service-box">
                <div class="title-box mb-3">
                    <i class="fa-solid fa-headset"></i>
                    <h3>HORARIO</h3>
                </div>
                <p class="mb-2">LUNES A VIERNES <br> 9:00 AM - 19:00</p>
                <p>SABADOS <br> 10:00 - 14:00</p>
            </div>
        </div>
    </section>
<?php
    $servicesSection = ob_get_contents();
    ob_end_clean();

    return $servicesSection;
}
