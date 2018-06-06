<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Table168Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table168-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'vendor') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'name_short') ?>

    <?php // echo $form->field($model, 'product_name') ?>

    <?php // echo $form->field($model, 'img_100x200') ?>

    <?php // echo $form->field($model, 'imgs') ?>

    <?php // echo $form->field($model, 'p_1') ?>

    <?php // echo $form->field($model, 'p_2') ?>

    <?php // echo $form->field($model, 'p_3') ?>

    <?php // echo $form->field($model, 'p_4') ?>

    <?php // echo $form->field($model, 'p_6') ?>

    <?php // echo $form->field($model, 'p_7') ?>

    <?php // echo $form->field($model, 'p_8') ?>

    <?php // echo $form->field($model, 'p_9') ?>

    <?php // echo $form->field($model, 'p_10') ?>

    <?php // echo $form->field($model, 'p_11') ?>

    <?php // echo $form->field($model, 'p_12') ?>

    <?php // echo $form->field($model, 'p_5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
