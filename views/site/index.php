<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ООО "Шинтрек"';
?>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>ШИНТРЕК 1</h1>
                                <h2>Текст</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <!--                                <button type="button" class="btn btn-default get">Get it now</button>-->
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/dunlop-1.jpg" class="girl img-responsive" alt=""/>
                                <!--                                <img src="images/home/pricing.png"  class="pricing" alt="" />-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>ШИНТРЕК 2</h1>
                                <h2>Текст</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <!--                                <button type="button" class="btn btn-default get">Get it now</button>-->
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/dunlop-2.jpg" class="girl img-responsive" alt=""/>
                                <!--                                <img src="images/home/pricing.png"  class="pricing" alt="" />-->
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1>ШИНТРЕК 3</h1>
                                <h2>Текст</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <!--                                <button type="button" class="btn btn-default get">Get it now</button>-->
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/dunlop-3.jpg" class="girl img-responsive" alt=""/>
                                <!--                                <img src="images/home/pricing.png" class="pricing" alt="" />-->
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class=" padding-right container">
        <?php if (!empty($this)): ?>
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">НУ, КАКТО НАК, ЧТОЛИ.....)</h2>
                <?php $i = 0;
                foreach ($hits as $hit): ?>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?= Html::img("@web/images/168_all/{$hit->imgs}.jpg", ['alt' => $hit->name, 'height' => 200]) ?>
                                    <h2>цена неуказана</h2>
                                    <p>
                                        <a href="<?= \yii\helpers\Url::to(['card-product/tire', 'id' => $hit->id]) ?>"><?= $hit->name ?></a>
                                    </p>
                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id]) ?>"
                                       data-id="<?= $hit->id ?>" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $i++ ?>
                    <?php if ($i % 3 == 0): ?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div><!--features_items-->
        <?php endif; ?>
    </div>
</section>