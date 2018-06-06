<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Table168 */

$this->title = 'Create Table168';
$this->params['breadcrumbs'][] = ['label' => 'Table168s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table168-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
