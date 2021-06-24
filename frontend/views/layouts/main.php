<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php $this->beginBody() ?>

<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container d-none d-lg-block">
        <div class="row">
            <div class="col-12 text-center mb-4 mt-5">
                <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">MA.PA</a></h1>
            </div>
        </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
                    <h1 class="mb-0 site-logo"><a href="/" class="text-black h2 mb-0">MA.PA</a></h1>
                </div>
            </div>
        </div>

    </header>
    <?= $content ?>
    <div class="footer py-5 border-top text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        Tutti i diritti riservati | P.IVA: 10639120962
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
