<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Table168 */

$this->title = 'Update Table168: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Table168s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table168-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
