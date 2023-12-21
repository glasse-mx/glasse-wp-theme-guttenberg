<footer>
    <div class="container footer__container">
        <div class="row py-5">
            <div class="col col-md-3 col-sm-12">
                <h6>Maquinas de</h6>
                <ul class="footer__menu">
                    <li>
                        <a href="#">Helado Suave</a>
                    </li>
                    <li>
                        <a href="#">Helado Duro</a>
                    </li>
                    <li>
                        <a href="#">Helado Frito</a>
                    </li>
                    <li>
                        <a href="#">Hielo</a>
                    </li>
                    <li>
                        <a href="#">Complementos</a>
                    </li>
                    <li>
                        <a href="#">Reguladores</a>
                    </li>
                </ul>
            </div>
            <div class="col col-md-3 col-sm-12">
                <h6>Insumos</h6>
                <ul class="footer__menu">
                    <li>
                        <a href="#">Bases de Helado</a>
                    </li>
                    <li>
                        <a href="#">Conos</a>
                    </li>
                </ul>

                <h6>Videos</h6>
                <ul class="footer__menu">
                    <li>
                        <a href="#">Tutoriales</a>
                    </li>
                    <li>
                        <a href="#">Shorts</a>
                    </li>
                </ul>
            </div>
            <div class="col col-md-3 col-sm-12">
                <h6>Atencion al Cliente</h6>
                <ul class="footer__menu">
                    <li>
                        <a href="#">Soporte Tecnico</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>

                <h6>Empresa</h6>
                <ul class="footer__menu">
                    <li>
                        <a href="#">Legal</a>
                    </li>
                    <li>
                        <a href="#">Terminos y Condiciones</a>
                    </li>
                </ul>
            </div>
            <div class="col col-md-3 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="<?= GLASSE_THEME_URI . '/assets/img/glogo-glasse-2.png" alt="Glasse - Maquinas de Helado' ?>">
                <?= footer_social_block(); ?>
            </div>
        </div>
    </div>
    <!-- <div class="row copyright__row">
            <div class="container footer__container">
                <div class="inner-row pt-3">
                    <p>Glasse © 2023 - Freddo & Thai S de RLV - Todos los derechos reservados .</p>
                    
                    <p>Developed by GabeCode</p>
                </div>
            </div>
        </div> -->
</footer>


<?php wp_footer(); ?>
</body>

</html>