<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<!--    <link rel="shortcut icon" href="images/ico/favicon.ico">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">-->
<!--    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
</head><!--/head-->

<body>
<?php $this->beginBody() ?>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 coler">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +375(29) 666-66-66</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +375(29) 111-22-33</a></li>
<!--                            <li><a href="#"><i class="fa fa-phone"></i> +375(29) 555-55-55</a></li>-->
<!--                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>-->

                        </ul>
                    </div>
                </div>

                <!--иконки для соцсетей-->
<!--                <div class="col-sm-6 coler">-->
<!--                    <div class="social-icons pull-right">-->
<!--                        <ul class="nav navbar-nav">-->
<!--                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= \yii\helpers\Url::home()?>"><h1>ООО "ШИНРЕК"</h1></a>
<!--                        <a href="index.html"><img src="images/home/logo.png" alt="" /></a>-->
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
<!--                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>-->
<!--                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
<!--                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
                            <li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom container"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><?= Html::a('Шины', ['site/tire-param'])?></li>
                            <li><?= Html::a('Диски', ['site/disk-param'])?></li>
                            <li><?= Html::a('Доставка', ['site/delivery'])?></li>
                            <li><?= Html::a('Оплата', ['site/payment'])?></li>
                            <li><?= Html::a('Контакты', ['site/cont'])?></li>
                            <li><?= Html::a('Отзывы', ['site/contact'])?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<?= $content; ?>

<footer id="footer"><!--Footer-->
<!--    <div class="footer-top">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-2">-->
<!--                    <div class="companyinfo">-->
<!--                        <h2><span>Шинтрек</span></h2>-->
<!--                        <p>Задача организации, в особенности же сложившаяся структура организации требуют от нас анализа новых предложений.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-7">-->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe1.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe2.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe3.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-sm-3">-->
<!--                        <div class="video-gallery text-center">-->
<!--                            <a href="#">-->
<!--                                <div class="iframe-img">-->
<!--                                    <img src="/images/home/iframe4.png" alt="" />-->
<!--                                </div>-->
<!--                                <div class="overlay-icon">-->
<!--                                    <i class="fa fa-play-circle-o"></i>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <p>Circle of Hands</p>-->
<!--                            <h2>24 DEC 2014</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="address">-->
<!--                        <img src="/images/home/map.png" alt="" />-->
<!--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="footer-top>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-12">-->
<!--                    <p class="pull-left">Copyright © 201 ООО "ШИНТРЕК" </p>-->
<!--                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</footer><!--/Footer-->

<?php
yii\bootstrap\Modal::begin([
    'header' => '<h2>Ваша корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view'])  . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>',
]);
yii\bootstrap\Modal::end()
?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>