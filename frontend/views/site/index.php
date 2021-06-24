<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

$this->title = 'MA.PA';
$this->registerJsFile('js/site.js', ['depends' => [\frontend\assets\AppAsset::className()]]);
$this->registerCssFile('css/site.css', ['depends' => [\frontend\assets\AppAsset::className()]]);
//$this->registerCss('css/site.css')
?>
<div class="site-blocks-cover">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-12" style="position: relative;" data-aos="fade-up">
                <img src="images/s1200.png" alt="Image" class="img-fluid img-absolute">

                <div class="row mb-4">
                    <div class="col-lg-4 mr-auto">
                        <h1>Impresa di pulizie</h1>
                        <p class="mb-5">Lavoriamo a Milano e provincia</p>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light" id="features-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Nostri Contatti</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <!--            <a href="tel:+39380 38 36031" target="_blank">-->
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-phone"></span></span>
                    </div>
                    <div>
                        <h3>Numero di telefono</h3>
                        <p><a href="tel:+393803836031" target="_blank">+39380 38 36031</a></p>
                    </div>
                </div>

            </div>
            <!--            </a>-->
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-contact_mail"></span></span>
                    </div>
                    <div>
                        <h3>Email</h3>
                        <p><a href="mailto:ma.papulizie@libero.it" target="_blank">ma.papulizie@libero.it</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-location_city"></span></span>
                    </div>
                    <div>
                        <h3>Locazione</h3>
                        <p><a href="https://goo.gl/maps/DKGzA1UDmuA6qzsa9" target="_blank">20096 Pioltello (Mi)
                                v.L.Galvani, 6</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Contattaci</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7 mb-5">
                <form method="post" class="p-5 bg-white">
                    <h2 class="h4 text-black mb-5">Forma di Contatto</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Nome</label>
                            <input type="text" id="fname" name="fname" class="form-control rounded-0"/>
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Cognome</label>
                            <input type="text" id="lname" name="lname" class="form-control rounded-0"/>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control rounded-0"/>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Oggetto</label>
                            <input type="subject" id="subject" name="subject" class="form-control rounded-0"/>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Messaggio</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0"
                                      placeholder="Scrivi le tue annotazioni o messaggio qui..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Manda il messaggio" class="btn btn-primary mr-2 mb-2"/>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>