<?php

function glasse_contact_section_cb()
{
    $options = get_option('glasse_options');

    ob_start();
?>
    <section class="container mb-4" id="contactSection">
        <div class="row">
            <div class="col-md-6 col-sm-12 p-5">
                <h3>SERÁ UN PLACER ATENDERTE</h3>
                <p>En <b>GLASSE®</b> estamos listos para atenderte, te invitamos a dejarnos un mensaje, o contáctanos via WhatsApp a través del siguiente botón</p>
                <?php if ($options['whatsapp']) : ?>
                    <a href="https://api.whatsapp.com/send/?phone=<?= $options['whatsapp'] ?>&text=Hola%21+Deseo+informaci%C3%B3n%2C+ll%C3%A1mame+por+favor&type=phone_number&app_absent=0" class="btn btn-whatsapp" target="_blank">
                        Chatea con Nosotros
                        <i class="fab fa-whatsapp"></i>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-sm-12 contact-block py-2 px-4">
                <form class="py-5 px-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="firstName" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="lastName" placeholder="Apellido">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="emailAddress" placeholder="Correo Electronico">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Mensaje"></textarea>
                        </div>
                    </div>

                    <div class="row d-flex px-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
    $contactSection = ob_get_contents();
    ob_end_clean();

    return $contactSection;
}
