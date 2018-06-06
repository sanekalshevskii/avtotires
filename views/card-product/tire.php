<?php
use yii\helpers\Html;


$this->title = $table_tire->vendor .' '. $table_tire->name_short;
?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 padding-right">

                <div class="product-details" style="'margin': auto;"><!--product-details-->
                    <div class="col-sm-3">
                        <div class="view-product">
                            <?= Html::img("@web/images/168_all/{$table_tire->imgs}.jpg", ['alt' => $table_tire->name,'height'=>200]) ?>
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
                    <div class="col-sm-9">
                        <div class="product-information" ><!--/product-information-->
<!--                            <img src="/images/product-details/new.jpg" class="newarrival" alt="" />-->
                            <h2><?= $table_tire->product_name ?></h2>
<!--                            <p>Web ID: 1089772</p>-->
<!--                            <img src="/images/product-details/rating.png" alt="" />-->
                            <span>
									<span>Цена неуказана</span>
									<label>Количество:</label>
									<input type="text" value="1" id="qty"/>
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $table_tire->id]) ?>" data-type="tire"
                                       data-id="<?= $hit->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                                         Add to cart</a>
                            </span>
                            <p><b>Тип автомобиля:</b> <?= $table_tire->p_1?></p>
                            <p><b>Сезонность:</b> <?= $table_tire->p_2?></p>
                            <p><b>Индекс скорости:</b> <?= $table_tire->p_6?></p>
                            <p><b>Индекс нагрузки:</b> <?= $table_tire->p_7?></p>
                            <p><b>Способ герметизации:</b> <?= $table_tire->p_8?></p>
                            <p><b>Конструкция:</b> <?= $table_tire->p_9?></p>
                            <p><b>Технология RunFlat:</b> <?= $table_tire->p_10?></p>
                            <p><b>Шипы:</b> <?= $table_tire->p_11?></p>

<!--                            <a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>-->
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
            </div>

        </div>
    </div>
</section>

