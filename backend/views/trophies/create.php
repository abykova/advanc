<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TrophiesModel */

$this->title = 'Create Trophies Model';
$this->params['breadcrumbs'][] = ['label' => 'Trophies Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trophies-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
