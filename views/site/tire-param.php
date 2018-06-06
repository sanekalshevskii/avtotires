<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = 'Шины';
?>

<div class="container">
    <div class="container" style="background: #f2f4ef">

        <?php
        $form = ActiveForm::begin([
//        'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
        ]) ?>


        <div class="row">
            <div class="col-md-2"> <?= $form->field($model_t, 'width')->dropdownList(
                    [30 => 30, 31 => 31, 32 => 32, 33 => 33, 35 => 35, 135 => 135, 145 => 145, 155 => 155, 165 => 165, 175 => 175, 185 => 185, 205 => 205, 215 => 215, 225 => 225, 235 => 235, 245 => 245, 255 => 255, 265 => 265, 275 => 275, 285 => 285, 295 => 295, 305 => 305, 315 => 315, 325 => 325, 335 => 335, 355 => 355, 385 => 385],
                    ['prompt' => '195']
                )->label('Высота');
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <?= $form->field($model_t, 'height')->dropdownList(
                    [9.5 => 9.5, 10.5 => 10.5, 11.5 => 11.5, 12.5 => 12.5, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70, 75 => 75, 80 => 80, 85 => 85, 90 => 90],
                    ['prompt' => '65']
                )->label('Профиль');;
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <?= $form->field($model_t, 'diameter')->dropdownList(
                    [],
                    ['prompt' => '15']
                )->label('Ширина обода');;
                ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <?= $form->field($model_t, 'season')->dropdownList(
                    ['летние' => 'летние', 'зимние' => 'зимние', 'всесезонные' => 'всезезонные'],
                    ['prompt' => 'Любая']
                )->label('Сезонность');;
                ?>
            </div>
        </div>

        <div class="row">


            <div class="row"></div>
            <div class="col-md-3">
                <div><a href="#" id="manufacturesDivToggle" class="btn btn-warning">Производители</a></div>
                <div id="manufacturesDiv" style="background: #5BBCEC" class="col-md-4">
                    <?= $form->field($model_t, 'manufacturer')->checkboxList(
                        ['rerffr', 'erferf'],
                        ['prompt' => 'Производитель']
                    );
                    ?>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('НАЙТИ', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
    <?php ActiveForm::end() ?>


    <h2 class="title text-center">ШИНЫ</h2>
    <?php $i = 0;
    foreach ($tires as $hit): ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <?= Html::img("@web/images/168_all/{$hit->imgs}.jpg", ['alt' => $hit->name, 'height' => 200]) ?>
                        <h2>цена неуказана</h2>
                        <p>
                            <a href="<?= \yii\helpers\Url::to(['card-product/tire', 'id' => $hit->id]) ?>"><?= $hit->name ?></a>
                        </p>
                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id]) ?>" data-type="tire"
                           data-id="<?= $hit->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>
                            Add to cart</a>
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
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
    <div class="clearfix"></div>
</div>
