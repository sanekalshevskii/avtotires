<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\Table225Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Диски';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table225-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить новый диск', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cat_id',
            'vendor_id',
            'vendor:ntext',
            'name:ntext',
            //'name_short:ntext',
            //'product_name:ntext',
            //'img_100x200',
            //'imgs',
            //'p_8:ntext',
            //'p_9:ntext',
            //'p_10:ntext',
            //'p_1:ntext',
            //'p_2:ntext',
            //'p_3:ntext',
            //'p_4:ntext',
            //'p_5:ntext',
            //'p_6:ntext',
            //'p_7:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
