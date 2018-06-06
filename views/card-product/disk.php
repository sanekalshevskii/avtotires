<?php
use yii\helpers\Html;

$this->title = $table_disk->vendor .' '. $table_disk->name_short;
?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">

                <div class="product-details"><!--product-details-->
                    <div class="col-sm-3">
                        <div class="view-product">
                            <?= Html::img("@web/images/225_all/{$table_disk->imgs}.jpg", ['alt' => $table_disk->name, 'height'=>200]) ?>
                            <!--                            <h3>ZOOM</h3>-->
                        </div>
<!--                        <div id="similar-product" class="carousel slide" data-ride="carousel">-->

                            <!-- Wrapper for slides -->

                            <!-- Controls -->
                            <!--                            <a class="left item-control" href="#similar-product" data-slide="prev">-->
                            <!--                                <i class="fa fa-angle-left"></i>-->
                            <!--                            </a>-->
                            <!--                            <a class="right item-control" href="#similar-product" data-slide="next">-->
                            <!--                                <i class="fa fa-angle-right"></i>-->
                            <!--                            </a>-->
<!--                        </div>-->

                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <!--                            <img src="/images/product-details/new.jpg" class="newarrival" alt="" />-->
                            <h2><?= $table_disk->product_name ?></h2>
                            <!--                            <p>Web ID: 1089772</p>-->
                            <!--                            <img src="/images/product-details/rating.png" alt="" />-->
                            <span>
									<span>Цена неуказана</span>
									<label>Количество:</label>
									<input type="text" value="1" id="qty" />
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $table_disk->id]) ?>"
                                       data-id="<?= $table_disk->id?>" class="btn btn-fefault add-to-cart cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</a>
								</span>
                            <p><b>Тип:</b> <?= $table_disk->p_8?></p>
                            <p><b>Материал:</b> <?= $table_disk->p_9?></p>
                            <p><b>Цвет:</b> <?= $table_disk->p_10?></p>

                            <!--                            <a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>-->
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>