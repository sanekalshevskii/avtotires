<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Table225 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table225-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'vendor')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name_short')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'product_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_100x200')->textInput() ?>

    <?= $form->field($model, 'imgs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_8')->textarea(['rows' => 6])->label('Тип диска') ?>

    <?= $form->field($model, 'p_9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_7')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
