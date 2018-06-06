<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Table225 */

$this->title = 'Create Table225';
$this->params['breadcrumbs'][] = ['label' => 'Table225s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table225-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
