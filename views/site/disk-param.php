<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

/** @var \app\models\DiskFilterModel $model_d */
$this->title = 'Диски';

$arrDisk_type = ['штампованные' => 'штампованные', 'литые' => 'литые'];
$arrDiameter = [13 => 13, 14 => 14, 15 => 15, 16 => 16, 17 => 17, 18 => 18, 19 => 19, 20 => 20];
$arrMount = [4 => 4, 5 => 5, 6 => 6];
$arrDistance = [98 => 98, 100 => 100, 105 => 105, 108 => 108, 110 => 110, 112 => 112, 114 => 114, 115 => 115,
    118 => 118, 120 => 120, 125 => 125, 127 => 127, 130 => 130, 139 => 139, 150 => 150, 160 => 160, 170 => 170,
    180 => 180, 200 => 200, 205 => 205, 245 => 245,];
$arrWidth = [4 => 4, 4.5 => 4.5, 5 => 5, 5.5 => 5.5, 6 => 6, 6.5 => 6.5, 7 => 7, 7.5 => 7.5, 8 => 8, 8.5 => 8.5, 9 => 9, 9.5 => 9.5, 10 => 10];
$arrVilet = [14 => 14, 18 => 18, 20 => 20, 23 => 23, 24 => 24, 25 => 25, 26 => 26, 27 => 27, 29 => 29, 30 => 30, 31 => 31,
    32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 42 => 42, 43 => 43,
    44 => 44, 45 => 45, 46 => 46, 47 => 47, 47.5 => 47.5, 49 => 49, 50 => 50, 51 => 51, 52 => 52, 52.5 => 52.5, 53 => 53,
    55 => 55, 56 => 56, 57 => 57, 58 => 58, 60 => 60, 62 => 62, 66 => 66, 68 => 68, 70 => 70, 105 => 105, 106 => 106, 110 => 110,];
$arrManufacturer = ['LegeArtis' => 'LegeArtis', 'K&K' => 'K&K', 'Replay' => 'Replay', 'Advanti' => 'Advanti'];
?>
<div class="container">
    <div class="container" style="background: #f2f4ef">
        <?php
        $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'method'=>'get'
        ]) ?>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model_d, 'disk_type')->dropdownList(
                    $arrDisk_type,
                    ['prompt' => 'Любой']
                )->label('Тип диска');
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <?= $form->field($model_d, 'diameter')->dropdownList(
                    $arrDiameter,
                    ['prompt' => 'Любой']
                )->label('Диаметр');
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <?= $form->field($model_d, 'mount')->dropdownList(
                    $arrMount,
                    ['prompt' => 'Любое']
                )->label('Кол-во крепежных отверстий');
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model_d, 'distance')->dropdownList(
                    $arrDistance,
                    ['prompt' => 'Любой']
                )->label('Диаметр отверстий (PCD)');
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <?= $form->field($model_d, 'width')->dropdownList(
                    $arrWidth,
                    ['prompt' => 'Любая']
                )->label('Ширина обода');
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <?= $form->field($model_d, 'vilet')->dropdownList(
                    $arrVilet,
                    ['prompt' => 'Любой']
                )->label('Вылет (ET)');
                ?>
            </div>
        </div>
        <div class="row">
            <div>
                <a href="#" id="manufacturesDivToggle" class="btn btn-warning">Производители</a>
            </div>
            <div id="manufacturesDiv" style="background: #5BBCEC" class="col-md-4">

                <?= $form->field($model_d, 'manufacturer') ->checkboxList(
                        $arrManufacturer,
                        [])->label(false); ?>

            </div>
<!--        </div>-->
<!--        <div class="row">-->
            <div class="col-md-2"></div>
            <div class="form-group col-md-3">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('НАЙТИ', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>

    <h2 class="title text-center"><?= $this->title?></h2>
    <?php $i = 0; foreach ($disks as $hit): ?>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <?= Html::img("@web/images/225_all/{$hit->imgs}.jpg", ['alt' => $hit->name, 'height'=>200]) ?>
                        <h2>цена неуказана</h2>
                        <p><a href="<?= \yii\helpers\Url::to(['card-product/disk','id'=>$hit->id])?>"><?= $hit->name ?></a></p>
                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id]) ?>" data-type="disk"
                           data-id="<?= $hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>


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
        <?php $i++?>
        <?php if($i % 3 == 0):?>
            <div class="clearfix"></div>
        <?php endif;?>
    <?php endforeach; ?>
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
    <div class="clearfix"></div>
</div>
