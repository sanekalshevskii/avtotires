<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Table225 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Table225s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table225-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cat_id',
            'vendor_id',
            'vendor:ntext',
            'name:ntext',
            'name_short:ntext',
            'product_name:ntext',
            'img_100x200',
            'imgs',
            'p_8:ntext',
//            [
//                'label' => 'Тип диска',
//                'value' => $model->p_8,
//            ],
            'p_9:ntext',
            'p_10:ntext',
            'p_1:ntext',
            'p_2:ntext',
            'p_3:ntext',
            'p_4:ntext',
            'p_5:ntext',
            'p_6:ntext',
            'p_7:ntext',
        ],
    ]) ?>

</div>
