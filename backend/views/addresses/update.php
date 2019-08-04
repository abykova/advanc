<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AddressesModel */

$this->title = 'Update Addresses Model: ' . $model->key;
$this->params['breadcrumbs'][] = ['label' => 'Addresses Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->key, 'url' => ['view', 'id' => $model->key]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="addresses-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
